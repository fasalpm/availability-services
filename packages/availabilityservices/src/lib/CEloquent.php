<?php
namespace Salesdock\Availabilityservices\lib;

use Salesdock\Availabilityservices\lib\CInterface;
use App\Product;


class CEloquent implements CInterface 
{
    protected $products;    
    public function getCProduct($products_list)
    {
        // $products = Product::where('price', '<', 500)->get();       
        $products = $products_list;
        foreach ($products as $key=>$product){
            if($product->price >= 500){
                unset($products[$key]);
            }
        }
        $products = $products->filter()->values();
        return $products;
    }
}