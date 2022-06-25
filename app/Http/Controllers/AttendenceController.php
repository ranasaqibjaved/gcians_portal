<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;
use App\Models\Attendence;
use App\Models\Timetable;
use App\Models\Registration;




class AttendenceController extends Controller
{


    public function AttendenceUpload(Request $req)
    {
        $req->validate([
            // 'email',
            // 'subject_title',
            // 'teacher_name',
            // 'semester',
            // 'date',
            // 'present',
        ]);

        $fileModel = new Attendence;

        $fileModel->email = $req->email;
        $fileModel->subject_title = $req->subject_title;
        $fileModel->teacher_name = $req->teacher_name;
        $fileModel->semester = $req->semester;
        $fileModel->date = $req->date;
        $fileModel->present = $req->present;
        $fileModel->save();


        return redirect()->back()->with('ATTENDANCE', 'Attendence has been uploaded successfully For ' . $req->email);
    }

    public function AttendenceView()
    {
        $Aview = Attendence::where('email', session('email'))->where('semester', session('semester'))->get();
        $count = Timetable::where('semester', session('semester'))->get();
        $UIfile = UserImage::where('email', session('email'))->get();
        $TotalStudentsForTeacher =  Timetable::where('teacher_name', session('name'))->get();
        $studentsSem1 = Registration::where('semester', 1)->get();
        $studentsSem2 = Registration::where('semester', 2)->get();
        $studentsSem3 = Registration::where('semester', 3)->get();
        $studentsSem4 = Registration::where('semester', 4)->get();
        $studentsSem5 = Registration::where('semester', 5)->get();
        $studentsSem6 = Registration::where('semester', 6)->get();
        $studentsSem7 = Registration::where('semester', 7)->get();
        $studentsSem8 = Registration::where('semester', 8)->get();

        return view('/Home/Attendence', [
            'Aview' => $Aview,
            'count' => $count,
            'UIfile' => $UIfile,
            'TotalStudentsForTeacher' => $TotalStudentsForTeacher,
            'studentsSem1' => $studentsSem1,
            'studentsSem2' => $studentsSem2,
            'studentsSem3' => $studentsSem3,
            'studentsSem4' => $studentsSem4,
            'studentsSem5' => $studentsSem5,
            'studentsSem6' => $studentsSem6,
            'studentsSem7' => $studentsSem7,
            'studentsSem8' => $studentsSem8,
        ]);
    }
}