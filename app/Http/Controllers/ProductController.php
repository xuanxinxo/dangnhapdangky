<?php

namespace App\Http\Controllers;
use App\Models\T_lazada;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getProducts()								
    {								
    $products =T_lazada::all();								
    return response()->json($products);								
    }								
    
}
