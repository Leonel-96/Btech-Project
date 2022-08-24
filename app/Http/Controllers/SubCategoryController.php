<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Subcategory;
use App\Category;

use function Ramsey\Uuid\v1;

class SubCategoryController extends Controller
{
    //
    public function index(){
        $subcat = Subcategory::orderBy('name')->paginate('10');
        return view('admin/subcategory',compact('subcat'));
    }
    public function create(){
        $cat = Category::all();
        return view('admin.subcategory.add-subcategory',compact('cat'));
    }
    public function store(Request $request){
       $data = array();

       $data['name'] = $request->name;
       $data['cat_id'] = $request->cat_id;
       $data['details'] = $request->details;

       $subcat = DB::table('subcategories')->insert($data);
        return redirect()->route('subcategory.index')->with('success','Successfully Created');
    }
    public function edit($id){
        $cat = Category::all();
        $subcat = Subcategory::find($id);
        return view('admin.subcategory.edit-subcategory',compact('subcat','cat'));
    }
    public function update(Request $request,$id){
        $subcat = Subcategory::find($id);
        $subcat->name = $request->input('name');
        $subcat->cat_id = $request->input('cat_id');
        $subcat->details = $request->input('details');

        $subcat->save();
        return redirect()->route('subcategory.index')->with('success','Sucessfully Updated');
    }
    public function destroy(){

    }
}
