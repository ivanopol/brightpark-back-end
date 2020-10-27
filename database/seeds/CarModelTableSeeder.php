<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CarModelTableSeeder extends Seeder
{
    public function run()
    {
        $models = [
            [
                'title' => 'Granta',
                'title_ru' => 'Гранта',
                'slug' => Str::slug('Granta'),
                'description' => 'Компактный внешне и&nbsp;удивительно просторный внутри. Быстрый, но&nbsp;экономичный. Способный одинаково успешно ездить в&nbsp;любых погодных условиях и&nbsp;в&nbsp;городе, и&nbsp;на&nbsp;трассе. Красивый, комфортный, недорогой и&nbsp;это всё LADA Granta!',
                'sort' => 1,
                'preview' => '/images/photos/models/granta/granta.png',
            ],
            [
                'title' => 'Vesta',
                'title_ru' => 'Веста',
                'slug' => Str::slug('Vesta'),
                'description' => 'LADA Vesta стильная, стремительная, яркая&nbsp;&mdash; такая, каким и&nbsp;должен быть автомобиль LADA нового поколения. Силуэт выдержан в&nbsp;единой &laquo;Икс&raquo;-концепции и&nbsp;выглядит гармонично и&nbsp;современно. С&nbsp;таким автомобилем вряд&nbsp;ли удастся остаться незамеченным на&nbsp;дороге.',
                'sort' => 2,
                'preview' => '/images/photos/models/vesta/vesta.png',
            ],
            [
                'title' => 'XRAY',
                'title_ru' => 'Х Рей',
                'slug' => Str::slug('XRAY'),
                'description' => 'Компактный&nbsp;&mdash; но&nbsp;солидный, высокий&nbsp;&mdash; но&nbsp;динамичный. LADA XRAY преуспевает во&nbsp;всех дисциплинах: скоростная поездка по&nbsp;трассе, маневрирование в&nbsp;тесноте города, уверенное движение по&nbsp;грунту, снегу и&nbsp;неровностям урбанистического пейзажа. Максимум впечатлений уже ждёт Вас за&nbsp;рулём LADA XRAY!',
                'sort' => 3,
                'preview' => '/images/photos/models/xray/xray.png',
            ],
            [
                'title' => '4x4',
                'title_ru' => '4x4',
                'slug' => Str::slug('4x4'),
                'description' => 'LADA 4&times;4&nbsp;&mdash; легендарный автомобиль, который не&nbsp;может жить без сильных ощущений. Он&nbsp;силен, оборотист и&nbsp;неприхотлив. Его призвание&nbsp;&mdash; бездорожье, но&nbsp;он&nbsp;прекрасно себя чувствует и&nbsp;в&nbsp;городских джунглях. Принципы данной модели: уникальная проходимость, надежность и&nbsp;простота обслуживания.',
                'sort' => 5,
                'preview' => '/images/photos/models/4x4/4x4.png',
            ],
            [
                'title' => 'Largus',
                'title_ru' => 'Ларгус',
                'slug' => Str::slug('Largus'),
                'description' => 'Этот автомобиль может легко приспособиться к любым вашим потребностям. LADA Largus идеально сочетает в себе комфорт, практичность и высокую полезную нагрузку. Крепкий, сбитый, уверенный Largus однозначно заявляет: «На меня можно положиться!». LADA Largus адаптирован к российским условиям эксплуатации, а отработанная конструкция и технологии обеспечивают высокое качество автомобиля.',
                'sort' => 4,
                'preview' => '/images/photos/models/largus/largus.png',
            ],
            [
                'title' => 'Niva',
                'title_ru' => 'Нива',
                'slug' => Str::slug('Niva'),
                'description' => 'Отправляйтесь в путешествие по горам и городам! Потрясающие внедорожные возможности LADA Niva открывают перед вами все пути.',
                'sort' => 6,
                'preview' => '/images/photos/models/4x4/lada_niva.png',
            ],
        ];

        DB::table('car_models')->insert($models);
    }
}
