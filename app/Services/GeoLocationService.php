<?php


namespace App\Services;

use Illuminate\Support\Facades\DB;
use Torann\GeoIP\Facades\GeoIP;

/**
 * @property GeoIP geo_ip
 */
class GeoLocationService
{
    public function __construct()
    {
    }

    public function get_user_city_by_ip(string $ip_address) : array
    {
        $title_en = geoip($ip=null)->getLocation($ip_address)->getAttribute('city');

        $city = (array) DB::selectOne("select * from cities left join contacts c on c.city_id = cities.id where alias = :title_en", ['title_en'=>$title_en]);

        if($city == null){
            return (array) DB::selectOne("select * from cities left join contacts c on c.city_id = cities.id where alias = :title_en", ['title_en'=>'Perm']);
        }

        return $city ? $city : [];
    }

    public function get_city_by_ip(string $ip_address): string
    {
        $location = geoip($ip=null)->getLocation($ip_address)->getAttribute('city');
        return $this->check_city($location);
    }

    public function check_city($location) {
        $city = (array) DB::selectOne("select `alias` from cities left join contacts c on c.city_id = cities.id where alias = :title_en", ['title_en'=>strtolower($location)]);
        return isset($city['alias']) ? $city['alias'] : '';
    }
}
