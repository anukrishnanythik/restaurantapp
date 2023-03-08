<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class homeController extends Controller
{
    public function index(){
        $food= Food::all();
        return view('user.home',compact('food'));
        }

        public function redirects()
        {
        $food= Food::all();
          if(Auth::id())
         {
          if(Auth::user()->usertype=='0')
          {
        return view('user.home',compact('food'));
          }
          else{
            return view('admin.home');
          }
        }
          else{
            return redirect()->back();
          }
    }
}
