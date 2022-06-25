<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;


class SinfoController extends Controller
{
    
    public function userImageView(){
        $UIfile= UserImage::where('email' , session('email') )->get();
        return view('/Home/HeaderHome',['UIfile' => $UIfile]);
        }
}
