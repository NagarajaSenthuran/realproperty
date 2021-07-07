<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        $profile = User::where('email' , '=', $email)->first();
        return view('backendpages.profile', compact('profile'));
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'min:1'],
            'address' => ['required', 'string', 'min:1'],
            'image' => ['nullable'],
        ]);

        $email = Auth::user()->email;

        if(isset($request['image']))
        {
            $image = $request->file('image');

            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(700,400)->save('images/agent/'.$name_gen);
      
            $last_img = 'images/agent/'.$name_gen;
        }
        else{
            $last_img = 'boxroomstyle/images/avatar.png';
        }
        
        DB::table('users')->where('email', '=', $email)
            ->update(['name' => $request->get('name'),
                      'email' => $request->get('email'),
                      'phone' => $request->get('phone'),
                      'address'=> $request->get('address'),
                      'image' => $last_img]);

        return Redirect()->back()->with('success','profile updating successfully');
    }
}
