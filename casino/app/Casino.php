<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casino  extends Model {

	protected $table = 'casino';

    protected $fillable = [
        'id',
        'name',
        'post_code',
        'house_number',
        'address',
        'city',
        'longitude',
        'latitude',
    ];


}