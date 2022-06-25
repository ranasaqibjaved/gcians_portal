<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NoticeBoard;
use App\Models\UserImage;


class NoticeBoardController extends Controller
{
    public function NBUpload(Request $req)
    {
        $req->validate([
            // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
            'file' => 'required|max:10000'
        ]);

        $fileModel = new NoticeBoard;

        if ($req->file()) {
            $fileName = time() . '_' . $req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('NoticeBoard', $fileName, 'public');

            $fileModel->name = time() . '_' . $req->file->getClientOriginalName();
            $fileModel->description = $req->description;
            $fileModel->file_path = '/storage/NoticeBoard/' . $filePath;
            $fileModel->save();

            // return back()->with('success','{{$fileName}} File has been uploaded.');
            // ->with('file', $fileName);
            $req->session()->put('NBfileuploadedsuccessfully', "$fileModel->name ,file has been uploaded successfully");
        }
        return redirect()->back()->with('ok2', 'File has been uploaded.');
    }

    public function NoticeBoardView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        $NBfile = NoticeBoard::orderBy('created_at', 'desc')->get();
        return view('/Home/NoticeBoard')->with(['NBfile' => $NBfile, 'UIfile' => $UIfile]);
    }
}
