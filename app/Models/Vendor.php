<?php

namespace App\Models;

use App\Scopes\Active;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected static function booted()
    {
        static::addGlobalScope(new Active);
    }
    protected $guarded = [];
}
