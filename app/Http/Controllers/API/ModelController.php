<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AutoruService;
use App\Services\SeoService;
use Illuminate\Support\Facades\Cache;
use App\Services\BasePageService;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\CarModel;
use App\Retarget;
use App\News;
use App\Stocks;
use App\City;
use App\UtmLabel;


class ModelController extends Controller
{
    private $cache_time = 300; // 300 сек. / 60 = 5 минут

    /**
     * Получает список моделей авто
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() : \Illuminate\Http\JsonResponse
    {
        $minutes = $this->cache_time;
        $key = 'car_models';

        $models = Cache::remember($key, $minutes, function () {
            return CarModel::with('types_preview')->orderBy('sort', 'asc')->get();
        });

        return Response::json($models);
    }

    /**
     * Выводит информацию по кузовам модели
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function carcasses(Request $request) : \Illuminate\Http\JsonResponse
    {
        if (!$request->input('model')) {
            return Response::json(
                [
                    'status' => 'error',
                    'message' => 'Отсутствуют параметры запроса'
                ]);
        }

        $model_title = htmlspecialchars($request->input('model'));
        $city = htmlspecialchars($request->input('city'));

        $minutes = $this->cache_time;
        $key = $city ? 'model_' . $model_title . '_' . $city : 'model_' . $model_title;

        $carcasses = Cache::remember($key, $minutes, function () use ($model_title, $city) {
            $model = CarModel::firstWhere('slug', $model_title);

            $service = new BasePageService();
            return $service->getAllCarcasses($model, $city);
        });

        return Response::json($carcasses);
    }

    /**
     * Выводит информацию по модели
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function model(Request $request) : \Illuminate\Http\JsonResponse
    {
        if (!$request->input('model') || !$request->input('city') || !$request->input('models')) {
            return Response::json(
                [
                    'status' => 'error',
                    'message' => 'Отсутствуют параметры запроса'
                ]);
        }

        $car_model = htmlspecialchars($request->input('models'));
        $car_type = htmlspecialchars($request->input('model'));
        $city = htmlspecialchars($request->input('city'));

        $minutes = $this->cache_time;
        $key = 'model_' . $car_model . '_' . $car_type . '_' . $city;

        $model = Cache::remember($key, $minutes, function () use ($car_model, $car_type, $city) {
            $service = new BasePageService();
            return $service->model_data($car_model, $car_type, $city);
        });

        return Response::json($model);
    }


    /**
     * Выводит информацию по модели для нового дизайна
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function modelNew(Request $request) : \Illuminate\Http\JsonResponse
    {
        if (!$request->input('city') || !$request->input('model') || !$request->input('type') ) {
            return Response::json(
                [
                    'status' => 'error',
                    'message' => 'Отсутствуют параметры запроса'
                ]);
        }

        $model = htmlspecialchars($request->input('model'));
        $type = htmlspecialchars($request->input('type'));
        $city = htmlspecialchars($request->input('city'));

        $minutes = 1;// $this->cache_time;
        $key = 'model_' . $model . '_' . $type . '_' . $city;

        $result = Cache::remember($key, $minutes, function () use ($model, $type, $city) {
            $service = new BasePageService();
            return $service->model_data_new($model, $type, $city);
        });

        return Response::json($result);
    }

    /**
     * Выводит информацию для сбытовой страницы
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function model_details(Request $request) : \Illuminate\Http\JsonResponse
    {
        if (!$request->input('model') || !$request->input('city') || !$request->input('models')) {
            return Response::json(
                [
                    'status' => 'error',
                    'message' => 'Отсутствуют параметры запроса'
                ]);
        }

        $car_model = htmlspecialchars($request->input('models'));
        $car_type = htmlspecialchars($request->input('model'));
        $city = htmlspecialchars($request->input('city'));

        $minutes = $this->cache_time;
        $key = 'details_' . $car_model . '_' . $car_type . '_' . $city;

        $model_details = Cache::remember($key, $minutes, function () use ($car_model, $car_type, $city) {

            $service = new BasePageService();
            return $service->model_details($car_model, $car_type, $city);
        });

        return Response::json($model_details);
    }

    /**
     * Получаем список автомобилей
     * для компонента Steps.vue
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCarsList(Request $request, CarModel $car_model): \Illuminate\Http\JsonResponse
    {
        $city = htmlspecialchars($request->input('city'));

        $data = [
            'city' => $city
        ];

        $minutes = $this->cache_time;
        $key = $city ? 'car_models_' . $city : 'car_models';

        $car_list = Cache::remember($key, $minutes, function () use ($car_model, $city) {
            return $car_model->getAllCars($city);
        });

        $status = $car_list ? 'OK' : 'ERROR';
        return Response::json(['status' => $status, 'car_list' => $car_list]);
    }

    /**
     * Получаем список брендов
     * для компонента Classified.vue
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCarsBrands(): \Illuminate\Http\JsonResponse
    {
        $minutes = $this->cache_time;
        $key = 'car_brands';

        $car_brands = Cache::remember($key, $minutes, function ()  {
            $raw = new AutoruService();
            return $raw->getBrands();
        });

        return Response::json($car_brands);
    }

    /**
     * Получаем информацию для страницы ретаргетинга
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRetargetingInfo(Request $request): \Illuminate\Http\JsonResponse
    {
        $id = intval($request->input('id'));
        $minutes = $this->cache_time;
        $key = 'retargeting_' . $id;

        $retargeting = Cache::remember($key, $minutes, function () use ($request, $id)  {
            $service = new BasePageService();
            $offer = $service->getRetargetOffers(new Retarget(), $id);

            return [
                'offer' => $offer
            ];
        });

        return Response::json($retargeting);
    }

    /**
     * Получаем информацию для страницы новостей
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getNewsList(Request $request): \Illuminate\Http\JsonResponse
    {
        $city_id = intval($request->input('city_id'));
        $minutes = $this->cache_time;
        $key = 'news_' . $city_id;

        $news = Cache::remember($key, $minutes, function () use ($city_id)  {
            $news = News::whereIn('city_id', [0, $city_id])->orderBy('id', 'desc')->get();
            return $news;
        });

        return Response::json($news);
    }

    /**
     * Получаем информацию для страницы акций
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStocksList(Request $request): \Illuminate\Http\JsonResponse
    {
        $city_id = intval($request->input('city_id'));
        $minutes = $this->cache_time;
        $key = 'stocks_' . $city_id;

        $stocks = Cache::remember($key, $minutes, function () use ($city_id)  {
            $stocks = Stocks::where('active', 1)->whereIn('city_id', [0, $city_id])->orderBy('sort', 'desc')->get();
            return $stocks;
        });

        return Response::json($stocks);
    }

    /**
     * Получаем информацию по конкретной акции
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStocksItem(Request $request): \Illuminate\Http\JsonResponse
    {
        $city_id = htmlspecialchars($request->input('city_id'));
        $stocks_slug = htmlspecialchars($request->input('slug'));
        $minutes = $this->cache_time;
        $key = 'stocks_' . $city_id . '_' . $stocks_slug;

        $stocks = Cache::remember($key, $minutes, function () use ($city_id, $stocks_slug)  {
            $result = [];
            $stocks = Stocks::where('slug', $stocks_slug)->first();

            if (!$stocks) {
                return new \stdClass();
            }

            if (intval($stocks->city_id) === 0) {
                $result = $stocks;
            } else {
                $cities = explode(',', $stocks->city_id);
                $result = in_array($city_id, $cities) ? $stocks : new \stdClass();
            }

            if (count((array)$result) > 0) {
                $result = Stocks::handlePlaceholders($result, $city_id, ['title', 'text', 'text_short']);
            }

            return $result;
        });

        return Response::json($stocks);
    }

    /**
     * Получаем информацию по конкретной новости
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getNewsItem(Request $request): \Illuminate\Http\JsonResponse
    {
        $city_id = htmlspecialchars($request->input('city_id'));
        $news_slug = htmlspecialchars($request->input('slug'));
        $minutes = $this->cache_time;
        $key = 'news_' . $city_id . '_' . $news_slug;

        $news = Cache::remember($key, $minutes, function () use ($city_id, $news_slug)  {
            $output = new \stdClass();
            $news = News::where('slug', $news_slug)->first();

            if (!$news) {
                return new \stdClass();
            }

            $city = City::where('id', $city_id)->first();

            $patterns = [
                '/<:CITY:>/',
                '/<:CITY_DATIVE:>/',
                '/<:REGION_DATIVE:>/',
            ];

            $replacements = [
                $city->alias,
                $city->city_dative,
                $city->region_dative,
            ];

            list($news->text, $news->text_short) = preg_replace($patterns, $replacements, [$news->text, $news->text_short]);


             if (intval($news->city_id) === 0) {
                return $news;
             } else {
                $cities = explode(',', $news->city_id);
             }

             if (in_array($city_id, $cities)) {
                 $output = $news;
             }
            return $output;
        });

        return Response::json($news);
    }

    /**
     * Получаем мета-теги заданной страницы
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function getMetaTags(Request $request) : \Illuminate\Http\JsonResponse
    {
        $route = htmlspecialchars($request->input('route'));

        $route_key = str_replace("/", "_", $route);

        $minutes = $this->cache_time;
        $key = 'seo_' . $route_key;

        $meta_tags = Cache::remember($key, $minutes, function () use ($route)  {
            $service = new SeoService();
            return $service->getMetaTags($route);
        });

        return Response::json($meta_tags);
    }

    /**
     * Сохраняем UTM-метки визита пользователя
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveUtm(Request $request) : \Illuminate\Http\JsonResponse
    {
        $res = [];
        $data = $request->toArray();
        $date = date_create_from_format('Y-m-d\TH:i:s+', $data['date']);
        $data['date'] = $date->format('Y-m-d H:i:s');

        return Response::json(UtmLabel::create($data) ? ['status' => 'ok'] : ['status' => 'error']);
    }

    /**
     * Получаем список моделей с ценами и доп. информацией
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCarsOffer(): \Illuminate\Http\JsonResponse
    {
        $minutes = $this->cache_time;
        $key = 'cars_offer';

        $cars_offer = Cache::remember($key, $minutes, function ()  {
            $output = [];

            $cars = CarModel::select(['id', 'title', 'title_ru', 'slug'])->with('cars_offer')->orderBy('sort2', 'asc')->get();

            foreach ($cars as $car) {
                $output[] = [
                    "id" => $car->id . '' . $car->cars_offer[0]->id,
                    "model" => [
                        "id" => $car->id,
                        "slug" => $car->slug,
                        "title" => $car->title,
                        "titile_ru" => $car->title_ru,
                    ],
                    "type" => [
                        "id" => $car->cars_offer[0]->id,
                        "slug" => $car->cars_offer[0]->slug,
                        "title" => $car->cars_offer[0]->title_en,
                        "title_ru" => $car->cars_offer[0]->title_ru,
                    ],
                    "price" =>  $car->cars_offer[0]->pivot->special_price,
                    "credit" =>  $car->cars_offer[0]->pivot->credit_from,
                ];
            }

            return $output;
        });

        return Response::json($cars_offer);
    }
}
