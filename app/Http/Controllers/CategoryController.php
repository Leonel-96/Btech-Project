<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        $cat = Category::orderBy('id')->paginate('10');
        return view('admin/category',compact('cat'));

    }
    public function create(){
        return view('admin.category.add-category');
    }
    public function store(Request $request){
        $data = array();

        $data['name'] = $request->name;
        $cat= DB::table('categories')->insert($data);

        return redirect()->route('category.index')->with('success','Successfully Created');
    }
    public function edit($id){

        $cat = Category::find($id);
        return view('admin.category.edit-category',compact('cat'));
    }
    public function update(Request $request,$id){
        $cat = Category::find($id);
        $cat->name = $request->get('name');

        $cat->save();
        return redirect()->route('category.index')->with('success','Successfully Updated');
    }
    public function destroy(){
        
    }


}
