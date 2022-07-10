<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Brand;

class ProductsController extends Controller
{
    /**
    *
    *
    * @return \Illuminate\Http\Response
    */

    public function index(){
        $products = Product::join('brands', 'products.brand_id', '=', 'brands.id')
        ->select('brands.name as brandName', 'products.id', 'products.name', 'products.description', 'products.price')
        ->filter(request(['search', 'select']))
        ->get();

        $brands = Brand::get();

        return view('listing', ['products' => $products, 'brands' => $brands]);
    }

    public function show($id) {
        $product = Product::where('id', $id)->get();
        return view('product', [
            'product' => $product
        ]);
    }
}
