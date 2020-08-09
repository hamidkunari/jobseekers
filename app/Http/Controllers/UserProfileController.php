<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Profile;

class UserProfileController extends Controller
{
    public function index(){
    	return view('profile.index');
    }


    public function store(Request $request){
    	$this->validate($request,[

            'address'=>'required',
            'bio'=>'required|min:10',
            'experience'=>'required|min:20',
            'phone_number'=>'required|min:10|numeric'
        ]);

    	$user_id = auth()->user()->id;
   		
      Profile::where('user_id',$user_id)->update([
        'address'=>request('address'),
   			'experience'=>request('experience'),
   			'bio'=>request('bio'),
   			'phone_number'=>request('phone_number')
            
   		]);
   		return redirect()->back()->with('message','Profile Sucessfully Updated!');
    }
//coverletter function which will upload file
    public function coverletter(Request $request){
        $this->validate($request,[
            'cover_letter'=>'required|mimes:pdf,doc,docx|max:20000'
        ]);
        $user_id = auth()->user()->id;
        $cover = $request->file('cover_letter')->store('public/files');
            Profile::where('user_id',$user_id)->update([
              'cover_letter'=>$cover
            ]);
            return redirect()->back()->with('message','Cover letter Sucessfully Updated!');

   }

   //resume function which will upload file
    public function resume(Request $request){
        $this->validate($request,[
            'resume'=>'required|mimes:pdf,doc,docx|max:20000'
        ]);
        $user_id = auth()->user()->id;
        $cover = $request->file('resume')->store('public/files');
            Profile::where('user_id',$user_id)->update([
              'resume'=>$cover
            ]);
            return redirect()->back()->with('message','Resume letter Sucessfully Updated!');

   }

   //update profile picture method

    public function avatar(Request $request){
        $this->validate($request,[
            'avatar'=>'required|mimes:png,jpeg,jpg|max:20000'
        ]);
        $user_id = auth()->user()->id;
        if($request->hasfile('avatar')){
            $file = $request->file('avatar');
            $ext =  $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/avatar/',$filename);
            Profile::where('user_id',$user_id)->update([
              'avatar'=>$filename
            ]);
        return redirect()->back()->with('message','Profile picture Sucessfully Updated!');
        }
 
   }




}
