<?php
namespace Salesdock\Availabilityservices\lib;

use Salesdock\Availabilityservices\lib\AInterface;
use App\Product; 


class AEloquent implements AInterface 
{
    protected $products;    
    public function getAProduct($products_list)
    {
        // $products = Product::where('speed', '>', 10)->get();
        $products = $products_list;
        foreach ($products as $key=>$product){
            if($product->speed <= 10){
                unset($products[$key]);
            }
        }
        $products = $products->filter()->values();
        return $products;
    }
}