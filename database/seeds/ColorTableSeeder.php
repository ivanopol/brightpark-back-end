<?php


use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    public function run()
    {
        $colors = [
            // Granta
            // sedan
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_borneo.png',
                'class' => 'color-borneo-dark',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/images/colors/lada/granta/sedan/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
            // Hatchback
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_borneo.png',
                'class' => 'color-borneo-dark',
                'is_active' => false
            ],
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 6,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/images/colors/lada/granta/hachback/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
            // Universal
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/images/colors/lada/granta/universal/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/images/colors/lada/granta/universal/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/granta/universal/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/images/colors/lada/granta/universal/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/granta/universal/lada_granta_borneo.png',
                'class' => 'color-borneo-dark',
                'is_active' => false
            ],
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/images/colors/lada/granta/universal/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/images/colors/lada/granta/universal/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 3,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/images/colors/lada/granta/universal/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],

            // liftback
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_cornelian.png',
                'class' => 'color-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => true
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_borneo.png',
                'class' => 'color-borneo',
                'is_active' => false
            ],
            [
                'type_id' => 2,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/images/colors/lada/granta/liftback/lada_granta_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
            // Vesta
            // sedan
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/vesta/sedan/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/vesta/sedan/cornelian.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Ангкор',
                'image' => '/images/colors/lada/vesta/sedan/angkor.png',
                'class' => 'color-angkor',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Дайвинг',
                'image' => '/images/colors/lada/vesta/sedan/daiving.png',
                'class' => 'color-daiving',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Фантом',
                'image' => '/images/colors/lada/vesta/sedan/phantom.png',
                'class' => 'color-phantom',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Маэстро',
                'image' => '/images/colors/lada/vesta/sedan/maestro.png',
                'class' => 'color-maestro',
                'is_active' => false
            ],
            [
                'type_id' => 1,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/images/colors/lada/vesta/sedan/platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // Vesta Cross
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/vesta/cross/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Марс',
                'image' => '/images/colors/lada/vesta/cross/mars.png',
                'class' => 'color-mars',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/vesta/cross/cornelian.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Ангкор',
                'image' => '/images/colors/lada/vesta/cross/angkor.png',
                'class' => 'color-angkor',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Дайвинг',
                'image' => '/images/colors/lada/vesta/cross/daiving.png',
                'class' => 'color-daiving',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Фантом',
                'image' => '/images/colors/lada/vesta/cross/phantom.png',
                'class' => 'color-phantom',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Маэстро',
                'image' => '/images/colors/lada/vesta/cross/maestro.png',
                'class' => 'color-maestro',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/images/colors/lada/vesta/cross/platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // Vesta
            // SW
            [
                'type_id' => 7,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/vesta/sw/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 7,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/vesta/sw/cornelian.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 7,
                'model_id' => 2,
                'title' => 'Ангкор',
                'image' => '/images/colors/lada/vesta/sw/angkor.png',
                'class' => 'color-angkor',
                'is_active' => false
            ],
            [
                'type_id' => 7,
                'model_id' => 2,
                'title' => 'Дайвинг',
                'image' => '/images/colors/lada/vesta/sw/daiving.png',
                'class' => 'color-daiving',
                'is_active' => false
            ],
            [
                'type_id' => 7,
                'model_id' => 2,
                'title' => 'Фантом',
                'image' => '/images/colors/lada/vesta/sw/phantom.png',
                'class' => 'color-phantom',
                'is_active' => false
            ],
            [
                'type_id' => 7,
                'model_id' => 2,
                'title' => 'Маэстро',
                'image' => '/images/colors/lada/vesta/sw/maestro.png',
                'class' => 'color-maestro',
                'is_active' => false
            ],
            [
                'type_id' => 7,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/images/colors/lada/vesta/sw/platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // Vesta
            // SW CROSS
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/vesta/sw_cross/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Марс',
                'image' => '/images/colors/lada/vesta/sw_cross/mars.png',
                'class' => 'color-mars',
                'is_active' => false
            ],
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/vesta/sw_cross/cornelian.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Ангкор',
                'image' => '/images/colors/lada/vesta/sw_cross/angkor.png',
                'class' => 'color-angkor',
                'is_active' => false
            ],
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Дайвинг',
                'image' => '/images/colors/lada/vesta/sw_cross/daiving.png',
                'class' => 'color-daiving',
                'is_active' => false
            ],
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Фантом',
                'image' => '/images/colors/lada/vesta/sw_cross/phantom.png',
                'class' => 'color-phantom',
                'is_active' => false
            ],
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Маэстро',
                'image' => '/images/colors/lada/vesta/sw_cross/maestro.png',
                'class' => 'color-maestro',
                'is_active' => false
            ],
            [
                'type_id' => 8,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/images/colors/lada/vesta/sw_cross/platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // Vesta
            // CNG
            [
                'type_id' => 9,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/vesta/cng/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 9,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/vesta/cng/cornelian.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 9,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/images/colors/lada/vesta/cng/platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // Vesta sport
            [
                'type_id' => 10,
                'model_id' => 2,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/vesta/sport/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'type_id' => 10,
                'model_id' => 2,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/vesta/sport/cornelian.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 10,
                'model_id' => 2,
                'title' => 'Дайвинг',
                'image' => '/images/colors/lada/vesta/sport/daiving.png',
                'class' => 'color-daiving',
                'is_active' => false
            ],
            [
                'type_id' => 10,
                'model_id' => 2,
                'title' => 'Маэстро',
                'image' => '/images/colors/lada/vesta/sport/maestro.png',
                'class' => 'color-maestro',
                'is_active' => false
            ],
            [
                'type_id' => 10,
                'model_id' => 2,
                'title' => 'Платина',
                'image' => '/images/colors/lada/vesta/sport/platina.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // XRay
            // xray
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Красный сплав',
                'image' => '/images/colors/lada/xray/xray/red_alloy.png',
                'class' => 'color-red-alloy',
                'is_active' => true
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/xray/xray/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Серый базальт',
                'image' => '/images/colors/lada/xray/xray/basalt_gray.png',
                'class' => 'color-basalt-gray',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Пума',
                'image' => '/images/colors/lada/xray/xray/brown_cougar.png',
                'class' => 'color-light-brown-cougar',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Лазурно-синий',
                'image' => '/images/colors/lada/xray/xray/sky_blue.png',
                'class' => 'color-sky-blue',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Серое плато',
                'image' => '/images/colors/lada/xray/xray/gray_plateau.png',
                'class' => 'color-gray-plateau',
                'is_active' => false
            ],
            [
                'type_id' => 20,
                'model_id' => 3,
                'title' => 'Черная жемчужина',
                'image' => '/images/colors/lada/xray/xray/black_pearl.png',
                'class' => 'color-black-pearl',
                'is_active' => false
            ],
            // XRay
            // cross
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Красный сплав',
                'image' => '/images/colors/lada/xray/cross/red_alloy.png',
                'class' => 'color-red-alloy',
                'is_active' => true
            ],
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/xray/cross/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Серый базальт',
                'image' => '/images/colors/lada/xray/cross/basalt_gray.png',
                'class' => 'color-basalt-gray',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Янтарь',
                'image' => '/images/colors/lada/xray/cross/amber.png',
                'class' => 'color-amber',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Пума',
                'image' => '/images/colors/lada/xray/cross/brown_cougar.png',
                'class' => 'color-light-brown-cougar',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Лазурно-синий',
                'image' => '/images/colors/lada/xray/cross/sky_blue.png',
                'class' => 'color-sky-blue',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Серое плато',
                'image' => '/images/colors/lada/xray/cross/gray_plateau.png',
                'class' => 'color-gray-plateau',
                'is_active' => false
            ],
            [
                'type_id' => 4,
                'model_id' => 3,
                'title' => 'Черная жемчужина',
                'image' => '/images/colors/lada/xray/cross/black_pearl.png',
                'class' => 'color-black-pearl',
                'is_active' => false
            ],
            // 4x4
            // 3 doors
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Белое облако',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => true
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Несси 2',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_nessi_2.png',
                'class' => 'color-nessi-2',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Пантера',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_panthera.png',
                'class' => 'color-panthera',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Бенефис',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_benefis.png',
                'class' => 'color-benefis',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Барокко',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_barokko.png',
                'class' => 'color-barokko',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Голубая планета',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Терра',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_terra.png',
                'class' => 'color-terra',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_borneo.png',
                'class' => 'color-borneo-dark',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Снежная королева',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_snow_queen.png',
                'class' => 'color-snow-queen',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Кориандр',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_coriander.png',
                'class' => 'color-coriander-dark',
                'is_active' => false
            ],
            [
                'type_id' => 11,
                'model_id' => 4,
                'title' => 'Камуфляж джунгли',
                'image' => '/images/colors/lada/4x4/three_doors/4x4_camouflage_jungle.png',
                'class' => 'color-camouflage-jungle',
                'is_active' => false
            ],
            // Largus
            // универсал
            [
                'model_id' => 5,
                'type_id' => 3,
                'title' => 'Красный сплав',
                'image' => '/images/colors/lada/largus/universal/red_alloy.png',
                'class' => 'color-red-alloy',
                'is_active' => true
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'title' => 'Серый базальт',
                'image' => '/images/colors/lada/largus/universal/basalt_gray.png',
                'class' => 'color-basalt-gray',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'title' => 'Брюн',
                'image' => '/images/colors/lada/largus/universal/brune.png',
                'class' => 'color-brune',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'title' => 'Лазурно-синий',
                'image' => '/images/colors/lada/largus/universal/sky_blue.png',
                'class' => 'color-sky-blue',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'title' => 'Серое плато',
                'image' => '/images/colors/lada/largus/universal/gray_plateau.png',
                'class' => 'color-gray-plateau',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'title' => 'Черная жемчужина',
                'image' => '/images/colors/lada/largus/universal/black_pearl.png',
                'class' => 'color-black-pearl',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 3,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/largus/universal/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => false
            ],
            // Largus
            // NEW
            [
                'model_id' => 5,
                'type_id' => 25,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/largus/universal/largus_glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => true
            ],
            [
                'model_id' => 5,
                'type_id' => 25,
                'title' => 'Огненно-красный',
                'image' => '/images/colors/lada/largus/universal/largus_fire_red.png',
                'class' => 'color-fiery-red',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 25,
                'title' => 'Серый базальт',
                'image' => '/images/colors/lada/largus/universal/largus_basalt_gray.png',
                'class' => 'color-basalt-gray',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 25,
                'title' => 'Кашемир',
                'image' => '/images/colors/lada/largus/universal/largus_cashmere.png',
                'class' => 'color-cashemer',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 25,
                'title' => 'Лазурно-синий',
                'image' => '/images/colors/lada/largus/universal/largus_sky_blue.png',
                'class' => 'color-sky-blue',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 25,
                'title' => 'Черная жемчужина',
                'image' => '/images/colors/lada/largus/universal/largus_black_pearl.png',
                'class' => 'color-black-pearl',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 25,
                'title' => 'Платина',
                'image' => '/images/colors/lada/largus/universal/largus_platinum.png',
                'class' => 'color-platina',
                'is_active' => false
            ],
            // Largus
            // cross
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Красный сплав',
                'image' => '/images/colors/lada/largus/cross/red_alloy.png',
                'class' => 'color-red-alloy',
                'is_active' => true
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Каракумы',
                'image' => '/images/colors/lada/largus/cross/karakum.png',
                'class' => 'color-karakum',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Серый базальт',
                'image' => '/images/colors/lada/largus/cross/basalt_gray.png',
                'class' => 'color-basalt-gray',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Брюн',
                'image' => '/images/colors/lada/largus/cross/brune.png',
                'class' => 'color-brune',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Лазурно-синий',
                'image' => '/images/colors/lada/largus/cross/sky_blue.png',
                'class' => 'color-sky-blue',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Серое плато',
                'image' => '/images/colors/lada/largus/cross/gray_plateau.png',
                'class' => 'color-gray-plateau',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Черная жемчужина',
                'image' => '/images/colors/lada/largus/cross/black_pearl.png',
                'class' => 'color-black-pearl',
                'is_active' => false
            ],
            [
                'model_id' => 5,
                'type_id' => 4,
                'title' => 'Ледниковый',
                'image' => '/images/colors/lada/largus/cross/glacial.png',
                'class' => 'color-white-glacial',
                'is_active' => false
            ],
            // Granta
            // Drive active
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Голубая планета',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => false
            ],
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Пантера',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_panther.png',
                'class' => 'color-panther',
                'is_active' => false
            ],
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Сердолик',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_cornelian.png',
                'class' => 'color-red-cornelian',
                'is_active' => false
            ],
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Белое облако',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_white_apple.png',
                'class' => 'color-white-cloud',
                'is_active' => true
            ],
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Рислинг',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_riesling.png',
                'class' => 'color-riesling',
                'is_active' => false
            ],
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Техно',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_techno.png',
                'class' => 'color-techno',
                'is_active' => false
            ],
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_borneo.png',
                'class' => 'color-borneo-dark',
                'is_active' => false
            ],
            [
                'type_id' => 5,
                'model_id' => 1,
                'title' => 'Кориандр',
                'image' => '/images/colors/lada/granta/drive_active/granta_drive_active_coriander.png',
                'class' => 'color-coriander',
                'is_active' => false
            ],
            // Niva
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Феерия',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_extravaganza.png',
                'class' => 'color-extravaganza',
                'is_active' => true
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Сочи',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_sochi.png',
                'class' => 'color-sochi',
                'is_active' => false
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Техно',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_techno.png',
                'class' => 'color-techno-2',
                'is_active' => false
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Кварц',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_quartz.png',
                'class' => 'color-quartz',
                'is_active' => false
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_borneo.png',
                'class' => 'color-borneo-2',
                'is_active' => false
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Черное зеркало',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_black_mirror.png',
                'class' => 'color-black-mirror',
                'is_active' => false
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Снежная королева',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_snow_queen.png',
                'class' => 'color-snow-queen-2',
                'is_active' => false
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Дикая слива',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_wild_plum.png',
                'class' => 'color-wild-plum',
                'is_active' => false
            ],
            [
                'type_id' => 22,
                'model_id' => 6,
                'title' => 'Айсберг',
                'image' => '/images/colors/lada/4x4/niva/lada_niva_iceberg.png',
                'class' => 'color-iceberg',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Белое облако',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_white_cloud.png',
                'class' => 'color-white-cloud',
                'is_active' => true
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Несси 2',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_nessie.png',
                'class' => 'color-nessi-2',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Пантера',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_panther.png',
                'class' => 'color-panthera',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Бенефис',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_benefis.png',
                'class' => 'color-benefis',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Барокко',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_baroque.png',
                'class' => 'color-barokko',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Голубая планета',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_blue_planet.png',
                'class' => 'color-blue-planet',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Терра',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_terra.png',
                'class' => 'color-terra',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_borneo.png',
                'class' => 'color-borneo-dark',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Снежная королева',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_snow_qeen.png',
                'class' => 'color-snow-queen-2',
                'is_active' => false
            ],
            [
                'model_id' => 4,
                'type_id' => 13,
                'title' => 'Кориандр',
                'image' => '/images/colors/lada/4x4/five_doors/lada_4х4_5dv_coriander.png',
                'class' => 'color-coriander-dark',
                'is_active' => false
            ],
            // Niva Off-road
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Айсберг',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_iceberg.png',
                'class' => 'color-iceberg',
                'is_active' => true
            ],
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Феерия',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_extravaganza.png',
                'class' => 'color-extravaganza',
                'is_active' => false
            ],
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Сочи',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_sochi.png',
                'class' => 'color-sochi',
                'is_active' => false
            ],
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Техно',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_techno.png',
                'class' => 'color-techno-2',
                'is_active' => false
            ],
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Кварц',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_quartz.png',
                'class' => 'color-quartz',
                'is_active' => false
            ],
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Борнео',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_borneo.png',
                'class' => 'color-borneo-2',
                'is_active' => false
            ],
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Черное зеркало',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_black_mirror.png',
                'class' => 'color-black-mirror',
                'is_active' => false
            ],
            [
                'type_id' => 23,
                'model_id' => 6,
                'title' => 'Снежная королева',
                'image' => '/images/colors/lada/4x4/niva_off_road/lada_niva_snow_queen.png',
                'class' => 'color-snow-queen-2',
                'is_active' => false
            ],
            // Niva Off-road
            [
                'type_id' => 24,
                'model_id' => 6,
                'title' => 'Техно',
                'image' => '/images/colors/lada/niva/travel/lada_niva_travel.png',
                'class' => 'color-techno',
                'is_active' => true
            ],
        ];

        DB::table('colors')->insert($colors);
    }
}
