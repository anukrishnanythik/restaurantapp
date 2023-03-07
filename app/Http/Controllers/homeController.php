<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class homeController extends Controller
{
    public function index(){


         return view('user.home');

        }
        public function redirects()
        {

         if(Auth::id())
         {
          if(Auth::user()->usertype=='0')
          {

            return view('user.home');
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
