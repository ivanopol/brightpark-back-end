<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

class Stocks extends Model
{
    protected $fillable = [
        'title',
        'text',
        'text_short',
        'preview',
        'slug',
        'city_id',
        'sort',
        'date_begin',
        'date_end',
        'active',
    ];

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'stocks';

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
    }

    /**
     * Получаем ключ роута для таблицы.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Производим замену подстановочных данных в тексте
     *
     *
     */
    public static function handlePlaceholders (object $data, String $city_id, array $needle) : object
    {
        $city = City::find($city_id);
        $contacts = Contacts::where('city_id', $city_id)->first();

        $patterns = [
            '/<:CITY:>/',
            '/<:CITY_DATIVE:>/',
            '/<:REGION_DATIVE:>/',
            '/<:ADDRESS:>/',
            '/<:PHONE:>/'
        ];

        $replacements = [
            $city->title_ru,
            $city->city_dative,
            $city->region_dative,
            $contacts->address,
            $contacts->phone
        ];

        foreach ($needle as $target_row) {
            $data[$target_row] = preg_replace($patterns, $replacements, $data[$target_row]);
        }

        return $data;
    }
}
