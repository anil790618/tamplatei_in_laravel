<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        return view("frontend.contact");
    }

    public function upload(Request $request){
        // echo"<pre>";
        // print_r($request->all());
        // echo $request->file('upload_image')->store('uploads');
        $fileName = time().".ws.".$request->file('upload_image')->getClientOriginalExtension();
        // echo $fileName;
        // die;
        echo $request->file('upload_image')->storeAs('uploads',$fileName);
        // echo $request->file('upload_image')->storeAs('public/uploads',$fileName);

    }
}
