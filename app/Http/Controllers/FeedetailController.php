<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Feedetail;
use App\Models\UserImage;


class FeedetailController extends Controller
{


    public function AddVouchar(Request $req)
    {
        $req->validate([
            'id' => 'required',
            'file' => 'required',
            'semester' => 'required',
            'program' => 'required',
            'bank' => 'required',
            'vouchar_no' => 'required',
            'Due_date' => 'required',
            'net_amount' => 'required',
        ]);

        $fileModel = Feedetail::find($req->id);;

        if ($fileModel) {

            $filename = $req->semester . '_' . $req->program . '.pdf';
            $filePath = $req->file('file')->storeAs('vouchers', $filename, 'public');

            $fileModel->semester = $req->semester;
            $fileModel->program = $req->program;
            $fileModel->bank = $req->bank;
            $fileModel->vouchar_no = $req->vouchar_no;
            $fileModel->Due_date = $req->Due_date;
            $fileModel->net_amount = $req->net_amount;
            $fileModel->Vouchar_file = $filename;
            $fileModel->save();

            $req->session()->put('VF', "$filename ,file has been Updated successfully");
            return redirect()->back();
        } else {
            $req->session()->put('VFError', " Please Enter a Valid ID from Above Table");
            return redirect()->back();
        }
    }


    public function FeedetailsView()
    {
        $feedetails = Feedetail::where('semester', session('semester'))->first();
        $UIfile = UserImage::where('email', session('email'))->get();
        $AdminViewVoucahr = Feedetail::orderBy('semester', 'ASC')->get();
        return view('/Home/Vouchar', [
            'feedetails' => $feedetails,
            'UIfile' => $UIfile,
            'AdminViewVoucahr' => $AdminViewVoucahr
        ]);
    }
}
