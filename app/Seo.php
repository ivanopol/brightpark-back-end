<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'url',
        'title',
        'description',
        'cities',
    ];

    /**
     * Таблица, связанная с моделью.
     *
     * @var string
     */
    protected $table = 'seo';

    /**
     * Получить список городов для которых указаны мета-теги
     */
    public function cities()
    {
        return $this->hasMany('App\SeoCities');
    }
}
