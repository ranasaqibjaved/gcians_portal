<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;


class SemdataController extends Controller
{
    public function SemDataView(Request $req){

            $fileModel = new Message;
            $fileModel->name =$req->name;
            $fileModel->email =$req->email;
            $fileModel->message =$req->message;
            $fileModel->save();
 
        return back()->with('Mfileuploadedsuccessfully', 'Message has been uploaded successfully');
   }

   public function userImageView(){
    $UIfile= UserImage::where('email' , session('email') )->get();
    return view('/Home/HeaderHome',['UIfile' => $UIfile]);
    }


}
