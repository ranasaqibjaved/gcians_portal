<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserImage;
use App\Models\Semdata;
use App\Models\Timetable;
use App\Models\UploadAssignment;
use DB;

class UploadAssignmentController extends Controller
{
    public function UA(Request $req)
    {
        $req->validate([
            // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            'file' => 'required|max:10000',
            'studentName' => 'required',
            'email' => 'required',
            'teacherName' => 'required',
            'semester' => 'required',
            'courseCode' => 'required',

        ]);

        $fileModel = new UploadAssignment;

        if ($req->file()) {

            $filename = $req->semester . '_' . $req->teacherName . '_' . $req->courseCode . '_' . $req->email . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('Assignments', $filename, 'public');

            $fileModel->filename = $filename;
            $fileModel->studentName = $req->studentName;
            $fileModel->teacherName = $req->teacherName;
            $fileModel->email = $req->email;
            $fileModel->semester = $req->semester;
            $fileModel->courseCode = $req->courseCode;
            $fileModel->file_path = '/storage/Assignments/' . $filename;
            $fileModel->save();

            $req->session()->put('fileuploadedsuccessfully', "$filename ,file has been uploaded successfully");
        }
        return redirect()->back()->with('ok2', 'File has been uploaded.');
    }

    public function SemdataView()
    {

        $Semdata = Timetable::where('semester', session('semester'))->get();
        $UIfile = UserImage::where('email', session('email'))->get();
        $DataforTeacherView = UploadAssignment::where('teacherName', session('name'))->orderBy('semester', 'ASC')->simplePaginate(10);
        $check = UploadAssignment::get();
        $GhpView1 = UploadAssignment::where('email', session('email'))->where('semester', session('semester'))->get();

        return view('/Home/UploadAssignment', [
            'Semdata' => $Semdata,
            'UIfile' => $UIfile,
            'GhpView1' => $GhpView1,
            'DataforTeacherView' => $DataforTeacherView,
        ]);
    }
}
