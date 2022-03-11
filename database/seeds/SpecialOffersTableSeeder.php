<?php


use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SpecialOffersTableSeeder extends Seeder
{
    public function run()
    {
        $special_offers = [
            [
                'date' => null,
                'title'=>'LADA VESTA',
                'description'=>'',
                'count'=>17,
                'is_active'=>true,
                'img_mobile' => '/images/main/mobile/tvoya-novaya-lada.jpg',
                'img_tablet' => '/images/main/tablet/tvoya-novaya-lada.jpg',
                'img_desktop' => '/images/main/desktop/tvoya-novaya-lada.jpg',
            ],

            [
                'date' => Carbon::create(2020, 03, 30, 0, 0, 0),
                'title'=>'LADA VESTA',
                'description'=>'',
                'count'=>6,
                'is_active'=>true,
                'img_mobile' => '/images/main/mobile/ball.jpg',
                'img_tablet' => '/images/main/tablet/ball.jpg',
                'img_desktop' => '/images/main/desktop/ball.jpg',
            ],
        ];

        DB::table('special_offers')->insert($special_offers);
    }
}
