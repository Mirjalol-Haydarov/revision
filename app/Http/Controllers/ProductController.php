<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    //index
   public function index(){
     $products   = Product::all();
     return response()->json(['products' => $products]);
   }
    //show
}
