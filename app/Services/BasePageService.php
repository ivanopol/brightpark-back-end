<?php


namespace App\Services;


use App\Retarget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\CarModel;
use App\CarType;
use App\City;
use App\CarModelCarType;

class BasePageService
{
    /**
     * Ищем информацию для сбытовой страницы
     *
     * @param string $model Модель
     * @param string $type Кузов
     * @param string $city Город
     * @return array данные сбытовой страницы
     */
    public function model_details(string $model, string $type, string $city= null) : array
    {
        $service = new BasePageService();
        $car_model = CarModel::where('slug', $model)->first();
        $car_type = CarType::where('slug', $type)->first();

        if (!$car_model || !$car_type) {
            return [];
        }

        $car_attrs = CarModelCarType::where([
            ['car_model_id', '=', $car_model->id],
            ['car_type_id', '=', $car_type->id],
        ])->first();

        $car_preview = $service->getCarPreviewPath($car_model->id, $car_type->id);
        $minimal_percent_rate = DB::selectOne('select min(percent_rate) as rate from credit_programs');

        $test_data = [
            'city' => $city,
            'model' => $model,
            'type' => $type,
        ];

        $test_prices = $this->get_test_prices($test_data);

        if ($test_prices) {
            $car_attrs['price'] = $test_prices['price'];
            $car_attrs['special_price'] = $test_prices['special_price'];
        }

        return [
            'car_attrs' => $car_attrs,
            'minimal_percent_rate' =>  $minimal_percent_rate->rate,
            'car_preview' => $car_preview,
            'car_model' => $car_model,
            'car_type' => $car_type,
        ];
    }

    /**
     * Ищем данные для страницы модели
     *
     * @param string $model Модель
     * @param string $type Кузов
     * @param string $city Город
     * @return array данные для страницы модели
     */
    public function model_data(string $model, string $type, string $city) : array
    {
        $car_model = CarModel::where('slug', $model)->first();
        $car_type = CarType::where('slug', $type)->first();

        if (!$car_model || !$car_type) {
            return [];
        }

        $condition = [
            ['model_id', '=', $car_model->id],
            ['type_id', '=', $car_type->id],
        ];

        // Получаем информацию по блокам
        $blocks_ids = [];
        $blocks = DB::table('blocks')->select('*')->where($condition)->get();

        if ($blocks) {
            foreach ($blocks as $block) {
                $blocks_ids[] = $block->id;
            }
        }

        $blocks_slider = DB::table('block_sliders')->select('*')->whereIn('block_id', $blocks_ids)->orderBy('id', 'asc')->get();
        $car_price = CarModelCarType::where('car_model_id', $car_model->id)->where('car_type_id', $car_type->id)->first();


        $test_data = [
            'city' => $city,
            'model' => $model,
            'type' => $type,
        ];

        $test_prices = $this->get_test_prices($test_data);

        $price = $test_prices ? $test_prices['price'] : $car_price->price;
        $special_price = $test_prices ? $test_prices['special_price'] : $car_price->special_price;

        if ($blocks && $blocks_slider) {
            foreach ($blocks as $key => &$block) {
                $model_title = $car_model->title === $car_type->title_ru ? $car_model->title : $car_model->title . ' ' . $car_type->title_ru;
                $block->price = $key === 0 ? '<span class="no-block" itemscope itemtype="http://schema.org/Product">
                                                  <span class="c_orange">
                                                      <span class="no-block" itemprop="brand">LADA</span> <span class="no-block" itemprop="name">' . $model_title .'</span>
                                                  </span>
                                                  <span class="block-price no-block" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                  <meta itemprop="priceCurrency" content="RUB" />
                                                  <span class="no-block" itemprop="price"  content="' . $special_price . '">от ' . number_format($special_price, 0, ',', ' ') . '</span> руб.</span>
                                                  <link itemprop="availability" href="http://schema.org/InStock"/>
                                              </span>' : 0;

                $block->slider = [];

                foreach ($blocks_slider as $slider) {
                    if ($block->id == $slider->block_id) {
                        $block->slider[$slider->number] = $slider;
                    }
                }
            }
        }

        // Получаем информацию по слайдам
        $slides = DB::table('slides')->select('*')->where($condition)->get();

        foreach ($slides as &$slide) {
            $slide->link = '/' . $city . '/' . $car_model->slug . '/' . $car_type->slug . $slide->link;
        }
        $slide_mini = DB::table('slide_mini')->select('*')->where([
            ['model_id', '=', $car_model->id],
            ['active', '=', true],
        ])->get();

        // Создаем ссылки и формируем массив для мини слайдера
        // с ссылками и указываем активный слайд
        $car_types = DB::select('SELECT `ct`.`slug`, `ct`.`id`
                                FROM `car_types` as `ct`
                                INNER JOIN `car_model_car_type` as `cmct` ON `cmct`.`car_type_id`=`ct`.`id`
                                 WHERE `cmct`.`car_model_id`=:model_id ORDER BY `ct`.`id` ASC', ['model_id' => $car_model->id]);

        $active_slide = 0;
        foreach ($slide_mini as $key => &$slide) {
            foreach ($car_types as $this_type) {
                if ($slide->type_id == $this_type->id) {
                    $slide->url = '/' . $city . '/' . $car_model->slug . '/' . $this_type->slug;
                    $slide->slug = $this_type->slug;
                }

                if ($slide->type_id == $car_type->id && $slide->model_id == $car_model->id) {
                    $slide->active = 1;
                    $active_slide = $key;
                } else {
                    $slide->active = 0;
                }
            }
        }

        // Получаем информацию по отзывам и по цветам
        $reviews = DB::table('reviews')->select('*')->where($condition)->get();
        $colors = DB::table('colors')->select('*')->where($condition)->get();

        if (count($slides)) {
            $slides = $slides[0];
        }

        $model_full = strtolower($car_model->title) === strtolower($car_type->title_ru) ? $car_model->title : $car_model->title . ' ' . $car_type->title_ru ;


        $data = [
            'slider' => [
                'slides_mini' => $slide_mini,
                'slides' => $slides,
                'active' => $active_slide,
            ],
            'blocks' => $blocks,
            'reviews' => $reviews,
            'colors' => $colors,
            'model' => $car_model->title,
            'type' => $car_type->title_ru,
            'model_id' => $car_model->id,
            'type_id' => $car_type->id,
            'model_slug' => $car_model->slug,
            'type_slug' => $car_type->slug,
            'model_full' => $model_full,
            'car_attrs' => [
                'price' => $price,
                'special_price' => $special_price,
            ]
        ];

        return $data;
    }

    /**
     * Задаем тестовые цены для заданных городов
     *
     * @param array $data Начальные данные
     * @return array
     */
    private function get_test_prices(array $data) :array
    {
        $prices = [];

        switch($data['city']) {
            case 'moscow':
                $prices = $this->getMoscowPrices($data);
                break;
        }

        return $prices;
    }

    /**
     * Задаем цены для Москвы
     *
     * @param array $data Начальные данные
     * @return array
     */
    private function getMoscowPrices(array $data) : array
    {
        $result = [];

        $car = $data['model'] . ' ' . $data['type'];

        switch($car) {
            case 'granta sedan':
                $result['price'] = 488900;
                $result['special_price'] = 368510;
                break;
            case 'granta liftback':
                $result['price'] = 507900;
                $result['special_price'] = 385610;
                break;
            case 'granta cross':
                $result['price'] = 603900;
                $result['special_price'] = 472010;
                break;
            case 'granta drive-active':
                $result['price'] = 672900;
                $result['special_price'] = 534110;
                break;
            case 'vesta sedan':
                $result['price'] = 676900;
                $result['special_price'] = 556110;
                break;
            case 'vesta cross':
                $result['price'] = 823900;
                $result['special_price'] = 679410;
                break;
            case 'vesta sw':
                $result['price'] = 759900;
                $result['special_price'] = 613010;
                break;
            case 'vesta sw-cross':
                $result['price'] = 866900;
                $result['special_price'] = 709310;
                break;
            case 'vesta cng':
                $result['price'] = 883900;
                $result['special_price'] = 693900;
                break;
            case 'vesta sport':
                $result['price'] = 1089900;
                $result['special_price'] = 900810;
                break;
            case 'xray xray':
                $result['price'] = 660900;
                $result['special_price'] = 523510;
                break;
            case 'xray cross':
                $result['price'] = 810900;
                $result['special_price'] = 658710;
                break;
            case 'largus universal':
                $result['price'] = 653900;
                $result['special_price'] = 517310;
                break;
            case 'largus cross':
                $result['price'] = 813900;
                $result['special_price'] = 661310;
                break;
            case '4x4 three-doors':
                $result['price'] = 587900;
                $result['special_price'] = 493710;
                break;
            case '4x4 five-doors':
                $result['price'] = 630900;
                $result['special_price'] = 532410;
                break;
            case 'niva niva':
                $result['price'] = 738000;
                $result['special_price'] = 556200;
                break;
            case 'niva off-road':
                $result['price'] = 824000;
                $result['special_price'] = 633600;
                break;
        }

        return $result;
    }

    public function get_base_page_data($car_model, $car_type, $city)
    {
        $condition = [
            ['model_id', '=', $car_model->id],
            ['type_id', '=', $car_type->id],
        ];

        // Получаем информацию по блокам
        $blocks_ids = [];
        $blocks = DB::table('blocks')->select('*')->where($condition)->get();

        if ($blocks) {
            foreach ($blocks as $block) {
                $blocks_ids[] = $block->id;
            }
        }

        $blocks_slider = DB::table('block_sliders')->select('*')->whereIn('block_id', $blocks_ids)->orderBy('id', 'asc')->get();
        $car_price = CarModelCarType::where('car_model_id', $car_model->id)->where('car_type_id', $car_type->id)->first();

        if ($blocks && $blocks_slider) {
            foreach ($blocks as $key => &$block) {
                $model_title = $car_model->title === $car_type->title_ru ? $car_model->title : $car_model->title . ' ' . $car_type->title_ru;
                $block->price = $key === 0 ? '<span class="no-block" itemscope itemtype="http://schema.org/Product">
                                                  <span class="c_orange">
                                                      <span class="no-block" itemprop="brand">LADA</span> <span class="no-block" itemprop="name">' . $model_title .'</span>
                                                  </span>
                                                  <span class="block-price no-block" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                  <meta itemprop="priceCurrency" content="RUB" />
                                                  <span class="no-block" itemprop="price"  content="' . $car_price->special_price . '">от ' . number_format($car_price->special_price, 0, ',', ' ') . '</span> руб.</span>
                                                  <link itemprop="availability" href="http://schema.org/InStock"/>
                                              </span>' : 0;

                $block->slider = [];

                foreach ($blocks_slider as $slider) {
                    if ($block->id == $slider->block_id) {
                        $block->slider[$slider->number] = $slider;
                    }
                }
            }
        }

        // Получаем информацию по слайдам
        $slides = DB::table('slides')->select('*')->where($condition)->get();


        foreach ($slides as &$slide) {
            $slide->link = '/' . $city . '/' . $car_model->slug . '/' . $car_type->slug . $slide->link;
        }

        $slide_mini = DB::table('slide_mini')->select('*')->where([
            ['model_id', '=', $car_model->id],
            ['active', '=', true],
        ])->get();

        // Создаем ссылки и формируем массив для мини слайдера
        // с ссылками и указываем активный слайд
        $car_types = DB::select('SELECT `ct`.`slug`, `ct`.`id`
                                FROM `car_types` as `ct`
                                INNER JOIN `car_model_car_type` as `cmct` ON `cmct`.`car_type_id`=`ct`.`id`
                                 WHERE `cmct`.`car_model_id`=:model_id ORDER BY `ct`.`id` ASC', ['model_id' => $car_model->id]);

        $active_slide = 0;
        foreach ($slide_mini as $key => &$slide) {
            foreach ($car_types as $type) {
                if ($slide->type_id == $type->id) {
                    $slide->url = '/' . $city . '/' . $car_model->slug . '/' . $type->slug;
                    $slide->slug = $type->slug;
                }

                if ($slide->type_id == $car_type->id && $slide->model_id == $car_model->id) {
                    $slide->active = 1;
                    $active_slide = $key;
                } else {
                    $slide->active = 0;
                }
            }
        }

        // Получаем информацию по отзывам и по цветам
        $reviews = DB::table('reviews')->select('*')->where($condition)->get();
        $colors = DB::table('colors')->select('*')->where($condition)->get();

        if (count($slides)) {
            $slides = $slides[0];
        }

        $model_full = '';
        if (strtolower($car_model->title) === strtolower($car_type->title_ru))
        {
            $model_full = $car_model->title;
        } else {
            $model_full = $car_model->title . ' ' . $car_type->title_ru;
        }

        $data = [
            'slider' => [
                'slides_mini' => $slide_mini,
                'slides' => $slides,
                'active' => $active_slide,
            ],
            'blocks' => $blocks,
            'reviews' => $reviews,
            'colors' => $colors,
            'model' => $car_model->title,
            'type' => $car_type->title_ru,
            'model_id' => $car_model->id,
            'type_id' => $car_type->id,
            'model_full' => $model_full,
        ];

        return $data;
    }

    /**
     * Получаем все кузовы для заданной модели
     *
     * @param CarModel $car_model Модель
     * @param City|null $city Город
     * @return object кузовы для заданной модели
     */
    public function getAllCarcasses(CarModel $car_model, City $city = null) : object
    {
        $carcasses = CarModel::where('id', $car_model->id)->with('carcasses')->get();

        foreach ($carcasses[0]->carcasses as &$carcass) {
            if (strtolower($carcasses[0]->title) === strtolower($carcass->title_en)) {
                $carcass->title_en = '';
                $carcass->title_ru = '';
            }
            $carcass->pivot->image = str_replace('mobile/', '', $carcass->pivot->image);
        }

        return $carcasses;
    }

    /**
     * Получаем путь к изображению кузова
     *
     * @param integer $model_id ID модели
     * @param integer $type_id ID кузова
     *
     * @return array
     */
    public function getCarPreviewPath(int $model_id, int $type_id) {
        $path = [];

        $row = DB::table('slide_mini')
                        ->select(['image', 'alt'])
                        ->where([
                            ['model_id', '=', $model_id],
                            ['type_id', '=', $type_id],
                        ])
                        ->limit(1)
                        ->get()
                        ->toArray();

        if ($row[0]) {
            $path = $row[0];
            $path->image = str_replace('mobile/', '', $path->image);
        }
        return $path;
    }

    /**
     * Получаем данные для ретаргетинговой страницы
     *
     * @param Retarget $retarget
     * @param Request $request Параметры запроса
     *
     * @return array
     */
    public function getRetargetOffers(Retarget $retarget, Request $request) : object
    {
        $result = [];
        $params = $request->all();

        if (isset($params['utm_campain'])) {
            switch($params['utm_campain']) {
                case 'test':
                    $result = $retarget->find(2);
                    break;
                default:
                    $result = $retarget->find(1);
                    break;
            }

        } else {
            $result = $retarget->find(1);
        }

        return $result;
    }
}
