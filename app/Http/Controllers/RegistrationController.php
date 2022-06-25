<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Registration;
use App\Models\UserImage;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Mail;


class RegistrationController extends Controller
{

    // Register a new user
    function register(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|max:191',
            'usertype' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'

        ]);

        $user = Registration::where('email', $request->email)->first();

        if ($user === null) {
            $user = new Registration;
            $token =  Str::random(32);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->usertype = $request->usertype;
            $user->semester = $request->semester;

            $user->password = Hash::make($request->password);
            $user->remember_token = $token;
            $user->save();


            //declaring session 
            $request->session()->put('name', $request->input('name'));
            $request->session()->put('email', $request->input('email'));
            $request->session()->put('usertype', $request->input('usertype'));
            $request->session()->put('semester', $request->input('semester'));
            return redirect('/Home');
        }
        return Redirect::back()->withErrors(['msg' => 'Email Already Exists']);
    }


    //login controller
    function login(Request $request)
    {

        $request->validate([
            'email' => 'required|max:191',
            'password' => 'required|max:191|min:6',
        ]);

        $token =  Str::random(32);
        $user = Registration::where('email', $request->email)->first();


        if (!$user || !Hash::check($request->password, $user->password)) {

            return  Redirect::back()->withInput()->withErrors(['msg' => 'Invalid Email of Password']);
        } else {
            $user->remember_token = $token;

            $request->session()->put('email', $request->email);

            //declaring session 
            $request->session()->put('name', $user->name);
            $request->session()->put('usertype', $user->usertype);
            $request->session()->put('semester', $user->semester);
            $request->session()->put('email', $request->input('email'));

            return redirect('/Home');
        }
    }


    // Send reset password link 
    public function forgetpass(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:registrations',
        ]);
        $token = Str::random(64);

        $user = Registration::where('email', $request->email)->first();
        $user->token =  $token;
        $user->save();

        // DB::table('registrations')->update([
        //     'token' => $token,
        // ]);


        Mail::send('/SendResetLinkPage', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->from('APNASTUDENTPORTAL@gmail.com', 'APNA STUDENT PORTAL');
            $message->subject('Reset Password');
        });
        return redirect()->back()->with('message', 'We have e-mailed your password reset link, It could take about 10 minutes');
    }




    //get token in  ResetPassword form
    public function   resetPasswordGetToken($token)
    {
        return view('ResetPassword', ['token' => $token]);
    }

    //Reset password by Token
    public function resetPasswordByToken(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        $user = Registration::where('email', $request->email)->first();

        if ($user->token == $request->token) {

            $user->password = Hash::make($request->password);
            $user->updated_at =   Carbon::now();
            $user->token = null;
            $user->save();

            return redirect()->back()->with('PassChangedByToken', 'Password Has Been Changed Successfully');
        } else {
            return redirect()->back()->with('PassChangedByTokenError', 'Invalid Token,Please Resend Password key Again.');
        }
    }



    //reset password
    public function resetpassBysession(Request $request)
    {
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
        ]);

        $token =  Str::random(32);
        $user = Registration::where('email', $request->email)->first();

        $user->password = Hash::make($request->password);
        $user->remember_token = $token;
        $user->updated_at =   Carbon::now();
        $user->save();
        return redirect()->back()->with('ok', 'Password Has Been Changed Successfully');
    }





    // Logout User
    public function logout(Request $request)
    {
        $request->session()->forget('name');
        $request->session()->forget('email');
        return redirect('/');
    }

    //redirect if already login: For Login '/'
    // public function checkEmailSession1(Request $request)
    // {
    //     if (session('email')) {
    //         return redirect('/Home');
    //     } else {
    //         return view('Login');
    //     }
    // }







    public function RegistrationImageView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/ChangePassword', ['UIfile' => $UIfile]);
    }
}
