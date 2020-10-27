<?php
namespace App\Http\Controllers;

use App\Services\GeoLocationService;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\City;
use App\CarModel;

/**
 * @property GeoLocationService geo_service
 */
class GeoController extends Controller
{
    public function __construct(GeoLocationService $geo_service)
    {
        $this->geo_service = $geo_service;
    }

    public function get_user_city_by_ip()
    {
        $city = $this->geo_service->get_user_city_by_ip($_SERVER['REMOTE_ADDR']);

        return Response::json($city);
    }

    public function get_cities(Request $request)
    {
        $location = new City();
        $geo = false;

        if (!isset($request->city)) {
           $city = $this->geo_service->get_city_by_ip($_SERVER['REMOTE_ADDR']);
        } else {
            $city = $this->geo_service->check_city($request->city);
        }

        if (!$city) {
            $city = 'perm';
        }

        $cities = $location->getCities($city);
       // $models_list = CarModel::all('slug');
        $models_list = CarModel::with('types_preview')->orderBy('sort', 'asc')->get();
        $models = [];
        $models_full = [];

        foreach ($models_list as $item) {
            $models[] = $item->slug;
            if (count($item->types_preview) ) {
                $models_full[] = [
                    'model_slug' => $item->slug,
                    'type_slug' => $item->types_preview[0]->slug,
                    'title' => $item->title,
                ];
            }
        }

        return Response::json([
            'status' => 'OK',
            'message' => 'success',
            'cities' => $cities,
            'models' => $models,
            'models_full' => $models_full,
        ]);
    }
}
