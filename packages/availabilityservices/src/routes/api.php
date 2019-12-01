<?php

use Illuminate\Http\Request;

Route::group(['namespace'=>'Salesdock\Availabilityservices\Http\Controllers\Api'],function(){
    Route::get('/product-list','ApiController@productList');
});

