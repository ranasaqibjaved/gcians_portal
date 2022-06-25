<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

use App\Http\Controllers\Controller;

use App\Models\UserImage;



class MessageController extends Controller
{
    public function MUpload(Request $req)
    {
        $req->validate([
            'message' => 'required'
        ]);
        $fileModel = new Message;
        $fileModel->name = $req->name;
        $fileModel->email = $req->email;
        $fileModel->message = $req->message;
        $fileModel->save();
        return back()->with('Mfileuploadedsuccessfully', 'Message has been uploaded successfully');
    }

    public function search(Request $req)
    {
        $Squery = Message::where('name', 'like', '%' . $req->search . '%')->get();
        $UIfile = UserImage::where('email', session('email'))->get();
        if ($Squery) {
            $req->session()->put('Result', 'Result Found of For (' . $req->search . ')');
            return view('/Home/Search')->with(['Squery' => $Squery, 'UIfile' => $UIfile]);
        } else {
            $req->session()->put('Result', 'No Result Found For (' . $req->search . ')');
            return view('/Home/Search')->with(['UIfile' => $UIfile]);
        }
    }


    public function MessageView()
    {
        $UIfile = UserImage::where('email', session('email'))->get();
        $Mfile  = Message::orderBy('created_at', 'desc')->simplePaginate(8);
        $M3file  = Message::orderBy('created_at', 'desc')->get();

        return view('/Home/Messages')->with(['Mfile' => $Mfile, 'UIfile' => $UIfile, 'M3file' => $M3file]);
    }
}
