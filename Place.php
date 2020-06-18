<?php

namespace App;

use App\Casts\Place as CastsPlace;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $guarded = [];

    protected $casts = [
        'location' => CastsPlace::class,
    ];
}
