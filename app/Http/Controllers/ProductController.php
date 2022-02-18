<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

class ProductController extends Controller
{

    public function index()
    {
       
        $products = Product::orderby('product_id', 'desc')->latest()->take(4)->get();
        

        return response()->json($products);    
    }


    


    // public function store(Request $request)
    // {
    //     $this->validate($request, [
           
    //         'product_quantity' => 'required',
          
    //         'product_price' => 'required',
    //         'product_name' => 'required'
           
          
          
    //     ]);
       
    //     $date = date('Ymd');
    //     $product = new Product;
       
       
        
    //     $max_id = Product::max('product_id');
       
    //     $product->product_code = $date.'-'.$code;
    //     $product->product_name = $request->product_name;
    //     $product->product_price = $request->product_price;
    //     $product->product_quantity = $request->product_quantity;
    //     // $product->image_file = "image_file";
        
    //     $product->del_flg =0;
    //     $product->save();
    //     return response()->json(
           
    //         ['success'=> true,
    //         'message'=>'category Successfully!'
    //         ]
    //     );
     
    // }

    
}
