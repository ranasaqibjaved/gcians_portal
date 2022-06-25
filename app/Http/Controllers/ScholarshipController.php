<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;
use App\Models\UserImage;


class ScholarshipController extends Controller
{
    public function scholarshipUpload(Request $req)
    {
        $req->validate([
            'file' => 'required|max:10000',
            'description'  => 'required',
            'link' => 'required',
        ]);

        $fileModel = new Scholarship;

        if ($req->file()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('Scholarships', $fileName, 'public');

            $fileModel->file_name   = $fileName;
            $fileModel->description = $req->description;
            $fileModel->link        = $req->link;
            $fileModel->save();

            $req->session()->put('SF', "$fileName ,file has been uploaded successfully");
        }
        return redirect()->back()->with('ok2', 'File has been uploaded.');
    }


    public function ScholarshipView()
    {
        $ScDATA = Scholarship::simplePaginate(10);
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/Scholarship', ['ScDATA' => $ScDATA, 'UIfile' => $UIfile]);
    }
}
