<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Validation extends Controller
{

    public function register(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:500',
            'username' => 'required|string|max:500',
            'birthdate' => 'required|string|max:500',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'password' => 'required|string|min:8|confirmed',
            'conf_pass' => 'required|string|min:8|confirmed',
            'image' => 'required|string|max:5000',
            'email' => 'required|string|max:500',
        ]);
        $credentials =$request ->only('name','username','birthdate','phone','address','password','conf_pass','image','email');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('/'));
        }
        return redirect(route('/'));
    }



        protected function create(array $data)
        {
            $this->validator($data)->validate();

            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }

}


/**<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


function registValid(Request $request){
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'birthdate'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'password'=>'required',
            'conf_pass'=>'required',
            'image'=>'required',
            'email'=>'required',
        ]);


        $credentials =$request ->only('name','username','birthdate','phone','address','password','conf_pass','image','email',);
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('valid'));
        }
        return redirect(route('Pages.index'))->with("error","Enter valid info plz...");
    }
 */
