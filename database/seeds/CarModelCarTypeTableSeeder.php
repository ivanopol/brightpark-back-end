<?php

use Illuminate\Database\Seeder;

class CarModelCarTypeTableSeeder extends Seeder
{
    public function run()
    {
        $model_types = [
            [
                'car_model_id' => '1',
                'car_type_id' => '1',
                'preview' => true,
                'price' => 483900,
                'special_price' => 435510,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_sedan.png',
                'slogan' => 'Классика семейства LADA Granta',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '2',
                'preview' => false,
                'price' => 502900,
                'special_price' => 452610,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_liftback.png',
                'slogan' => 'Спортивный облик LADA Granta',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '3',
                'preview' => false,
                'price' => 510900,
                'special_price' => 459810,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_universal.png',
                'slogan' => 'Увеличенный вместительный багажник',
                'active' => 0,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '4',
                'preview' => false,
                'price' => 598900,
                'special_price' => 539010,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_cross.png',
                'slogan' => 'Увеличенный дорожный просвет, практичный багажник',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '5',
                'preview' => false,
                'price' => 667900,
                'special_price' => 601110,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_drive_active.png',
                'slogan' => 'Автомобиль, всегда готовый к драйву',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '6',
                'preview' => false,
                'price' => 500900,
                'special_price' => 450810,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_hatcback.png',
                'slogan' => 'Удобный компактный багажник',
                'active' => 0,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '1',
                'preview' => true,
                'price' => 667900,
                'special_price' => 601110,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sedan.png',
                'slogan' => 'Классика семейства LADA Vesta',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '4',
                'preview' => false,
                'price' => 814900,
                'special_price' => 733410,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_cross.png',
                'slogan' => 'Стиль стремительного седана и проходимость уверенного в себе кроссовера',
                'active' => 0,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '7',
                'preview' => false,
                'price' => 748900,
                'special_price' => 674010,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sw.png',
                'slogan' => 'Увеличенное пространство для пассажиров заднего ряда',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '8',
                'preview' => false,
                'price' => 855900,
                'special_price' => 770310,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sw_cross.png',
                'slogan' => 'Увеличенный дорожный просвет и драйверские настройки шасси, защитный обвес',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '9',
                'preview' => false,
                'price' => 874900,
                'special_price' => 716900,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_cng.png',
                'slogan' => 'Возможность использовать два вида топлива: сжатый природный газ (метан) и бензин',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '10',
                'preview' => false,
                'price' => 1080900,
                'special_price' => 927810,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sport.png',
                'slogan' => 'Спортивный дизайн, форсированный мотор до 145 л., повышенный уровень безопасности',
                'active' => 0,
            ],
            [
                'car_model_id' => '3',
                'car_type_id' => '20',
                'preview' => false,
                'price' => 653900,
                'special_price' => 588510,
                'count'=>333,
                'image' => '/images/slider/mini/xray/mobile/lada_xray_xray.png',
                'slogan' => 'Высокий внедорожный клиренс',
                'active' => 1,
            ],
            [
                'car_model_id' => '3',
                'car_type_id' => '4',
                'preview' => true,
                'price' => 801900,
                'special_price' => 721710,
                'count'=>333,
                'image' => '/images/slider/mini/xray/mobile/lada_xray_cross.png',
                'slogan' => 'Увеличенный дорожный просвет, защитный обвес',
                'active' => 1,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '11',
                'preview' => true,
                'price' => 581900,
                'special_price' => 523710,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_three.png',
                'slogan' => 'Полный привод, кузов из оцинкованной стали, внедорожник',
                'active' => 1,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '12',
                'preview' => false,
                'price' => 657900,
                'special_price' => 592110,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_three_urban.png',
                'slogan' => 'Компактные габариты и полный привод',
                'active' => 0,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '13',
                'preview' => false,
                'price' => 624900,
                'special_price' => 562410,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_five.png',
                'slogan' => 'Полный привод, кузов из оцинкованной стали, 5-ти дверный внедорожник',
                'active' => 1,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '14',
                'preview' => false,
                'price' => 700900,
                'special_price' => 630810,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_five_urban.png',
                'slogan' => 'Кондиционер, электростеклоподъемники, электропривод и электрообогрев наружных зеркал',
                'active' => 0,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '15',
                'preview' => false,
                'price' => 742900,
                'special_price' => 742900,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_bronto.png',
                'slogan' => 'Увеличенный дорожный просвет, усиленный задний мост, литые колеса с шинами c активным грунтовым протектором',
                'active' => 0,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '3',
                'preview' => true,
                'price' => 645900,
                'special_price' => 581310,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_universal.png',
                'slogan' => 'Увеличенный дорожный просвет, защитный обвес',
                'active' => 1,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '4',
                'preview' => false,
                'price' => 805900,
                'special_price' => 725310,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_universal_cng.png',
                'slogan' => 'Сжатый природный газ (метан), сниженные затраты на топливо',
                'active' => 0,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '16',
                'preview' => false,
                'price' => 805900,
                'special_price' => 725310,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_cross.png',
                'slogan' => 'Увеличенный дорожный просвет, защитный обвес, улучшенный дизайн',
                'active' => 0,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '17',
                'preview' => false,
                'price' => 992900,
                'special_price' => 834900,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_cross_cng.png',
                'slogan' => 'Увеличенный дорожный просвет, сжатый природный газ (метан) и бензин',
                'active' => 0,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '18',
                'preview' => false,
                'price' => 632900,
                'special_price' => 569610,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_minivan.png',
                'slogan' => 'Вместительный грузовой отсек, высокий клиренс, широкий дверной проем',
                'active' => 0,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '19',
                'preview' => false,
                'price' => 915900,
                'special_price' => 685900,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_minivan_cng.png',
                'slogan' => 'Высокая грузоподъемность, двойные задние распашные двери, низкий порог, высокая крыша',
                'active' => 0,
            ],
            [
                'car_model_id' => '6',
                'car_type_id' => '22',
                'preview' => true,
                'price' => 738000,
                'special_price' => 664200,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_niva.png',
                'slogan' => 'На край света и обратно',
                'active' => 1,
            ],
            [
                'car_model_id' => '6',
                'car_type_id' => '22',
                'preview' => true,
                'price' => 824000,
                'special_price' => 741600,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_niva_iceberg.png',
                'slogan' => 'На край света и обратно',
                'active' => 0,
            ],
        ];

        DB::table('car_model_car_type')->insert($model_types);
    }
}
