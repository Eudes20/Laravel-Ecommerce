<?php

namespace App\Models;

use App\Scopes\Active;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = [];

    protected static function booted()
    {
        static::addGlobalScope(new Active);
    }

    public function main_category_info()
    {
        return $this->belongsTo('App\Models\MainCategory','main_category_id');
    }

    public function related_sub_categories()
    {
        return $this->hasMany('App\Models\SubCategory','category_id');
    }

    public function related_products()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
