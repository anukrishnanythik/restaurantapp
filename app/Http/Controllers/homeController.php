<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chef;

class homeController extends Controller
{
    public function index(){
        $food= Food::all();
        $chef= Chef::all();
        return view('user.home',compact('food','chef'));
        }

        public function redirects()
        {
            $chef= Chef::all();
            $food= Food::all();
          if(Auth::id())
         {
          if(Auth::user()->usertype=='0')
          {
            return view('user.home',compact('food','chef'));
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
