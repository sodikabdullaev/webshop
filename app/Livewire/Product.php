<?php

namespace App\Livewire;

use App\Actions\Webshop\AddProductVariantToCart;
use App\Models\Product as ModelsProduct;
use Livewire\Component;

class Product extends Component
{
    public $productId;
    public $variant;
    public $rules = [
        'variant' => ['required', 'exists:App\Models\ProductVariant,id']
    ];
    public function mount()
    {
        $this->variant = $this->product->variants()->value('id');
        return view('livewire.product');
    }
    public function addToCart(AddProductVariantToCart $cart)
    {
        $this->validate();
        $cart->add(
            variantId: $this->variant
        );
    }
    public function getProductProperty()
    {
        return ModelsProduct::findOrFail($this->productId);
    }
    public function render()
    {
        return view('livewire.product');
    }
}
