<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Chef;


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
//Food
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

             //reservation
             public function uploadreservation(Request $request){
                $input = $request->all();
                $request->validate([
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'guest' => 'required',
                    'date' => 'required',
                    'time' => 'required',
                    'message' => 'required',
                ]);
                Reservation::create($input);
                return redirect()->back();
                }

                public function showreservation(){
                    $reservation= Reservation::all();
                    return view('admin.showreservation',compact('reservation'));
                   }

                   //chef

                   public function showchef(){
                    $chef= Chef::all();
                    return view('admin.showchef',compact('chef'));
                   }

                   public function addchef(){
                    return view('admin.addchef');
                   }

                public function uploadchef(Request $request){
                    $input = $request->all();
                    $request->validate([
                        'name' => 'required',
                        'speciality' => 'required',
                        'image' => 'required',
                    ]);
                    if(request()->hasFile('image'))
                    {
                        $extension =request('image')->extension();
                        $file ='user_pic'. time().'.'.$extension;
                        request('image') ->storeAs('image',$file);
                        $input['image'] =$file;
                    }
                    Chef::create($input);
                    return redirect()->route('showchef')->with('message',"chef added succesfully!!");
                    }

                        public function editchef($id){
                            $chef= Chef::findOrFail(decrypt($id));
                            return view('admin.editchef',compact('chef'));
                           }

                            public function deletechef($id){
                                $chef= Chef::findOrFail(decrypt($id));
                                $chef->delete();
                                return redirect()->back();
                           }

                           public function updatechef(Request $request, $id)
                             {
                               $chef= Chef::findOrFail(decrypt($id));
                                $input = $request->all();

                              $request->validate([
                                'name' => 'required',
                                'speciality' => 'required',
                                'image' => 'required',
                            ]);
                           if(request()->hasFile('image'))
                           {
                           $extension =request('image')->extension();
                           $file ='user_pic'. time().'.'.$extension;
                           request('image') ->storeAs('image',$file);
                           $input['image'] =$file;
                           }

                          $chef-> update($input);
                        return redirect()->route('showchef')->with('message',"chef updated succesfully!!");
                             }


            }
