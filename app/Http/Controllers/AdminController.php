<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Subcategory;
use App\Category;
use App\Product;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }
    public function index(){
        return view('admin.dashboard');
    }
    public function getProfile(){
       if(Auth::user()){
        $user = User::find(Auth::user()->id);
        return view('admin.profile',compact('user'));
       }
    }
    public function postProfile(Request $request){

        $user = User::find(Auth::user()->id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->telephone = $request->input('telephone');
        $user->address = $request->input('address');

        $user->save();
        return redirect()->back()->with('success','Successfully updated');

    }
    public function getProduct(){
        $product = Product::orderBy('name')->paginate(10);
        return view('admin.product-manager',compact('product'));
    }
    public function getCategory(){
        $cat = Category::orderBy('id')->paginate('10');
        return view('admin/category',compact('cat'));
    }
    public function getCustomer(){
        return view('admin.customers');
    }
    public function getSubCategory(){
        $subcat = Subcategory::orderBy('id')->paginate('10');
      return view('admin.subcategory',compact('subcat'));  
    }
    public function getPost(){
        return view('admin.post');
    }
    public function getOrder(){
        return view('admin.orders');
    }
    public function getSalesHistory(){
        return view('admin.sales-history');
    }
}
