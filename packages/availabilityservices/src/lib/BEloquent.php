<?php
namespace Salesdock\Availabilityservices\lib;

use Salesdock\Availabilityservices\lib\BInterface;
use App\Product; 


class BEloquent implements BInterface 
{
    protected $products;    
    public function getBProduct($products_list)
    {
        // $products = Product::where('color', '!=', 'black')->get();      
        $products = $products_list;
        foreach ($products as $key=>$product){
            if($product->color == 'black'){
                unset($products[$key]);
            }
        }
        $products = $products->filter()->values();
        return $products;
    }
    
}