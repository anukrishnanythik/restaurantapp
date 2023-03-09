<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;

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
            $user_id=Auth::id();
             $count=Cart::where('user_id',$user_id)->count();
            return view('user.home',compact('food','chef','count'));
          }
          else{
            return view('admin.home');
          }
        }
          else{
            return redirect()->back();
          }
    }

    public function addcart(Request $request,$id){
        if(Auth::id())
        {
       $user_id=Auth::id();
       $food_id=decrypt($id);
       $quantity=$request->quantity;

       Cart::create([
        'user_id' => $user_id,
        'food_id' => $food_id,
        'quantity' => $quantity
       ]);
       return redirect()->back();
        }
        else{
            return redirect()->route('login');
        }
        }

    public function showcart(Request $request,$id){
       $user_id=Auth::id();
    $data2= Cart::with('cartfood')->with('cartuser')->where('user_id',$user_id)->get();
        $chef= Chef::all();

        $user_id=Auth::id();
        $count=Cart::where('user_id',$user_id)->count();
       return view('user.showcart',compact('count','data2'));

    }
    public function deleteorder($id){
        $cart= Cart::findOrFail(decrypt($id));
        $cart->delete();
        return redirect()->back();
   }

   public function orderdetails(Request $request){
    $input = $request->all();
    $request->validate([
        'title' => 'required',
        'price' => 'required',
        'image' => 'required',
        'description' => 'required',
    ]);
    if(request()->hasFile('image'))
    {
        $extension =request('image')->extension();
        $file ='user_pic'. time().'.'.$extension;
        request('image') ->storeAs('image',$file);
        $input['image'] =$file;
    }
    Food::create($input);
    return redirect()->route('showfoodmenu')->with('message',"menu added succesfully!!");
    }

}
