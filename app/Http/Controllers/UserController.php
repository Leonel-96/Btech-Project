<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role:user');
    }

    public function index(){
        return view('customer.dashboard');
    }
    public function getPost(){
        return view('customer.post');
    }
    public function getProfile(){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);
        return view('customer.profile',compact('user'));
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
        return redirect()->back()->with('success','Successfully Updated');
    }
    public function getOrder(){
        return view('customer.orders');
    }
}
