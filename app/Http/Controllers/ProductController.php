<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
// use Salesdock\Availabilityservices\lib\AInterface ;
use ServiceA;
use ServiceB;
use ServiceC;

class ProductController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index(ServiceA $a)
    {
        $products = Product::get();
        return view('product.index',compact('products'));
    }
    public function productsA(ServiceA $obj)
    {
        $products_list = Product::get();
        $products = $obj->getAProduct($products_list);
        return view('product.service_a',compact('products'));
    }
    public function productsB(ServiceB $obj)
    {
        $products_list = Product::get();
        $products = $obj->getBProduct($products_list);
        return view('product.service_b',compact('products'));
    }
    public function productsC(ServiceC $obj)
    {
        $products_list = Product::get();
        $products = $obj->getCProduct($products_list);
        return view('product.service_c',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
