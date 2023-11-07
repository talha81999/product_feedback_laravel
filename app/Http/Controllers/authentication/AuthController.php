<?php

namespace App\Http\Controllers\authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Http\Controllers\authentication\Date;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('authentication.signin');
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

    public function showAddUserForm ()
    {
        return view('authentication.signup');
    }

    // register new user
    public function registerUser(Request $request)
    {
        // server form validation
        $request->validate(
            [
                'user_first_name'        =>     'required',
                'user_last_name'         =>     'required',
                'user_email'             =>     'required|email|unique:tbl_user,user_email',
                'user_phone'             =>     'required',
                'user_password'          =>     'required',
                'user_gender'            =>     'required',
                'user_address'           =>     'required',
                'user_dob'               =>     'required',
            ]
        );

        // generate username
        $randomNumber = random_int(1, 9999);
        $userName = 'user'.$randomNumber;


        // getting server values
        $user                               =       new UserModel();
        $user->user_name                    =       $userName;
        $user->user_first_name              =       $request['user_first_name'];
        $user->user_last_name               =       $request['user_last_name'];
        $user->user_email                   =       $request['user_email'];
        $user->user_phone                   =       $request['user_phone'];
        $user->user_gender                  =       $request['user_gender'];
        $user->user_dob                     =       $request['user_dob'];
        $user->user_address                 =       $request['user_address'];
        $user->user_created_by              =       session('data')['userId'];
        $user->user_updated_by              =       session('data')['userId'];
        $user->created_at                   =       Date::now();
        $user->updated_at                   =       Date::now();



        // send email to user
        // sendEmail($user->user_email, [
        //     'name'      =>  'user registered',
        //     'message'   =>  'your account has been created!',
        //     'password'  =>  '1234',
        // ]);

        // save user
        $user->save();

        // update tbl_teams
        if($user->id)
        {
            $teamLeadId = DB::table('tbl_teams')
            ->where('id', $request['user_team'])
            ->update(['teamlead_id' => $user->id]);
        }
        else{}
        return redirect('/admin/viewuser')->with('success_message','User added!');
    }


}
