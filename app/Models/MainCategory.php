<?php

namespace App\Models;

use App\Scopes\Active;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    use HasFactory;
    
    protected $table = 'main_categories';
    protected $guarded = [];

    protected static function booted()
    {
        static::addGlobalScope(new Active);
    }

    public function related_categories_id_and_name()
    {
        return $this->hasMany('App\Models\Category','main_category_id')->select('name','id');
    }

    public function related_categories()
    {
        return $this->hasMany('App\Models\Category','main_category_id')->with('related_sub_categories')->withCount('related_products');
    }

    public function related_sub_categories()
    {
        return $this->hasManyThrough(SubCategory::class, Category::class);
    }

    public function related_products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function related_products_according_to_size()
    {
        return $this->belongsToMany('App\Models\Product')->with('filter_by_size');
    }
}
