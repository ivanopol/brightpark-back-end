<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtmLabel extends Model
{
    protected $fillable = [
        'bp_uid',
        'user_ip',
        'date',
        'utm_medium',
        'utm_source',
        'utm_campaign',
        'utm_term',
        'block',
        'source',
        'yclid',
    ];

    protected $table = 'utm_labels';

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);
    }
}
