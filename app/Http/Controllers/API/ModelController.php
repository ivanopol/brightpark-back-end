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

        $minutes = $this->cache_time;
        $key = 'model_' . $model_title;

        $carcasses = Cache::remember($key, $minutes, function () use ($model_title) {
            $model = CarModel::firstWhere('slug', $model_title);

            $service = new BasePageService();
            return $service->getAllCarcasses($model);
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

        $car_list = $car_model->getAllCars($city);
        return Response::json(['car_list' => $car_list]);
/*        $car_list = $car_model->getAllCars($city);
        $status = $car_list ? 'OK' : 'ERROR';
        return Response::json(['status' => $status, 'car_list' => $car_list]);*/
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
        $minutes = $this->cache_time;
        $key = 'retargeting';

        $retargeting = Cache::remember($key, $minutes, function () use ($request)  {
            $service = new BasePageService();
            $offer = $service->getRetargetOffers(new Retarget(), $request);

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
            $stocks = Stocks::whereIn('city_id', [0, $city_id])->orderBy('sort', 'desc')->get();
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
            $stocks = Stocks::where('slug', $stocks_slug)->first();

            if (!$stocks) {
                return new \stdClass();
            }

            if (intval($stocks->city_id) === 0) {
                return $stocks;
            } else {
                $cities = explode(',', $stocks->city_id);
            }

            return in_array($city_id, $cities) ? $stocks : new \stdClass();
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
}
