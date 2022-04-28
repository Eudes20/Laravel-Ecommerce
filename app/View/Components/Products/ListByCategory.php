<?php

namespace App\View\Components\Products;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\Component;

class ListByCategory extends Component
{

    /**
     * The product collection
     */
    protected string $category;

    /**
     * query all category products
     */
    public function products()
    {
        $products = Product::active()->whereHas('category', function(Builder $query){
            $query->where('name', $this->category);
        })->take(12);
        
        return $products->get();
    }

    /**
     * Create a new component instance.
     *
     * @param string $slug
     * @return void
     */
    public function __construct($slug)
    {
        $this->category = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.products.list-by-category');
    }
}
