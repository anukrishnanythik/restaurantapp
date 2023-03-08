<?php

namespace App\Http\Controllers;
use App\Models\Food;
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
       public function showfoodmenu(){
        $food= Food::all();
        return view('admin.showfoodmenu',compact('food'));
       }

       public function addfoodmenu(){
        return view('admin.addfoodmenu');
       }

    public function uploadfoodmenu(Request $request){
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

        public function editfoodmenu($id){
            $food= Food::findOrFail(decrypt($id));
            return view('admin.editfoodmenu',compact('food'));
           }

            public function deletefoodmenu($id){
                $food= Food::findOrFail(decrypt($id));
                $food->delete();
                return redirect()->back();
           }


           public function updatefoodmenu(Request $request, $id)
             {
               $food= Food::findOrFail(decrypt($id));
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

          $food-> update($input);


            return redirect()->route('showfoodmenu')->with('message',"menu updated succesfully!!");
             }
            }
