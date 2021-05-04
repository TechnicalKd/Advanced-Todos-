<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Storage;

class TestController extends Controller
{
    public function index(){

    $data = [

    	'name' => 'kiran',
    	'email' => 'kiran@gmail.com',
    	'password' => 'Kiran@123'

    ];

    User::create($data);

    return "Data inserted Successfully";

    }

    public function storeImage(Request $request){
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            //Delete the  User Avatar
            if(Auth::user()->avatar){
                Storage::delete('/public/images/'.Auth::user()->avatar);
             }
                //
            $request->avatar->storeAs('images',$filename,'public');
            DB::table('users')->where('id',1)->update([
        'avatar' => $filename
    ]);
}
        $request->session()->flash('success','File Uploaded Successfully');
         return redirect()->back();


     }



}
