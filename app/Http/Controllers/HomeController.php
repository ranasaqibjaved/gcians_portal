<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\UserImage;
use App\Models\Message;



class HomeController extends Controller
{

    public function HomeView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        $M3file  = Message::orderBy('created_at', 'desc')->get();
        $Cfile  = Contact::where('email', session('email'))->first();
        return view('/Home', ['UIfile' => $UIfile, 'M3file' => $M3file, 'Cfile'=>$Cfile]);
    }
}
