<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Registration;
use App\Models\UserImage;



class ContactController extends Controller
{
    public function CUpload(Request $req)
    {
        $req->validate([
            'fathername' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'dateofberth' => 'required',
            'homeaddress' => 'required',
            'gender' => 'required',
            'message' => 'required'
        ]);

        $check = Contact::where('email', '=', $req->email)->first();
        if ($check) {

            $check->fathername = $req->fathername;
            $check->telephone = $req->telephone;
            $check->email = $req->email;
            $check->dateofberth = $req->dateofberth;
            $check->homeaddress = $req->homeaddress;
            $check->gender = $req->gender;
            $check->message = $req->message;
            $check->save();
            $req->session()->put('SuccessC', 'Contact Info updated successfully');
            return redirect()->back();
        } else {
            $fileModel = new Contact;
            $fileModel->fathername = $req->fathername;
            $fileModel->telephone = $req->telephone;
            $fileModel->email = $req->email;
            $fileModel->dateofberth = $req->dateofberth;
            $fileModel->homeaddress = $req->homeaddress;
            $fileModel->gender = $req->gender;
            $fileModel->message = $req->message;
            $fileModel->save();
            $req->session()->put('SuccessC', 'Contact Info Uploaded successfully');
            return redirect()->back();
        }
    }


    public function ContactView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        $Cfile  = Contact::where('email', session('email'))->first();
        return view('/Home/Contact')->with(['Cfile' => $Cfile, 'UIfile' => $UIfile]);
    }
}