<?php

namespace App\Services;

use App\CarModel;
use App\CarType;
use App\Stocks;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Seo;
use App\City;
use App\Contacts;

class SeoService
{
    public $request;

    public function __construct(Request $request = NULL)
    {
        if ($request) {
            $this->request = $request;
        }
    }

    /**
     * Получаем мета-теги
     *
     * @param string $route
     * @return object
     */
    public function getMetaTags(string $route = '')
    {
        $meta_tags = [];
        $meta = [];

        if (!$route) {
            return $meta_tags;
        }

        $route_tmp = explode('?', $route);

        $segments = explode("/", ltrim($route_tmp[0], '/'));
        $route_city = array_shift($segments);

        $city = City::where('alias', $route_city)->first();

        if ($city) {
            $meta = $this->findSeoTags($segments, $city);
        }

        if ($meta) {
            $coordinates = explode(',', $city->coordinates);
            $meta['images'] = '/images/main/tablet/main_granta_red.jpg';
            $meta['place']['latitude'] = trim($coordinates[0]);
            $meta['place']['longitude'] = trim($coordinates[1]);
            $meta['site_name'] = 'brightpark.ru';
        }

        return $meta;
    }

    /**
     * Ищем мета-теги
     *
     * @param array $segments Сегементы роута
     * @param City $city Город
     * @return array
     */
    private function findSeoTags(array $segments, City $city) : array
    {
        $meta = [];

        $meta_arr = Seo::where('url', implode('/', $segments))->orderBy('id', 'asc')->get()->toArray();

        if ($meta_arr) {
            $meta_tmp = array_filter($meta_arr, function($var) use ($city) {
                $cities = explode(",", $var['city']);
                return in_array($city->id, $cities);
            });

            if (!$meta_tmp) {
                $meta_tmp = array_filter($meta_arr, function($var){
                    $cities = explode(",", $var['city']);
                    return in_array(0, $cities);
                });
            }

            if ($meta_tmp) {
                $meta_tmp = array_values($meta_tmp);
                $meta = $meta_tmp[count($meta_tmp) - 1];

                $patterns = [
                    '/<:CITY:>/',
                    '/<:CITY_DATIVE:>/',
                    '/<:REGION_DATIVE:>/',
                ];

                $replacements = [
                    $city->title_ru,
                    $city->city_dative,
                    $city->region_dative,
                ];

                if (count($segments) && $segments[0] === 'contacts') {
                    $contacts = Contacts::where('city_id', $city->id)->first();

                    array_push($patterns, '/<:ADDRESS:>/', '/<:PHONE:>/');
                    array_push($replacements, $contacts->address, $contacts->phone);
                }

                list($meta['title'], $meta['description']) = preg_replace($patterns, $replacements, [$meta['title'], $meta['description']]);
            }
        }

        return $meta;
    }

    /**
     * Задаем мета теги
     *
     * @param $city
     * @param array $params
     * @return void
     */
    public function setMetaTags($city, array $params = []) : void
    {
        if ($city === null ) {
            return;
        }

        $path = $this->request->path();
        $path_segments = explode('/', $path);
        array_shift($path_segments);

        $seo_db = DB::table('seo')
            ->join('seo_cities', 'seo.id', '=', 'seo_cities.seo_id')
            ->select('seo.*', 'seo_cities.*')
            ->where('seo.url', implode('/', $path_segments))
            ->where(function($query) use($city) {
                $query->where('seo_cities.city_id', $city->id)
                    ->orWhere('seo_cities.city_id', 0);
            })
            ->first();

        if ($seo_db) {
            $patterns = [
                '/<:CITY_DATIVE:>/',
                '/<:REGION_DATIVE:>/',
            ];

            $replacements = [
                $city->city_dative,
                $city->region_dative,
            ];

            list($seo_db->title, $seo_db->description) = preg_replace($patterns, $replacements, [$seo_db->title, $seo_db->description]);
        }

        $seo = $this->generateMetaTags($path, $city, $params);

        $title = !empty($seo_db->title) ? $seo_db->title : $seo->title;
        $description = !empty($seo_db->description) ? $seo_db->description : $seo->description;

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::setCanonical($this->request->url());
        OpenGraph::setTitle($title);
        OpenGraph::setType('website');
        OpenGraph::setUrl($this->request->fullUrl());
        OpenGraph::setDescription($description);

        JsonLd::setTitle($title);
        JsonLd::setType('WebSite');
        JsonLd::setUrl($this->request->fullUrl());
        JsonLd::setDescription($description);

        if (isset($seo->image) && $seo->image) {
            OpenGraph::addImage($seo->image);
        }
        if (isset($seo->place) && $seo->place) {
            OpenGraph::setType('place')
                ->setPlace([
                    'location:latitude' => $seo->place[0],
                    'location:longitude' => $seo->place[1],
                ]);
        }
        TwitterCard::setTitle($title);

    }

    /**
     * Генерируем мета-теги
     *
     * @param string $path Путь на сайте
     * @param City $city Город
     * @param array $params Параметры
     * @return object
     */
    public function generateMetaTags(string $path, City $city, array $params = []) : object
    {
        $tags = new \stdClass;
        $segments = explode('/', $this->request->path());

        switch ( count($segments) )
        {
            case 1:
                $tags->title = "Автосалон Брайт Парк ー официальный дилер автомобилей Лада (Lada) в " . $city->city_dative;
                $tags->description = "Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада в " . $city->region_dative . " 🚗 Купить новую Lada в " . $city->city_dative . " 🚗 в обмен и кредит. 500 авто с ПТС в наличии.";
                $tags->place = $params['place'];
                break;
            case 2:
                if ( $segments[1] === 'contacts' )
                {
                    $contacts = Contacts::where('city_id', $city->id)->first();
                    $tags->title = "Контакты Брайт Парка в " . $city->city_dative . ". Адрес: " . $contacts->address. ', Телефон: ' . $contacts->phone;
                    $tags->description = "Брайт Парк в " . $city->city_dative . ". " . $contacts->address . ', тел.: ' . $contacts->phone;
                } elseif ( $segments[1] === 'stocks' )
                {
                    $tags->title = "Акции на автомобили LADA в " . $city->city_dative;
                    $tags->description = "Ищете выгодные предложения на автомобили LADA в " . $city->city_dative . "? Посмотрите действующие акции в Брайт Парке";
                } elseif ( $segments[1] === 'news' )
                {
                       $tags->title = "Новости – Брайт Парк: официальный дилер LADA в " . $city->city_dative;
                       $tags->description = "Актуальные новости от официального дилера LADA в " . $city->city_dative . " – Брайт Парк. Узнайте первыми о новинках и специальных предложениях";
                } elseif ( $segments[1] === 'special_offers' ) {
                    $tags->title = "Брайт Парк - Официальный дилер LADA (ЛАДА) в " . $city->city_dative;
                    $tags->description = "Выбираете где купить новую LADA (ЛАДА) по лучшей цене в " . $city->city_dative . "? У официального дилера LADA - Брайт Парк автомобили в наличии по лучшей стоимости. Также в нашем автосалоне выгодный обмен и кредит.";
                    $tags->place = $params['place'];
                } elseif ( $segments[1] === 'privacy' )
                {
                    $tags->title = "Политика конфиденциальности Брайт Парк в " . $city->city_dative;
                    $tags->description = "Политика конфиденциальности Брайт Парк";
                } elseif ( $segments[1] === 'service' )
                {
                    $tags->title = "Сервисный центр автосалона Брайт Парк в " . $city->city_dative;
                    $tags->description = "Брайт Парк " . $city->title_ru . " предлагает Сервисное обслуживание автомобилей Лада в " . $city->city_dative;
                } elseif ( $segments[1] === $params['model']->slug) {
                    $tags->title = 'Новая LADA ' . $params['model']->title . ' по лучшей цене в ' . $city->city_dative . ' | Брайт Парк';
                    $tags->description =  "Выбираете где купить новую LADA " . $params['model']->title . " по лучшей цене в " . $city->city_dative . "? У официального дилера LADA - Брайт Парк " . $params['model']->title . " в наличии по лучшей стоимости. Также у нас выгодный обмен и кредит.";
                }

                break;
            case 3:
                if ( $segments[1] === 'stocks' )
                {
                    $tags->title = $params['stocks']->title . " - Брайт Парк" . $city->city_dative;
                    $tags->description = mb_strimwidth($params['stocks']->text_short, 0, 157, "...") . " - Брайт Парк в " . $city->city_dative;
                } elseif ( $segments[1] === 'news' )
                {
                    $tags->title = $params['news']->title . " - Брайт Парк в " . $city->city_dative;
                    $tags->description = mb_strimwidth($params['news']->text_short, 0, 157, "...") . " - Брайт Парк в " . $city->city_dative;
                } elseif ( $segments[1] === $params['model']->slug && $segments[2] === $params['type']->slug )
                {
                    if (strtolower($params['type']->title_ru) === strtolower($params['model']->title)) {
                        $model = $params['model']->title;
                        $model_cyrillic = $params['model']->title_ru;
                    } else {
                        $model = $params['model']->title . " " . $params['type']->title_ru;
                        $model_cyrillic = $params['model']->title_ru . " " . $params['type']->title_cyr;
                    }
                    $tags->title = "Новая LADA " . $model . " по лучшей цене в " . $city->city_dative . ' | Брайт Парк';
                    $tags->description = "Выбираете где купить новую LADA " . $model . " по лучшей цене в " . $city->city_dative . "? У официального дилера LADA - Брайт Парк " . $model . " в наличии по лучшей стоимости. Также у нас выгодный обмен и кредит.";
                    $tags->image = $params['image'];
                }
                break;
            case 4:
                if ( $segments[1] === $params['model']->slug && $segments[2] === $params['type']->slug && $segments[3] === 'model_details' )
                {
                    $tags->title = "Онлайн оценка автомобиля в Брайт Парк " . $city->title_ru;
                    $tags->description = "Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в " . $city->city_dative;
                    $tags->image = $params['image'];
                }
                break;
            default:
                $tags->title = "Брайт Парк - Официальный дилер LADA (ЛАДА) в ";
                $tags->description = "Выбираете где купить новую LADA (ЛАДА) по лучшей цене? У официального дилера LADA - Брайт Парк автомобили в наличии по лучшей стоимости. Также в нашем автосалоне выгодный обмен и кредит.";
                break;
        }
        return $tags;
    }
}
