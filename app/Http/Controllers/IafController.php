<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iaf;
use App\Models\UserImage;



class IafController extends Controller
{


    public function IAFUpload(Request $req)
    {
        $req->validate([

            'email' => 'required',
            'fname' => 'required',
            'mobile' => 'required',
            'date_of_birth' => 'required',
            'date_of_admission' => 'required',
            'gender' => 'required',
            'session' => 'required',
            'session_type' => 'required',
        ]);

        $fileModel = new Iaf;
        $fileModel->email = $req->email;
        $fileModel->fname = $req->fname;
        $fileModel->mobile = $req->mobile;
        $fileModel->date_of_birth = $req->date_of_birth;
        $fileModel->date_of_admission = $req->date_of_admission;
        $fileModel->gender = $req->gender;
        $fileModel->session = $req->session;
        $fileModel->session_type = $req->session_type;
        $fileModel->save();
        $req->session()->put('IAF', " Your Data has been uploaded successfully");
        return redirect()->back();
    }


    public function IafView()
    {
        $IafView1 = Iaf::where('email', session('email'))->first();
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/INTELAVAILForm', ['IafView1' => $IafView1, 'UIfile' => $UIfile]);
    }
}
