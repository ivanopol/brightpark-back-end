<?php


use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        $contacts = [
            [
                'city_id' => '6',
                'address' => 'Волгоград, ул. Зевина, 3д',
                'phone' => '+7 844 252 54 52',
                'email' => 'volga@brightpark.ru',
                'fb_url' => 'https://www.facebook.com/brightpark.rus',
                'instagram_url' => 'https://www.instagram.com/lada_brightpark/',
                'vk_url' => 'https://vk.com/brightpark_rus',
                'youtube_url' => 'https://www.youtube.com/channel/UCO83EepufA8W8t_VzgrgvNg',
                'ok_url' => 'https://ok.ru/brightpark.rus'],

            [
                'city_id' => '1',
                'address' => 'Пермь, ул.Пушкарская, 138',
                'phone' => '+7 342 214 84 00',
                'email' => 'info@brightpark.ru',
                'fb_url' => 'https://www.facebook.com/brightpark.rus',
                'instagram_url' => 'https://www.instagram.com/lada_brightpark/',
                'vk_url' => 'https://vk.com/brightpark_rus',
                'youtube_url' => 'https://www.youtube.com/channel/UCO83EepufA8W8t_VzgrgvNg',
                'ok_url' => 'https://ok.ru/brightpark.rus'],

            [
                'city_id' => '2',
                'address' => 'г. Москва, дорога Симферопольское шоссе, дом 22, строение 5',
                'phone' => '+7 495 145 88 45',
                'email' => 'moscow@brightpark.ru',
                'fb_url' => 'https://www.facebook.com/brightpark.rus',
                'instagram_url' => 'https://www.instagram.com/lada_brightpark/',
                'vk_url' => 'https://vk.com/brightpark_rus',
                'youtube_url' => 'https://www.youtube.com/channel/UCO83EepufA8W8t_VzgrgvNg',
                'ok_url' => 'https://ok.ru/brightpark.rus'],

            [
                'city_id' => '5',
                'address' => 'Екатеринбург, ул. Маневровая, 40',
                'phone' => '+7 343 385 03 85',
                'email' => 'ekb@brightpark.ru',
                'fb_url' => 'https://www.facebook.com/brightpark.rus',
                'instagram_url' => 'https://www.instagram.com/lada_brightpark/',
                'vk_url' => 'https://vk.com/brightpark_rus',
                'youtube_url' => 'https://www.youtube.com/channel/UCO83EepufA8W8t_VzgrgvNg',
                'ok_url' => 'https://ok.ru/brightpark.rus'],

            [
                'city_id' => '4',
                'address' => 'Ростов-на-Дону, ул. Депутатская, 5а',
                'phone' => '+7 863 308 94 88',
                'email' => 'rostov@brightpark.ru',
                'fb_url' => 'https://www.facebook.com/brightpark.rus',
                'instagram_url' => 'https://www.instagram.com/lada_brightpark/',
                'vk_url' => 'https://vk.com/brightpark_rus',
                'youtube_url' => 'https://www.youtube.com/channel/UCO83EepufA8W8t_VzgrgvNg',
                'ok_url' => 'https://ok.ru/brightpark.rus'],

            [
                'city_id' => '3',
                'address' => 'г. Магнитогорск, ул.Калмыкова, д.70/2',
                'phone' => '+7 351 939 55 50',
                'email' => 'magnitka@brightpark.ru',
                'fb_url' => 'https://www.facebook.com/brightpark.rus',
                'instagram_url' => 'https://www.instagram.com/lada_brightpark/',
                'vk_url' => 'https://vk.com/brightpark_rus',
                'youtube_url' => 'https://www.youtube.com/channel/UCO83EepufA8W8t_VzgrgvNg',
                'ok_url' => 'https://ok.ru/brightpark.rus'],
        ];

        DB::table('contacts')->insert($contacts);
    }
}
