<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Studentresult;
use App\Models\UserImage;
use App\Models\Registration;
use App\Models\Timetable;

use App\Http\Controllers\Controller;

class StudentresultController extends Controller
{

    public function StudentResultView()
    {
        $sem1 = Studentresult::where('email', session('email'))->where('semester', '1')->get();
        $sem2 = Studentresult::where('email', session('email'))->where('semester', '2')->get();
        $sem3 = Studentresult::where('email', session('email'))->where('semester', '3')->get();
        $sem4 = Studentresult::where('email', session('email'))->where('semester', '4')->get();
        $sem5 = Studentresult::where('email', session('email'))->where('semester', '5')->get();
        $sem6 = Studentresult::where('email', session('email'))->where('semester', '6')->get();
        $sem7 = Studentresult::where('email', session('email'))->where('semester', '7')->get();
        $sem8 = Studentresult::where('email', session('email'))->where('semester', '8')->get();
        $UIfile = UserImage::where('email', session('email'))->get();
        $resultInfoForAdmin = Studentresult::orderBy('semester', 'ASC')->get();
        $RegisteredStudentInfoForAdmin = Registration::where('usertype', 'student')->pluck('email');
        $TotalStudentsForTeacher =  Timetable::where('teacher_name', session('name'))->get();
        $studentsSem1 = Registration::where('semester', 1)->get();
        $studentsSem2 = Registration::where('semester', 2)->get();
        $studentsSem3 = Registration::where('semester', 3)->get();
        $studentsSem4 = Registration::where('semester', 4)->get();
        $studentsSem5 = Registration::where('semester', 5)->get();
        $studentsSem6 = Registration::where('semester', 6)->get();
        $studentsSem7 = Registration::where('semester', 7)->get();
        $studentsSem8 = Registration::where('semester', 8)->get();


        return view('/Home/AcademicDetails', [
            'sem1' => $sem1,
            'sem2' => $sem2,
            'sem3' => $sem3,
            'sem4' => $sem4,
            'sem5' => $sem5,
            'sem6' => $sem6,
            'sem7' => $sem7,
            'sem8' => $sem8,
            'studentsSem1' => $studentsSem1,
            'studentsSem2' => $studentsSem2,
            'studentsSem3' => $studentsSem3,
            'studentsSem4' => $studentsSem4,
            'studentsSem5' => $studentsSem5,
            'studentsSem6' => $studentsSem6,
            'studentsSem7' => $studentsSem7,
            'studentsSem8' => $studentsSem8,
            'UIfile' => $UIfile,
            'TotalStudentsForTeacher' => $TotalStudentsForTeacher,
            'resultInfoForAdmin' => $resultInfoForAdmin,
            'RegisteredStudentInfoForAdmin' => $RegisteredStudentInfoForAdmin,
        ]);
    }


    public function ResultUpload(Request $req)
    {
        $req->validate([

            // 'email' => 'required',
            // 'fname' => 'required',
            // 'mobile' => 'required',
            // 'date_of_birth' => 'required',
            // 'date_of_admission' => 'required',
            // 'gender' => 'required',
            // 'session' => 'required',
            // 'session_type' => 'required',
        ]);

        $fileModel = new Studentresult;

        $fileModel->semester = $req->semester;
        $fileModel->course_code = $req->course_code;
        $fileModel->teacher_name = $req->teacher_name;
        $fileModel->email = $req->email;
        $fileModel->Sem_work = $req->Sem_work;
        $fileModel->Mid_term = $req->Mid_term;
        $fileModel->Theory = $req->Theory;
        $fileModel->Practical = $req->Practical;
        $fileModel->Total = $req->Total;
        $fileModel->Maximum = $req->Maximum;
        $fileModel->Grade = $req->Grade;
        $fileModel->Q_P = $req->Q_P;
        $fileModel->Marks_P = $req->Marks_P;
        $fileModel->Attendence_P = $req->Attendence_P;
        $fileModel->save();


        $req->session()->put('ResultUploaded', 'Result for' . $req->email . ' has been uploaded successfully');
        return redirect()->back();
    }
}
