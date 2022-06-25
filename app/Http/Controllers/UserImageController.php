<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;
use Illuminate\Support\Facades\Redirect;
use DB;

class UserImageController extends Controller
{
    public function UIUpload(Request $req)
    {
        $req->validate([
            // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            'email' => 'required',
            'file' => 'required|max:10000',
        ]);

        $check = UserImage::where('email', $req->email)->first();

        if ($check) //means email exists before , UPDATE
        {
            $fileName = $req->email . ".jpg";
            $filePath = $req->file('file')->storeAs('UserImage', $fileName, 'public');
            // $filePath = $req->file('file')->storeAs('UserImage', $fileName);

            $check->name   = $fileName;
            $check->file_path = '/storage/UserImage/' . $filePath;
            $check->save();

            $req->session()->put('uiu',  $req->file->getClientOriginalName() . ", User Image has been Updated successfully");
            return redirect()->back();
            // return Redirect::back()->with('UIfileuploadedsuccessfully', $req->file->getClientOriginalName() . " User Image has been Updated successfully");
        } else
        //means email Does not exists before , CREATE
        {
            if ($req->file()) {
                $fileModel = new UserImage;
                $fileName = $req->email . ".jpg";
                $filePath = $req->file('file')->storeAs('UserImage', $fileName, 'public');
                // $filePath = $req->file('file')->storeAs('UserImage', $fileName);
                $fileModel->email = $req->email;
                $fileModel->name  = $fileName;
                $fileModel->file_path = '/storage/UserImage/' . $filePath;
                $fileModel->save();

                $req->session()->put('uiu',  $req->file->getClientOriginalName() . ", User Image has been Updated successfully");
                return redirect()->back();



                // return redirect()->back()->with('ok', 'Password Has Been Changed Successfully');
                // return redirect()->back()->with('UIfileuploadedsuccessfully', $req->file->getClientOriginalName() . " User Image has been Updated successfully");
            }
        }
    }


    public function userImageView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/UserImage', ['UIfile' => $UIfile]);
    }
}
