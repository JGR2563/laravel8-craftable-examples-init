<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class ProductItem extends Component
{

    public $product;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($product)
    {
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product.product-item');
    }
}
