<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/about',function(){
    $data1="About us - Online Store";
    $data2="About us";
    $description="This is an about page...";
    $author="Developed by: Verónica";
    return view('home.about')->with("title",$data1)
    ->with("subtitle",$data2)
    ->with("description",$description)
    ->with("author",$author);
})->name("home.about");

Route::get('/contact', function() {
    $title = "Contact Us - Online Store";
    $subtitle = "Contact Information";
    $email = "verito@gmail.com";
    $address = "Calle 123#56-20";
    $phone = "456-7890";
    return view('home.contact')->with("title", $title)
        ->with("subtitle", $subtitle)
        ->with("email", $email)
        ->with("address", $address)
        ->with("phone", $phone);
})->name("home.contact");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");
Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");
Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

Route::get('/product/success', function () {
    return view('product.success');
})->name('product.success');