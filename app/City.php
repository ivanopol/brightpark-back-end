<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\DB;
use App\Contacts;

class City extends Model
{
    protected $fillable = [
        'title_en',
        'title_ru',
        'alias',
        'city_dative',
        'opening_hours',
        'callback_emails',
        'callback_service_emails',
        'coordinates',
        'jivosite_token',
        'begin_script',
        'bitrix_responsible_id'
    ];

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'cities';

    private $city;
    private $geo_data;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
    }

    /**
     * Получаем город по умолчанию
     *
     * @return array
     */
    public function defaultCity(): array
    {
        return (array)DB::selectOne("SELECT *
                                     FROM `cities`
                                     LEFT JOIN `contacts` `c` ON `c`.`city_id`=`cities`.`id`
                                     WHERE `alias` = :alias", ['alias' => self::DEFAULT_CITY]);

    }

    /**
     * Получаем город по IP-адресу посетителя
     *
     * @param string $ip IP-адрес
     * @return array
     */
    public function getCityByIP(string $ip): array
    {
        $alias = geoip($ip = null)->getLocation($ip)->getAttribute('city');
        return (array)DB::selectOne("SELECT *
                                      FROM `cities`
                                      LEFT JOIN `contacts` `c` ON `c`.`city_id`=`cities`.`id`
                                      WHERE `alias`=:alias", ['alias' => $alias]);
    }

    /**
     * Получаем ключ роута для таблицы.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'alias';
    }

    /**
     * Получаем город
     *
     * return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Получаем список городов для выпадающего списка в меню
     *
     * @param string $city_active
     * @return array
     */
    public function getCities($city_active, $geo = false): array
    {
        $cities = [
            'active' => [],
            'list' => []
        ];

        $cities_issets = [];
        $cities_list = City::all();
        $contacts_list = Contacts::all()->sortBy('city_id');

        foreach ($cities_list as $city) {
            $cities_issets[] = $geo ? $city->title_en : $city->alias ;
        }

        $city_active = in_array($city_active, $cities_issets) ? $city_active : 'perm' ;

        $i = 0;
        foreach ($cities_list as $city) {
            $cities['list'][$i] = [
                'value' => $city->alias,
                'label' => $city->title_ru,
            ];

            $compare = $geo ? $city->title_en : $city->alias;

            if ($compare === strtolower($city_active)) {

                $opening_hours_tmp = explode(';',  $city->opening_hours);
                $days = explode(',', $opening_hours_tmp[0]);
                $hours = explode('-', $opening_hours_tmp[1]);

                $opening_hours = [
                    'days' => [
                        'en' => $days[0],
                        'ru' => $days[1],
                        'ru-full' => $days[2],
                    ],
                    'hours' => $opening_hours_tmp[1],
                    'hours_split' => [
                        'from' => $hours[0],
                        'to' => $hours[1],
                    ]
                ];

                $scripts_ids = explode(';',  $city->begin_script);
                $scripts_ids_tmp = [];
                $scripts_ids_tmp['ya_metrika'] = isset($scripts_ids[0]) && !empty($scripts_ids[0]) ? $scripts_ids[0] : '';
                $scripts_ids_tmp['gtag'] = isset($scripts_ids[1]) && !empty($scripts_ids[1]) ? $scripts_ids[1] : '';
                $scripts_ids_tmp['facebook'] = isset($scripts_ids[2]) && !empty($scripts_ids[2]) ? $scripts_ids[2] : '';
                $scripts_ids_tmp['mailru'] = isset($scripts_ids[3]) && !empty($scripts_ids[3]) ? $scripts_ids[3] : '';
                $scripts_ids_tmp['vk'] = isset($scripts_ids[4]) && !empty($scripts_ids[4]) ? $scripts_ids[4] : '';
                $scripts_ids_tmp['calltouch'] = isset($scripts_ids[5]) && !empty($scripts_ids[5]) ? $scripts_ids[5] : '';
                $scripts_ids_tmp['tiktok'] = isset($scripts_ids[6]) && !empty($scripts_ids[6]) ? $scripts_ids[6] : '';

                $cities['active'] = [
                    'value' => $city->alias,
                    'label' => $city->title_ru,
                    'dative' => $city->city_dative,
                    'opening_hours' => $opening_hours,
                    'coords' => $city->coordinates,
                    'jivosite_token' => $city->jivosite_token,
                    'begin_script' => '',//$city->open_script,
                    'scripts' => $scripts_ids_tmp,
                    'bitrix_responsible_id' => $city->bitrix_responsible_id
                ];

                foreach($contacts_list as $contact) {
                    if ($city->id == $contact->city_id) {
                        $phone_tmp = str_replace(' ', '', $contact->phone);
                        $phone_tmp = str_replace('+', '', $phone_tmp);

                        $phone_tmp2 = str_replace(' ', '', $contact->phone);

                        $phone = preg_replace(
                            '/^(\d)(\d{3})(\d{3})(\d{2})(\d{2})$/',
                            '+\1 (\2) \3-\4-\5',
                            (string) $phone_tmp
                        );

                        $contact_array = $contact->toArray();
                        $contact_array['phone'] = $phone_tmp2;
                        $contact_array['phone_format'] = $phone;
                        $cities['active'] = array_merge($cities['active'],$contact_array);
                        //$cities['active']['phone'] = $phone;
                    }
                }
            }
            $i++;
        }

        return $cities;
    }

    /**
     * Получаем гео данные
     *
     * return array
     */
    public function getGeoData(): array
    {
        return $this->geo_data;
    }

    /**
     * Устанавливаем cookie
     *
     * @param string $city Город
     * @return bool
     */
    public function setCookie(string $city): bool
    {

    }

   public function contacts()
    {
        return $this->belongsTo('App\Contacts', 'city_id');
    }
}
