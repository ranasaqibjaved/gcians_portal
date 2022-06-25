<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ned;
use App\Models\UserImage;



class NedController extends Controller
{
    //     'name',
    //     'fname',
    //     'mobile',
    //     'date_of_birth',    
    //     'date_of_admission',
    //     'gender',
    //     'opinion',

    public function NedUpload(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'fname' => 'required',
            'mobile' => 'required',
            'date_of_birth' => 'required',
            'date_of_admission' => 'required',
            'gender' => 'required',
            'opinion' => 'required',
        ]);

        $fileModel = new Ned;

        $fileModel->name = $req->name;
        $fileModel->email = $req->email;
        $fileModel->fname = $req->fname;
        $fileModel->mobile = $req->mobile;
        $fileModel->date_of_birth = $req->date_of_birth;
        $fileModel->date_of_admission = $req->date_of_admission;
        $fileModel->gender = $req->gender;
        $fileModel->opinion = $req->opinion;

        $fileModel->save();


        $req->session()->put('Ned', " Your Data has been uploaded successfully");
        return redirect()->back();
    }

    public function NedView()
    {
        $NedView1 = Ned::where('email', session('email'))->first();
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/NationalEnrollDrive', ['NedView1' => $NedView1, 'UIfile' => $UIfile]);
    }
}
