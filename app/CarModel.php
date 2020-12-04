<?php

namespace App;

use App\Services\BasePageService;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'sort',
        'preview',
    ];
    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'car_models';

    /**
     * Кузовы относящиеся к модели авто c превью.
     */
    public function types_preview()
    {
        return $this->belongsToMany('App\CarType')->using('App\CarModelCarType')->withPivot('preview')->wherePivot('preview', 1);
    }

    /**
     * Кузовы относящиеся к модели авто без превью.
     */
    public function types()
    {
        return $this->belongsToMany('App\CarType')->using('App\CarModelCarType')->withPivot('preview', 'special_price')->wherePivot('active', 1);
    }

    public function carcasses()
    {
        return $this->belongsToMany('App\CarType')->using('App\CarModelCarType')->withPivot('image', 'price', 'special_price', 'slogan')->wherePivot('active', 1);
    }

    /**
     * Получить модели с ценам по кузовам.
     */
    public function prices()
    {
        return $this->hasOne('App\CarType');
    }

    /**
     * Получаем ключ роута для таблицы.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Получаем список автомобилей с ценой
     *
     * @param string $city
     * @return array
     */
    public function getAllCars(string $city = '') : array
    {
        $car_list_tmp = $this::with('types')->get();
        return $this->formatCarList($car_list_tmp, $city);
    }

    /**
     * Приводим массив автомобилей в удобный формат
     *
     * @param object $car_list_tmp
     * @param string $data
     * @return array
     */
    private function formatCarList($car_list_tmp, string $city = '') : array
    {
        if (!$car_list_tmp) {
            return [];
        }

        $base_page_service = new BasePageService();
        $car_list_formatted = [];

        $i=0;
        foreach ($car_list_tmp as $car) {
            foreach ($car->types as $info) {
                $label = strtolower($car->title) === strtolower($info->title_ru) ? $car->title : $car->title . ' ' . $info->title_ru;

                $test_data = [
                    'city' => $city,
                    'model' => $car->slug,
                    'type' => $info->slug,
                ];
                $test_prices = $base_page_service->get_test_prices($test_data);

                $car_list_formatted[] = [
                    'id' => $i,
                    'label' => $label,
                    'code' => $test_prices ? $test_prices['special_price'] : $info->pivot->special_price,
                    'number' => $i,
                ];
                $i++;
            }
        }

        return $car_list_formatted;
    }
}
