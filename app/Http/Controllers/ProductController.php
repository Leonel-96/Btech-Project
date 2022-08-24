<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;
use App\Subcategory;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::orderBy('name')->paginate(10);
        return view('admin.product-manager',compact('product'));
    }
    public function create(){
        $cat = Category::all();
        $subcat = Subcategory::all();
        return view('admin.products.add-product',compact('cat','subcat'));
    }
    public function store(Request $request){

        $data = array();

        $data['cat_id'] = $request->cat_id;
        $data['subcat_id'] = $request->subcat_id;
        $data['name'] = $request->name;
        $data['manufacturer'] = $request->manufacturer;
        $data['details'] = $request->details;
        $data['price'] = $request->price;
        $image = $request->file('image');
        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/style/img/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            $data['image'] = $image_url;

            $product= DB::table('products')->insert($data);

            return redirect()->route('product.index')->with('success','Product successfully added');


        }
  
    }
    public function edit($id){
        $cat = Category::all();
        $subcat = Subcategory::all();
        $product = Product::find($id);
        return view('admin.products.edit-product',compact('product','cat','subcat'));
    }
    public function update(Request $request,$id){


       $product = Product::find($id);

       $product->name = $request->input('name');
       $product->manufacturer = $request->input('manufacturer');
       $product->details = $request->input('details');
       $product->cat_id = $request->input('cat_id');
       $product->subcat_id = $request->input('subcat_id');
       $product->price = $request->get('price');
       
      
       if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = date('dmy_H_s_i');
        $ext = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $upload_path = 'public/style/img/';
        $image_url = $upload_path.$image_full_name;
        $success = $image->move($upload_path,$image_full_name);

        $product['image'] = $image_url;
      
    }
    $product->save();
    return redirect()->route('product.index')->with('success','Data Updated');
      
    }

    public function destroy($id){
        $product = DB::table('products')->where('id',$id)->delete();
        return redirect()->route('product.index')->with('success','Successfully delete');
    }

    public function pdf(){
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Hello World</h1>');
        return $pdf->stream();
    }
    public function convert_product_to_html(){
        $product = $this->index();
        $output =  "";
    }

    public function get_cause_against_category($id){
        $data = DB::table('products')->whereRaw('cat_id IN('.$id.')')->get();

        echo json_encode($data);
    }
    
}
