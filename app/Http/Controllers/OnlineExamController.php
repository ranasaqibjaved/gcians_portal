<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;
use App\Models\Timetable;

class OnlineExamController extends Controller
{
    public function OnlineExamView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        $timetable1 = Timetable::where('semester', session('semester'))->get();
        return view('/Home/OnlineExam', ['UIfile' => $UIfile, 'timetable1' => $timetable1,]);
    }
}
