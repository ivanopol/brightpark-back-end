<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\CarModel;

class FeedController extends Controller
{
    /**
     * Формирует фид
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function autoru()
    {
/*        $cars = [
            [
                'id' => 0,
                'title' => 'Granta Седан',
                'price' => 1500000,
            ],
            [
                'id' => 1,
                'title' => 'Granta Универсал',
                'price' => 1700000,
            ],
        ];*/
        $cars_list = CarModel::with('types')->get();
        $cars = [];
        $domen = 'https://brightpark.ru/';

        foreach ($cars_list as $item) {
            foreach ($item->types as $carcass) {
                $_id = $item->id . $carcass->id;
                $_title = $item->title === $carcass->title_ru ? $item->title : $item->title . ' ' . $carcass->title_ru;
                $_price = $carcass->pivot->special_price;

                $cars[] = [
                    'id' => $_id,
                    'title' => $_title,
                    'price' => $_price,
                    'type' => $carcass->title_ru,
                    'url' => $domen . $item->slug . '/' . $carcass->slug
                ];
            }
/*            $cars[] = [
                'id' => $item->id,
                'title' => $item->title . ' ' . $item->types
            ];*/
        }

        echo "<pre>";
        print_r($cars);
        echo "</pre>";
        die();

        return response()->view('feeds.autoru', [
            'cars' => $cars
        ])->header('Content-Type', 'text/xml');
    }
}
