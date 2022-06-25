<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\file;
use App\Models\DigitalLiberary;
use App\Models\UserImage;


class DigitalLiberaryController extends Controller
{
    public function DLUpload(Request $req)
    {
        $req->validate([
            // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            'file' => 'required|max:10000'
        ]);

        $fileModel = new DigitalLiberary;

        if ($req->file()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('DIGITAL_LIBRARY', $fileName, 'public');

            $fileModel->name = time() . '_' . $req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/DIGITAL_LIBRARY/' . $filePath;
            $fileModel->description =  $req->description;
            $fileModel->extention =  $req->file->getClientOriginalExtension();

            $fileModel->save();

            // return back()->with('success','{{$fileName}} File has been uploaded.');
            // ->with('file', $fileName);
            $req->session()->put('DLfileuploadedsuccessfully', "$fileModel->name ,file has been uploaded successfully");
        }
        return redirect()->back()->with('ok2', 'File has been uploaded.');
    }



    public function DigitalLiberaryView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        $DLfile = DigitalLiberary::orderBy('created_at', 'desc')->simplePaginate(10);;
        return view('/Home/DigitalLibrary')->with(['DLfile' => $DLfile, 'UIfile' => $UIfile]);
    }
}
