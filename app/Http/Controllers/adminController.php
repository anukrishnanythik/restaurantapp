<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function user(){
        $user= User::all();
        return view('admin.user',compact('user'));
       }

       public function deleteuser($id){
        $user= User::findOrFail(decrypt($id));
        $user->delete();
        return redirect()->back();
       }

}
