<?php

use Illuminate\Database\Seeder;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'url' => '',
                'title' => 'Автосалон Брайт Парк ー официальный дилер автомобилей Лада (Lada) в <:CITY_DATIVE:>',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада в <:REGION_DATIVE:> 🚗 Купить новую Lada в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии.',
                'city' => '0',
            ],
            [
                'url' => 'stocks',
                'title' => 'Акции дилерского центра Брайт Парк (Bright Park) в <:CITY_DATIVE:>',
                'description' => 'Ищете выгодные предложения на автомобили LADA в <:CITY_DATIVE:>? Посмотрите действующие акции в Брайт Парке',
                'city' => '0',
            ],
            [
                'url' => 'about',
                'title' => 'О Компании | Брайт Парк в <:CITY_DATIVE:>',
                'description' => 'Информация о компании Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'contacts',
                'title' => 'Контакты Брайт Парка в <:CITY_DATIVE:>. Адрес: <:ADDRESS:> Телефон: <:PHONE:>',
                'description' => 'Информация о компании Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news',
                'title' => 'Новости – Брайт Парк: официальный дилер LADA в <:CITY_DATIVE:>',
                'description' => 'Актуальные новости от официального дилера LADA в <:CITY_DATIVE:> – Брайт Парк. Узнайте первыми о новинках и специальных предложениях',
                'city' => '0',
            ],
            [
                'url' => 'special-offers',
                'title' => 'Брайт Парк - Официальный дилер LADA (ЛАДА) в <:CITY_DATIVE:>',
                'description' => 'Выбираете где купить новую LADA (ЛАДА) по лучшей цене в <:CITY_DATIVE:>? У официального дилера LADA - Брайт Парк автомобили в наличии по лучшей стоимости. Также в нашем автосалоне выгодный обмен и кредит.',
                'city' => '0',
            ],
            [
                'url' => 'special-offers-profitable',
                'title' => 'Выгодное предложение от компании Брайт Парк - Официальный дилер LADA (ЛАДА) в <:CITY_DATIVE:>',
                'description' => 'Выбираете где купить новую LADA (ЛАДА) по лучшей цене в <:CITY_DATIVE:>? У официального дилера LADA - Брайт Парк автомобили в наличии по лучшей стоимости. Также в нашем автосалоне выгодный обмен и кредит.',
                'city' => '0',
            ],
            [
                'url' => 'privacy',
                'title' => 'Политика конфиденциальности Брайт Парк в <:CITY_DATIVE:>',
                'description' => 'Политика конфиденциальности Брайт Парк',
                'city' => '0',
            ],
            [
                'url' => 'service',
                'title' => 'Сервисный центр автосалона Брайт Парк в <:CITY_DATIVE:>',
                'description' => 'Брайт Парк <:CITY:> предлагает Сервисное обслуживание автомобилей Лада в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'credit',
                'title' => 'Кредит на новый автомобиль ЛАДА (LADA) в <:CITY_DATIVE:>',
                'description' => 'Автокредит на выгодных условиях 👍🏼 | Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'accessories',
                'title' => 'Аксессуары | Брайт Парк в <:CITY_DATIVE:>',
                'description' => 'Аксессуары | Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
        ];
        $models = [
            [
                'url' => 'granta',
                'title' => 'Лада Гранта 🚗: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Granta 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта в <:REGION_DATIVE:> 🚗 Купить новую Granta в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'granta/sedan',
                'title' => 'Лада Гранта Седан 🚗: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Granta Седан 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Седан в <:REGION_DATIVE:> 🚗 Купить новую Granta Седан в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'granta/liftback',
                'title' => 'Лада Гранта Лифтбек 🚗: цена, купить в новую Lada Granta <:CITY_DATIVE:> в Перми 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Лифтбек в <:REGION_DATIVE:> 🚗 Купить новую Granta Лифтбек в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'granta/cross',
                'title' => 'Лада Гранта Кросс 🚗: цена и комплектация в автосалонах <:CITY_DATIVE:> ー купить новую Lada Granta Cross',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Кросс в <:REGION_DATIVE:> 🚗 Купить новую Granta Cross в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'granta/drive-active',
                'title' => 'Лада Гранта Драйв Актив 🚗: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Granta Drive Active 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Гранта Драйв Актив в <:REGION_DATIVE:> 🚗 Купить новую Granta Drive Active в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'granta/sedan/model-details',
                'title' => 'Купить Гранта Седан 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'granta/liftback/model-details',
                'title' => 'Купить Гранта Лифтбек 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'granta/cross/model-details',
                'title' => 'Купить Гранта Кросс 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'granta/drive-active/model-details',
                'title' => 'Купить Гранта Drive-Active 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'niva/off-road/model-details',
                'title' => 'Купить Нива Оффроуд 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'vesta',
                'title' => 'Лада Веста 🚗: цена, купить новую Lada Vesta у официального дилера в <:CITY_DATIVE:>',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста в <:REGION_DATIVE:> 🚗 Купить новую Vesta в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'vesta/sedan',
                'title' => 'Лада Веста Седан 🚗: цена, купить у официального дилера в <:CITY_DATIVE:> новую Lada Vesta Седан 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Седан в <:REGION_DATIVE:> 🚗 Купить новую Седан в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'vesta/sw-cross',
                'title' => 'Лада Веста СВ Кросс 🚗: цена, купить у официального дилера в <:CITY_DATIVE:> новую Lada Vesta SW Cross 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста СВ Кросс в <:REGION_DATIVE:> 🚗 Купить новую Vesta SW Cross в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'vesta/cng',
                'title' => 'Лада Веста СНГ 🚗: купить, цена у официального дилера в <:CITY_DATIVE:> новой Lada Vesta CNG 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста в <:REGION_DATIVE:> 🚗 Купить новую Vesta в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'vesta/sw',
                'title' => 'Лада Веста СВ 🚗: цена, купить у официального дилера в <:CITY_DATIVE:> новую Lada Vesta SW 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Веста СВ в <:REGION_DATIVE:> 🚗 Купить новую Vesta SW в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'vesta/sedan/model-details',
                'title' => 'Купить Веста Седан 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'vesta/sw-cross/model-details',
                'title' => 'Купить Веста СВ Кросс 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'vesta/cng/model-details',
                'title' => 'Купить Веста CNG 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'vesta/sw/model-details',
                'title' => 'Купить Веста СВ 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'xray',
                'title' => 'Купить LADA XRAY 🚗 по лучшей цене в <:CITY_DATIVE:> | Брайт Парк',
                'description' => 'Выбираете где купить новую LADA XRAY по лучшей цене в <:CITY_DATIVE:>? У официального дилера LADA - Брайт Парк XRAY в наличии по лучшей стоимости. Также у нас выгодный обмен и кредит.',
                'city' => '0',
            ],
            [
                'url' => 'xray/xray',
                'title' => 'Лада Х Рей 🚗: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Xray 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Х Рей в <:REGION_DATIVE:> 🚗 Купить новую Lada X-Ray в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'xray/cross',
                'title' => 'Лада Х Рей Кросс 🚗: цена, купить в автосалонах <:CITY_DATIVE:> новую Lada Xray Сross 2020',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Х Рей Кросс в <:REGION_DATIVE:> 🚗 Купить новую Lada X-Ray Cross в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'xray/xray/model-details',
                'title' => 'Купить Lada XRAY 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'xray/cross/model-details',
                'title' => 'Купить Lada XRAY Cross 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'largus',
                'title' => 'Купить LADA Largus 🚗 по лучшей цене в <:CITY_DATIVE:> | Брайт Парк',
                'description' => 'Выбираете где купить новую LADA Largus по лучшей цене в <:CITY_DATIVE:>? У официального дилера LADA - Брайт Парк Largus в наличии по лучшей стоимости. Также у нас выгодный обмен и кредит.',
                'city' => '0',
            ],
            [
                'url' => 'largus/universal',
                'title' => 'Лада Ларгус 🚗: цена, купить новую Lada Largus в <:CITY_DATIVE:> у официального дилера',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Ларгус в <:REGION_DATIVE:> 🚗 Купить новую Lada Largus в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'largus/cross',
                'title' => 'Лада Ларгус Кросс 🚗: цена, купить новую Lada Largus Cross в <:CITY_DATIVE:> у официального дилера ',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Ларгус Cross в <:REGION_DATIVE:> 🚗 Купить новую Lada Largus Cross в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => 'largus/universal/model-details',
                'title' => 'Купить Ларгус Универсал 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'largus/cross/model-details',
                'title' => 'Купить Ларгус Кросс 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => '4x4',
                'title' => 'Лада 4х4 🚗: цена, купить в <:CITY_DATIVE:> у официального дилера новую Lada Нива 4х4',
                'description' => 'Выбираете где купить новую LADA 4x4 по лучшей цене в <:CITY_DATIVE:>? У официального дилера LADA - Брайт Парк 4x4 в наличии по лучшей стоимости. Также у нас выгодный обмен и кредит.',
                'city' => '0',
            ],
            [
                'url' => '4x4/three-doors',
                'title' => 'Лада 4х4 3 двери 🚗: цена, купить в <:CITY_DATIVE:> у официального дилера новую Lada Нива 4х4',
                'description' => 'Официальный дилер LADA Брайт Парк ⭐ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада 4х4 в <:REGION_DATIVE:> 🚗 Купить новую Lada 4х4 в <:CITY_DATIVE:> 🚗 в обмен и кредит. 500 авто с ПТС в наличии',
                'city' => '0',
            ],
            [
                'url' => '4x4/five-doors',
                'title' => 'Нива 4x4 5 дверей 🚗: цена, купить в <:CITY_DATIVE:> у официального дилера новую Lada Нива 4х4',
                'description' => 'Выбираете где купить новую LADA 4x4 5 дв. по лучшей цене в <:CITY_DATIVE:>? У официального дилера LADA - Брайт Парк 4x4 5 дв. в наличии по лучшей стоимости. Также у нас выгодный обмен и кредит.',
                'city' => '0',
            ],
            [
                'url' => '4x4/three-doors/model-details',
                'title' => 'Купить 4x4 три двери. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => '4x4/five-doors/model-details',
                'title' => 'Купить 4x4 пять дверей. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'niva/niva',
                'title' => 'Купить Ниву 🚗 в <:CITY_DATIVE:>: цена новой Лада (LADA) Niva у официального дилера',
                'description' => '✅Официальный дилер LADA Брайт Парк✅ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Нива в <:REGION_DATIVE:> ⭐Купить новую Lada Niva в <:CITY_DATIVE:>⭐',
                'city' => '0',
            ],
            [
                'url' => 'niva/off-road',
                'title' => 'Ниву Оффроуд 🚗: купить, цена в <:CITY_DATIVE:> у официального дилера новую Lada Нива Off-Road',
                'description' => '✅Официальный дилер LADA Брайт Парк✅ предлагает лучшие цены 👍🏼 на покупку и сервисное обслуживание 🛠 Лада Нива в <:REGION_DATIVE:> ⭐Купить новую Lada Niva в <:CITY_DATIVE:>⭐',
                'city' => '0',
            ],
            [
                'url' => 'niva/niva/model-details',
                'title' => 'Купить Ниву 🔥. Онлайн оценка автомобиля в Брайт Парк <:CITY:>',
                'description' => 'Не знаете, по какой цене продать свой автомобиль? В Брайт Парк онлайн оценка автомобиля в <:CITY_DATIVE:>',
                'city' => '0',
            ],
        ];
        $stocks = [
            [
                'url' => 'stocks/lada-vesta-vygoda-10-po-gosprogramme',
                'title' => 'LADA Vesta по обновленной госпрограмме | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Расширенные условия программы государственной поддержки в Брайт парке! Максимально выгодные предложения на покупку LADA. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'stocks/obmen-na-lada-vesta-vyshe-rynochnoj-ceny',
                'title' => 'Обмен на LADA Vesta выше рыночной цены | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Воспользуйтесь возможностью обменять свой автомобиль выше рыночной стоимости и с дополнительной выгодой - 40 000 рублей. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'stocks/lada-granta-0-pervonachalnyj-vznos',
                'title' => 'LADA Granta 0% первоначальный взнос | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Наш дилерский центр предлагает услугу автокредитования. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'stocks/brajt-park-rabotaet-onlajn',
                'title' => 'Брайт Парк работает онлайн! Полный цикл услуг по приобретению автомобиля | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Брайт Парк работает онлайн! Мы оказываем полный цикл услуг по приобретению автомобиля. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'stocks/doplata-40-000-rublej-pri-obmene-na-lada-granta',
                'title' => 'Доплата 40 000 рублей при обмене на LADA Granta | Акции Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Воспользуйтесь возможностью обменять свой автомобиль с дополнительной выгодой - 40 000 рублей. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'stocks/rasshirennye-usloviya-programmy-gosudarstvennoj-podderzhki',
                'title' => 'Расширенные условия программы государственной поддержки - Брайт Парк <:CITY:>',
                'description' => 'Максимально выгодные предложения на&nbsp;покупку LADA. Вы&nbsp;можете приобрести автомобиль по&nbsp;доступной цене, суммируя акции по&nbsp;специальным про... - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'stocks/predlozhenie-goda-v-brayt-parke',
                'title' => 'Предложение года на покупку авто - Брайт Парк <:CITY:>',
                'description' => 'В последние дни декабря - в Брайт парке очень выгодные условия на покупку новой LADA. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'stocks/nuzhno-uspet-do-povysheniya-cen',
                'title' => 'НУЖНО УСПЕТЬ ДО ПОВЫШЕНИЯ ЦЕН - Брайт Парк <:CITY:>',
                'description' => 'Успевайте приобрести автомобиль марки LADA в автосалоне Брайт Парк в ноябре! - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'stocks/wow-trejd-in-doplatim-40-000-r-k-vashej-cene',
                'title' => 'WOW ТРЕЙД-ИН ДОПЛАТИМ 40 000 рублей К ВАШЕЙ ЦЕНЕ - Брайт Парк <:CITY:>',
                'description' => 'Программа обмена в Брайт парке — это максимально удобный и быстрый способ обменять подержанный автомобиль на новый. Вам не нужно задумываться о реализации автомобиля, никаких классифайдов, звонков перекупов и других не известных вам людей. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'stocks/dorogo-vykupim-vash-avto',
                'title' => 'ДОРОГО ВЫКУПИМ ВАШ АВТО - Брайт Парк <:CITY:>',
                'description' => 'При покупке автомобиля LADA в нашем салоне — воспользуйтесь услугой обмена автомобиля. Пока вы пьете ароматный чай — ваш автомобиль уже оценят. Специалисты Брайт парка осмотрят и оценят ваш автомобиль буквально за 15 минут и предложат цену релевантную средней стоимости вашего автомобиля на рынке. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'stocks/garantiruem-podarok-pri-pokupke-lada-granta',
                'title' => 'ГАРАНТИРУЕМ ПОДАРОК ПРИ ПОКУПКЕ LADA GRANTA - Брайт Парк <:CITY:>',
                'description' => 'При покупке LADA Granta в кредит в ноябре дарим вам шины в подарок! Прекрасное дополнение к совершенной покупке. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'stocks/gosprogramma-brajt-parka-skidka-10-vsem',
                'title' => 'ГОСПРОГРАММА БРАЙТ ПАРКА: СКИДКА 10% ВСЕМ! - Брайт Парк <:CITY:>',
                'description' => 'Максимально выгодные предложения на покупку LADA. Вы можете приобрести автомобиль по доступной цене, суммируя акции по специальным программам. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'stocks/kredit-v-brajt-parke-novogodnyaya-rassrochka-pervyj-vznos-0',
                'title' => 'КРЕДИТ В БРАЙТ ПАРКЕ НОВОГОДНЯЯ РАССРОЧКА + ПЕРВЫЙ ВЗНОС 0% - Брайт Парк <:CITY:>',
                'description' => 'В Брайт парке уже новый год! Порадуйте себя новым автомобилем на комфортных для вас условиях! Новая LADA может Распространяется на все новые автомобили LADA. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
        ];
        $news = [
            [
                'url' => 'news/start-prodazh-lada-niva',
                'title' => 'Старт продаж LADA Niva  | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Начались продажи внедорожника Niva под маркой LADA. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-itogi-prodazh-v-i-polugodii-2020-goda',
                'title' => 'LADA: итоги продаж в первом полугодии 2020 года | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA подводит итоги продаж в первой половине 2020 года и фиксирует начало поэтапного восстановления спроса на рынке. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-bolee-1000-novyh-furgonov-dlya-pochty-rossii',
                'title' => 'LADA: более 1000 новых фургонов для Почты России | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA приступила к отгрузке крупной партии LADA Largus для Почты России. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-vesta-vypushcheno-450-000-avtomobilej',
                'title' => 'LADA Vesta: выпущено 450 000 автомобилей | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥C конвейера завода LADA Ижевск (входит в Группу АВТОВАЗ) сошел 450-тысячный автомобиль семейства LADA Vesta. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-v-iyune-novye-vygodnye-predlozheniya',
                'title' => 'LADA в июне: новые выгодные предложения | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA объявляет об акциях в июне, позволяющих приобрести новый автомобиль на максимально выгодных условиях. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/new-benefits-when-buying-lada',
                'title' => 'Новые выгоды при покупке LADA | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Новые выгоды при покупке LADA. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-vesta-sport-expands-the-color-range',
                'title' => 'LADA Vesta Sport расширяет цветовую гамму | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Спортивная модель семейства LADA Vesta получила два новых цвета. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-sale-results',
                'title' => 'Результаты продаж автомобилей LADA в апреле | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA подвела итоги прошлого месяца. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/niva-modification-in-germany',
                'title' => 'В Германии появилась модификация LADA 4x4 | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Сеть немецких автосалонов предлагает несколько необычных модификаций LADA 4х4, оснащённых подвижным скребком. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-kabriolet',
                'title' => 'Кабриолет LADA Natasha | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В 1990 году компания «Скалдия-Волга» из Бельгии, придумала Кабриолет на базе LADA Samara. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-continue-modernisation',
                'title' => 'LADA продолжает модернизировать технологии | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В 2019 году был проведен большой объем работ: усиление контроля качества, оптимизация процессов и экономия средств. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-50-years',
                'title' => 'LADA: 50 лет первому автомобилю | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥19 апреля 2020 года исполняется 50 лет с выпуска первых автомобилей марки LADA. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-popular-in-finland',
                'title' => 'LADA популярна в Финляндии | Новости Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Эксперты выяснили, почему российский автомобиль ВАЗ-2101 был в почете у финнов. Подробнее на сайте Bright Park',
                'city' => '0',
            ],
            [
                'url' => 'news/start-prodazh-lada-vesta-cross-black',
                'title' => 'Старт продаж LADA Vesta Cross [BLACK] - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В продаже появились модели LADA Vesta Cross и Vesta SW Cross вспециальном исполнении [BLACK]. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-vesta-avtomobil-goda-v-rossii',
                'title' => 'LADA Vesta — Автомобиль года в России! - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA объявляет о старте производства новой версии компактного универсала LADA Granta Cross. Автомобиль в комплектации Quest отличается яркими эл... - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-day-service-v-brajt-parke',
                'title' => 'LADA Day Service в Брайт Парке! - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥Приглашаем вас пройти бесплатную диагностику вашего автомобиля! Преимущества для вас: диагностика за наш счет, произведение работ в вашем присут... - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/granta-cross-quest-start-proizvodstva-novoj-specialnoj-versii-lada',
                'title' => 'Granta Cross Quest - старт производства новой специальной версии LADA - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥LADA объявляет о старте производства новой версии компактного универсала LADA Granta Cross. Автомобиль в комплектации Quest отличается яркими эл... - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-itogi-prodazh-za-iyul-2020-goda',
                'title' => 'LADA: итоги продаж за июль 2020 года - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥ЛАДА подводит итоги продаж за июль 2020 года. В июле было продано 31 709 автомобилей, включая 310 штук моделей ЛАДА Нива и 5... - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/lada-izhevsk-55-let-istorii',
                'title' => 'Lada Ижевск: 55 лет истории - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥21 октября 2020 года LADA Ижевский автомобильный завод, выпускающий автомобили LADA, отметил свой 55-летний юбилей: в этот день в 1965 году был подписан приказ об организации автопроизводства в Ижевске. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/startovali-prodazhi-lada-vesta-sport-c-paketom-dvukhtsvetnaya-okraska',
                'title' => 'Старт продаж Lada Vesta Sport c покетом "Двухцветная Окраска" - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В ноябре стали доступны к заказу LADA Vesta Sport с опциональным пакетом «двухцветная окраска» - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/vypuschena-500-tysyachnaya-lada-vesta',
                'title' => 'Выпущена 500-тысячная Lada Vesta - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В ноябре с конвейера сошла 500-тысячная LADA Vesta. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
            [
                'url' => 'news/novaya-upakovka-dlya-originalnykh-zapchastey-lada',
                'title' => 'Новая упаковка для оригинальных запчастей LADA - Брайт Парк в <:CITY_DATIVE:>',
                'description' => '🔥В наши автосалоны начали поступать оригинальные запасные части и расходные материалы в новой упаковке. - Брайт Парк в <:CITY_DATIVE:>',
                'city' => '0',
            ],
        ];
        $both = array_merge($news, $stocks, $models, $pages);
        DB::table('seo')->insert($both);
    }
}
