<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $guarded = ['id'];

    public function property()
    {
        return $this->BelongsTo(Property::class);
    }
    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
