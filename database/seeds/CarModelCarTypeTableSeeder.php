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
                'price' => 499900,
                'special_price' => 440910,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_sedan.png',
                'slogan' => 'Классика семейства LADA Granta',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '2',
                'preview' => false,
                'price' => 521900,
                'special_price' => 460710,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_liftback.png',
                'slogan' => 'Спортивный облик LADA Granta',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '3',
                'preview' => false,
                'price' => 528900,
                'special_price' => 467010,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_universal.png',
                'slogan' => 'Увеличенный вместительный багажник',
                'active' => 0,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '4',
                'preview' => false,
                'price' => 615900,
                'special_price' => 554310,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_cross.png',
                'slogan' => 'Увеличенный дорожный просвет, практичный багажник',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '5',
                'preview' => false,
                'price' => 684900,
                'special_price' => 607410,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_drive_active.png',
                'slogan' => 'Автомобиль, всегда готовый к драйву',
                'active' => 1,
            ],
            [
                'car_model_id' => '1',
                'car_type_id' => '6',
                'preview' => false,
                'price' => 545500,
                'special_price' => 481950,
                'count'=>333,
                'image' => '/images/slider/mini/granta/mobile/lada_granta_hatcback.png',
                'slogan' => 'Удобный компактный багажник',
                'active' => 0,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '1',
                'preview' => true,
                'price' => 703900,
                'special_price' => 624510,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sedan.png',
                'slogan' => 'Классика семейства LADA Vesta',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '4',
                'preview' => false,
                'price' => 851900,
                'special_price' => 757710,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_cross.png',
                'slogan' => 'Стиль стремительного седана и проходимость уверенного в себе кроссовера',
                'active' => 0,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '7',
                'preview' => false,
                'price' => 790900,
                'special_price' => 702810,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sw.png',
                'slogan' => 'Увеличенное пространство для пассажиров заднего ряда',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '8',
                'preview' => false,
                'price' => 905900,
                'special_price' => 806310,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sw_cross.png',
                'slogan' => 'Увеличенный дорожный просвет и драйверские настройки шасси, защитный обвес',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '9',
                'preview' => false,
                'price' => 903900,
                'special_price' => 765900,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_cng.png',
                'slogan' => 'Возможность использовать два вида топлива: сжатый природный газ (метан) и бензин',
                'active' => 1,
            ],
            [
                'car_model_id' => '2',
                'car_type_id' => '10',
                'preview' => false,
                'price' => 1145900,
                'special_price' => 1022310,
                'count'=>333,
                'image' => '/images/slider/mini/vesta/mobile/lada_vesta_sport.png',
                'slogan' => 'Спортивный дизайн, форсированный мотор до 145 л., повышенный уровень безопасности',
                'active' => 0,
            ],
            [
                'car_model_id' => '3',
                'car_type_id' => '20',
                'preview' => false,
                'price' => 679900,
                'special_price' => 602910,
                'count'=>333,
                'image' => '/images/slider/mini/xray/mobile/lada_xray_xray.png',
                'slogan' => 'Высокий внедорожный клиренс',
                'active' => 1,
            ],
            [
                'car_model_id' => '3',
                'car_type_id' => '4',
                'preview' => true,
                'price' => 790900,
                'special_price' => 711810,
                'count'=>333,
                'image' => '/images/slider/mini/xray/mobile/lada_xray_cross.png',
                'slogan' => 'Увеличенный дорожный просвет, защитный обвес',
                'active' => 1,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '11',
                'preview' => true,
                'price' => 599900,
                'special_price' => 539910,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_three.png',
                'slogan' => 'Полный привод, кузов из оцинкованной стали, внедорожник',
                'active' => 1,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '12',
                'preview' => false,
                'price' => 663900,
                'special_price' => 663900,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_three_urban.png',
                'slogan' => 'Компактные габариты и полный привод',
                'active' => 0,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '13',
                'preview' => false,
                'price' => 644900,
                'special_price' => 580410,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_4x4_five.png',
                'slogan' => 'Полный привод, кузов из оцинкованной стали, 5-ти дверный внедорожник',
                'active' => 1,
            ],
            [
                'car_model_id' => '4',
                'car_type_id' => '14',
                'preview' => false,
                'price' => 706900,
                'special_price' => 706900,
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
                'price' => 668900,
                'special_price' => 593010,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_universal.png',
                'slogan' => 'Увеличенный дорожный просвет, защитный обвес',
                'active' => 1,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '4',
                'preview' => false,
                'price' => 828900,
                'special_price' => 737010,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_cross.png',
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
                'image' => '/images/slider/mini/largus/mobile/lada_largus_universal_cng.png',
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
                'price' => 655900,
                'special_price' => 590310,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_minivan.png',
                'slogan' => 'Вместительный грузовой отсек, высокий клиренс, широкий дверной проем',
                'active' => 0,
            ],
            [
                'car_model_id' => '5',
                'car_type_id' => '19',
                'preview' => false,
                'price' => 938900,
                'special_price' => 780900,
                'count'=>333,
                'image' => '/images/slider/mini/largus/mobile/lada_largus_minivan_cng.png',
                'slogan' => 'Высокая грузоподъемность, двойные задние распашные двери, низкий порог, высокая крыша',
                'active' => 0,
            ],
            [
                'car_model_id' => '6',
                'car_type_id' => '22',
                'preview' => false,
                'price' => 738000,
                'special_price' => 655200,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_niva.png',
                'slogan' => 'На край света и обратно',
                'active' => 1,
            ],
            [
                'car_model_id' => '6',
                'car_type_id' => '23',
                'preview' => false,
                'price' => 824000,
                'special_price' => 732600,
                'count'=>333,
                'image' => '/images/slider/mini/4x4/mobile/lada_niva_extravaganza.png',
                'slogan' => 'На край света и обратно',
                'active' => 1,
            ],
            [
                'car_model_id' => '6',
                'car_type_id' => '24',
                'preview' => true,
                'price' => 747900,
                'special_price' => 747900,
                'count'=>333,
                'image' => '/images/slider/mini/niva/mobile/lada_niva_travel.png',
                'slogan' => 'Выросла дикой, приучена к городу.',
                'active' => 1,
            ],
        ];

        DB::table('car_model_car_type')->insert($model_types);
    }
}
