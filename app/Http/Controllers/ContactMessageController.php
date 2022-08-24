<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    //
    public function create(){
        return view('admin.post');
    }
    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'subject' => ['required','min:3'],
            'message' => ['required','min:10'],
        ]);
        Mail::send('admin.email',[
            'msg' => $request->message],function($mail) use($request){
                $mail->from('superadministrator@app.com');
                $mail->to($request->email)->subject($request->subject);
        });

        return redirect()->back()->with('success','Thank you for your message');
    }
}
