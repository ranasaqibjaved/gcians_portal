<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ghp;
use App\Models\UserImage;



class GhpController extends Controller
{
    public function GHPUpload(Request $req)
    {
        $req->validate([
            // 'name'=>'required',
            // 'fname'=>'required',
            // 'age'=>'required',
            // 'gender'=>'required',
            // 'cnic'=>'required',
            // 'mobile'=>'required',
            // 'email'=>'required',
            // 'blood_group'=>'required',
            // 'temperature'=>'required',
            // 'address'=>'required',
            // 'height'=>'required',
            // 'blood_pressure'=>'required',
            // 'pulse_rate'=>'required',
            // 'abnormality'=>'required',
            // 'overall_health'=>'required',
            // 'psychiatric_history'=>'required',
            // 'decline_academic'=>'required',
            // 'manifestation'=>'required',
            // 'habit'=>'required',
            // 'activities'=>'required',
            // 'bullying'=>'required',
        ]);

        $fileModel = new Ghp;
        $fileModel->name = $req->name;
        $fileModel->fname = $req->fname;
        $fileModel->age = $req->age;
        $fileModel->gender = $req->gender;
        $fileModel->cnic = $req->cnic;
        $fileModel->mobile = $req->mobile;
        $fileModel->email = $req->email;
        $fileModel->blood_group = $req->blood_group;
        $fileModel->temperature = $req->temperature;
        $fileModel->address = $req->address;
        $fileModel->height = $req->height;
        $fileModel->blood_pressure = $req->blood_pressure;
        $fileModel->pulse_rate = $req->pulse_rate;
        $fileModel->abnormality = $req->abnormality;
        $fileModel->overall_health = $req->overall_health;
        $fileModel->psychiatric_history = $req->psychiatric_history;
        $fileModel->decline_academic = $req->decline_academic;
        $fileModel->manifestation = $req->manifestation;
        $fileModel->habit = $req->habit;
        $fileModel->activities = $req->activities;
        $fileModel->bullying = $req->bullying;
        $fileModel->save();
        $req->session()->put('GHP', " Your Data has been uploaded successfully");
        return redirect()->back();
    }


    public function GhpView()
    {
        $GhpView1 = Ghp::where('email', session('email'))->first();
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/GenHealthProfile', ['GhpView1' => $GhpView1, 'UIfile' => $UIfile]);
    }
}
