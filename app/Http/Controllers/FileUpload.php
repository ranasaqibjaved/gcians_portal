<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\UserImage;


class FileUpload extends Controller
{
    public function createForm()
    {
        return view('file-upload');
    }

    public function FileUpload(Request $req)
    {
        $req->validate([
            // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            'file' => 'required|max:10000',
            'filename' => 'required',
        ]);

        $fileModel = new File;

        if ($req->file()) {
            // $fileName1 = time().'_'.$req->file->getClientOriginalName();
            $filename = $req->filename;
            $filePath = $req->file('file')->storeAs('uploads', $filename, 'public');

            $fileModel->name = $req->filename;
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            // return back()->with('success','{{$fileName}} File has been uploaded.');
            // ->with('file', $fileName);
            $req->session()->put('fileuploadedsuccessfully', "$fileModel->name ,file has been uploaded successfully");
        }
        return redirect()->back()->with('ok2', 'File has been uploaded.');
    }

    public function userImageView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/HeaderHome', ['UIfile' => $UIfile]);
    }
}
