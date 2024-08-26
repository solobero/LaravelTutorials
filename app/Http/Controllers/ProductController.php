<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Product;

class ProductController extends Controller
{
    //public static $products = [
    //     ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>299.99],
    //     ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>999.99],
    //     ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>35.00],
    //     ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>120.00],
    //     ["id"=>"5", "name"=>"", "description"=>"Best Glasses", "price"=>null]
    // ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData["title"] = "Create product";

        return view('product.create')->with("viewData",$viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required|numeric|gt:0"
        ]);

        //dd($request->all());
        //here will be the code to call the model and save it to the database
        // return redirect()->route('product.success')->with('success', 'Product created');
        
        Product::create($request->only(["name","price"]));
        return back();
    }
}
