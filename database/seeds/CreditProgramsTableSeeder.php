<?php


use Illuminate\Database\Seeder;

class CreditProgramsTableSeeder extends Seeder
{
    public function run() {
        $credit_programs = [
            [
                'name'=>'Обычная программа',
                'percent_rate'=>15,
                'title_en' => 'normal-program',
            ],
            [
                'name'=>'LADA Finance',
                'percent_rate'=>12,
                'title_en' => 'lada-finance',
            ],
            [
                'name'=>'Расчёт от Брайт Парка',
                'percent_rate'=>5,
                'title_en' => 'calculation-from-bright-park',
            ],
        ];

        DB::table('credit_programs')->insert($credit_programs);
    }
}
