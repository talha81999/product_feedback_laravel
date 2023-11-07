<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('authentication.signin');
    }
    public function showAddUserForm ()
    {
        return view('authentication.signup');
    }

    public function loginUser(Request $request)
    {
        $request->validate(
            [
                'email'        =>     'required|email|unique:users',
                'password'     =>     'required',
            ]
        );

        $user = UserModel::where('user_email', '=', $request->email)->first();
        if($user)
        {
            if($user->user_password == $request->password)
                {
                    if($user->user_type == 0)
                    {
                        // setSession($user);
                        // return redirect('admin-dashboard');
                        echo 'admin';
                    }
                    elseif ($user->user_type == 1) {
                        # code...
                    }
                    elseif ($user->user_type == 2) {
                        // setSession($user);
                        // return redirect('user-dashboard');
                        echo 'user';
                    }
                    else{
                        return  'This user does not belong to any user role!';
                    }

                }
                else{
                    return back()->with('fail', 'Password not matches!');
                }
        } else{
            return back()->with('fail', 'This email is not registered!');
        }
    }
}
