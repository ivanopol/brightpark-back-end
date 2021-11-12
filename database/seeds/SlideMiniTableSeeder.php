<?php


use Illuminate\Database\Seeder;

class SlideMiniTableSeeder extends Seeder
{
    public function run()
    {
        $slides_mini = [
            [
                'model_id' => 1,
                'type_id' => 1,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_sedan.png',
                'alt' => 'Лада Гранта седан',
                'title' => 'Седан',
                'active' => true,
            ],
            [
                'model_id' => 1,
                'type_id' => 2,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_liftback.png',
                'alt' => 'Лада Гранта лифтбек',
                'title' => 'Лифтбек',
                'active' => true,
            ],
            [
                'model_id' => 1,
                'type_id' => 3,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_universal.png',
                'alt' => 'Лада Гранта универсал',
                'title' => 'Универсал',
                'active' => false,
            ],
            [
                'model_id' => 1,
                'type_id' => 4,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_cross.png',
                'alt' => 'Лада Гранта cross',
                'title' => 'Cross',
                'active' => true,
            ],
            [
                'model_id' => 1,
                'type_id' => 5,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_drive_active.png',
                'alt' => 'Лада Гранта Drive Active',
                'title' => 'Drive Active',
                'active' => true,
            ],
            [
                'model_id' => 1,
                'type_id' => 6,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_hatcback.png',
                'alt' => 'Лада Гранта хэтчбек',
                'title' => 'Хэтчбек',
                'active' => true,
            ],
            [
                'model_id' => 2,
                'type_id' => 1,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sedan.png',
                'alt' => 'Лада Веста седан',
                'title' => 'Седан',
                'active' => true,
            ],
            [
                'model_id' => 2,
                'type_id' => 5,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_cross.png',
                'alt' => 'Лада Веста Cross',
                'title' => 'Cross',
                'active' => false,
            ],
            [
                'model_id' => 2,
                'type_id' => 7,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sw.png',
                'alt' => 'Лада Веста SW',
                'title' => 'SW',
                'active' => true,
            ],
            [
                'model_id' => 2,
                'type_id' => 8,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sw_cross.png',
                'alt' => 'Лада Веста SW Cross',
                'title' => 'SW Cross',
                'active' => true,
            ],
            [
                'model_id' => 2,
                'type_id' => 9,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_cng.png',
                'alt' => 'Лада Веста CNG',
                'title' => 'CNG',
                'active' => true,
            ],
            [
                'model_id' => 2,
                'type_id' => 10,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sport.png',
                'alt' => 'Лада Веста Sport',
                'title' => 'Sport',
                'active' => false,
            ],
            [
                'model_id' => 3,
                'type_id' => 20,
                'image' => '/images/slider/mini/xray/mobile/lada_xray_xray.png',
                'alt' => 'XRAY',
                'title' => 'XRAY',
                'active' => true,
            ],
            [
                'model_id' => 3,
                'type_id' => 4,
                'image' => '/images/slider/mini/xray/mobile/lada_xray_cross.png',
                'alt' => 'Лада XRAY Cross',
                'title' => 'XRAY Cross',
                'active' => true,
            ],
            [
                'model_id' => 4,
                'type_id' => 11,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_three.png',
                'alt' => 'Лада 4x4 | Legend 3 дв.',
                'title' => '4x4 | Legend 3 дв.',
                'active' => true,
            ],
            [
                'model_id' => 4,
                'type_id' => 12,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_three_urban.png',
                'alt' => 'Лада 4x4 Urban 3 дв.',
                'title' => '4x4 Urban 3 дв.',
                'active' => false,
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_five.png',
                'alt' => 'Лада 4x4 | Legend 5 дв.',
                'title' => '4x4 | Legend 5 дв.',
                'active' => true,
            ],
            [
                'model_id' => 4,
                'type_id' => 14,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_five_urban.png',
                'alt' => 'Лада 4x4 Urban 5 дв.',
                'title' => '4x4 Urban 5 дв.',
                'active' => false,
            ],
            [
                'model_id' => 4,
                'type_id' => 15,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_bronto.png',
                'alt' => 'Лада 4x4 Bronto',
                'title' => '4x4 Bronto',
                'active' => false,
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_universal.png',
                'alt' => 'Лада Largus универсал',
                'title' => 'универсал',
                'active' => true,
            ],
            [
                'model_id' => 5,
                'type_id' => 25,
                'image' => '/images/slider/mini/largus/lada_largus_universal_cng.png',
                'alt' => 'Новый Лада Largus',
                'title' => 'Новый Largus',
                'active' => false,
            ],
            [
                'model_id' => 5,
                'type_id' => 16,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_universal_cng.png',
                'alt' => 'Лада Largus универсал CNG',
                'title' => 'универсал CNG',
                'active' => false,
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_cross.png',
                'alt' => 'Лада Largus Cross',
                'title' => 'Cross',
                'active' => true,
            ],
            [
                'model_id' => 5,
                'type_id' => 17,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_cross_cng.png',
                'alt' => 'Лада Largus Cross CNG',
                'title' => 'Cross CNG',
                'active' => false,
            ],
            [
                'model_id' => 5,
                'type_id' => 18,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_minivan.png',
                'alt' => 'Лада Largus фургон',
                'title' => 'фургон',
                'active' => false,
            ],
            [
                'model_id' => 5,
                'type_id' => 19,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_minivan_cng.png',
                'alt' => 'Лада Largus фургон CNG',
                'title' => 'фургон CNG',
                'active' => false,
            ],
            [
                'model_id' => 6,
                'type_id' => 22,
                'image' => '/images/slider/mini/4x4/mobile/lada_niva.png',
                'alt' => 'Лада Niva',
                'title' => 'Niva',
                'active' => false,
            ],
            [
                'model_id' => 6,
                'type_id' => 23,
                'image' => '/images/slider/mini/4x4/mobile/lada_niva_extravaganza.png',
                'alt' => 'Лада Niva Off-road',
                'title' => 'Niva Off-road',
                'active' => false,
            ],
            [
                'model_id' => 6,
                'type_id' => 24,
                'image' => '/images/slider/mini/niva/mobile/lada_niva_travel.png',
                'alt' => 'Лада Niva Travel',
                'title' => 'Niva Travel',
                'active' => true,
            ],
        ];

        DB::table('slide_mini')->insert($slides_mini);
    }
}
