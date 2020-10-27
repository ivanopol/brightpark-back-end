<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarTypeTableSeeder extends Seeder
{
    public function run()
    {
        $model_types = [
            [
                'title_ru' => 'Седан',
                'title_en' => 'Sedan',
                'title_cyr' => 'Седан',
                'slug' => Str::slug('Sedan'),
            ],
            [
                'title_ru' => 'Лифтбек',
                'title_en' => 'Liftback',
                'title_cyr' => 'Лифтбек',
                'slug' => Str::slug('Liftback'),
            ],
            [
                'title_ru' => 'Универсал',
                'title_en' => 'Universal',
                'title_cyr' => 'Универсал',
                'slug' => Str::slug('Universal'),
            ],
            [
                'title_ru' => 'Cross',
                'title_en' => 'Cross',
                'title_cyr' => 'Кросс',
                'slug' => Str::slug('Cross'),
            ],
            [
                'title_ru' => 'Drive Active',
                'title_en' => 'Drive Active',
                'title_cyr' => 'Драйв Актив',
                'slug' => Str::slug('Drive Active'),
            ],
            [
                'title_ru' => 'Хэтчбек',
                'title_en' => 'Hatchback',
                'title_cyr' => 'Хэтчбек',
                'slug' => Str::slug('Hatchback'),
            ],
            [
                'title_ru' => 'SW',
                'title_en' => 'SW',
                'title_cyr' => 'СВ',
                'slug' => Str::slug('SW'),
            ],
            [
                'title_ru' => 'SW Cross',
                'title_en' => 'SW Cross',
                'title_cyr' => 'СВ Кросс',
                'slug' => Str::slug('SW Cross'),
            ],
            [
                'title_ru' => 'CNG',
                'title_en' => 'CNG',
                'title_cyr' => 'СНГ',
                'slug' => Str::slug('CNG'),
            ],
            [
                'title_ru' => 'Sport',
                'title_en' => 'Sport',
                'title_cyr' => 'Спорт',
                'slug' => Str::slug('Sport'),
            ],
            [
                'title_ru' => '3 дв.',
                'title_en' => '3 doors',
                'title_cyr' => '3 дв.',
                'slug' => Str::slug('Three Doors'),
            ],
            [
                'title_ru' => 'Urban 3 дв.',
                'title_en' => 'Urban 3 doors',
                'title_cyr' => 'Урбан 3 дв.',
                'slug' => Str::slug('Urban Three Doors'),
            ],
            [
                'title_ru' => '5 дв.',
                'title_en' => '5 doors',
                'title_cyr' => '5 дв.',
                'slug' => Str::slug('Five Doors'),
            ],
            [
                'title_ru' => '5 Urban дв.',
                'title_en' => 'Urban 5 doors',
                'title_cyr' => 'Урбан 5 дв.',
                'slug' => Str::slug('Urban Five Doors'),
            ],
            [
                'title_ru' => 'Bronto',
                'title_en' => 'Bronto',
                'title_cyr' => 'Бронто',
                'slug' => Str::slug('Bronto'),

            ],
            [
                'title_ru' => 'Универсал CNG',
                'title_en' => 'Universal CNG',
                'title_cyr' => 'Универсал СНГ',
                'slug' => Str::slug('Universal CNG'),
            ],
            [
                'title_ru' => 'Cross CNG',
                'title_en' => 'Cross CNG',
                'title_cyr' => 'Кросс СНГ',
                'slug' => Str::slug('Cross CNG'),
            ],
            [
                'title_ru' => 'Фургон',
                'title_en' => 'Minivan',
                'title_cyr' => 'Фургон',
                'slug' => Str::slug('Minivan'),
            ],
            [
                'title_ru' => 'Фургон CNG',
                'title_en' => 'Minivan CNG',
                'title_cyr' => 'Фургон СНГ',
                'slug' => Str::slug('Minivan CNG'),
            ],
            [
                'title_ru' => 'XRAY',
                'title_en' => 'XRAY',
                'title_cyr' => 'Х Рей',
                'slug' => Str::slug('XRAY'),
            ],
            [
                'title_ru' => null,
                'title_en' => null,
                'title_cyr' => null,
                'slug' => null,
            ],
            [
                'title_ru' => 'Niva',
                'title_en' => 'Niva',
                'title_cyr' => 'Нива',
                'slug' => Str::slug('Niva'),
            ],
        ];

        DB::table('car_types')->insert($model_types);
    }
}
