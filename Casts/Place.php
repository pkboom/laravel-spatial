<?php

namespace App\Casts;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Place implements CastsAttributes
{
    public function get($model, $key, $value, $attributes)
    {
        return DB::select('select X(:placeA) as x, Y(:placeB) as y', [
            'placeA' => $value,
            'placeB' => $value,
        ]);
    }

    public function set($model, $key, $value, $attributes)
    {
        return DB::raw("(GeomFromText('POINT({$value[0]} {$value[1]})'))");
    }
}
