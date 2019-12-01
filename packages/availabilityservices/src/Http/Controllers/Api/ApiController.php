<?php

namespace Salesdock\Availabilityservices\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ApiController extends Controller
{
    public function productList()
    {       
        $products = Product::where('speed', '>', 10)->where('color', '!=', 'black')->where('price', '<', 500)->get();
        return response()->json(compact('products'), 200);      

    }

}
