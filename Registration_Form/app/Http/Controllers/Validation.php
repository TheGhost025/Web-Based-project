<?php

namespace App\Http\Controllers;
use Mailgun\Mailgun;

use Illuminate\Support\Facades\Mail;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mail\TestMail;



class Validation extends Controller
{

    function index(){
        return view('Pages.index');
    }


    public function submit(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'user_name' => 'required|unique:new_users',
            'birthdate' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]+$/',
            ],
            'conf_pass' => 'required|min:8|same:password',
            'image' => '',
            'email' => 'required|email|unique:new_users',
        ]);

        if(! $validator->passes()){
            if($request->ajax()){
                return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
            }else{
                return back()->withErrors($validator);
            }
        }else{
            $values=[
            'full_name' => $request->input('name'),
            'user_name' => $request->input('user_name'),
            'birthdate' => $request->input('birthdate'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'password' => $request->input('password'),
            'confirm_password' => $request->input('conf_pass'),
            'user_image' => $request->input('image'),
            'email' => $request->input('email'),
            ];
            $query = DB::table('new_users')->insert($values);
            $user = (object)$values;
            Mail::to('ammodi9@gmail.com')->send(new TestMail($user));
            if($request->ajax()){
                return response()->json(['status'=>1,'msg'=>__('MYlang.register_success')]);
            }else{
                return redirect()->back()->with('success', __('MYlang.register_success'));
            }
        }
    }
}
