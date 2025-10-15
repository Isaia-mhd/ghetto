<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function Pest\Laravel\json;

class Property extends Model
{
    protected $guarded = [];

    protected $casts = [
        "images" => 'array',
        "equipments" => 'array'
    ];
}
