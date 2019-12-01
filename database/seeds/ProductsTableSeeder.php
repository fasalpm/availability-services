<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class ProductsTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price = rand (400,1000);
        $color=array("red","green","blue","yellow","brown",'black');        
        for ($i=0; $i< 30; $i++)
        {  
            $product = new \App\Product();
            $product->name = 'Product_'.$i;
            $product->speed = rand (1,20);
            $product->price = rand (300,1000);
            $product->color = Arr::random($color);
            $product->save();
        }
    }
}
