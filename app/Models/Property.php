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

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function favoredBy()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
