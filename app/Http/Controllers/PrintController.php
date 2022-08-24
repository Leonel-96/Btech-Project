<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class PrintController extends Controller
{
    //
    public function index(){
        return view('viewPrint');
    }
    public function printPreview(){
        $product = Product::all();
        return view('printPreview',compact('product'));
    }
}
