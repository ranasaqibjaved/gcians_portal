<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;
use App\Models\Timetable;



class ViewExamController extends Controller
{



    public function ViewExamView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        $timetable1 = Timetable::where('semester', session('semester'))->get();
        return view('/Home/ViewExam', ['UIfile' => $UIfile, 'timetable1' => $timetable1,]);
    }
}
