<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Timetable;
use App\Models\UserImage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class TimetableController extends Controller
{

    public function TimeTableView()
    {
        $timetable1 = Timetable::where('semester', session('semester'))->get();
        $timetableForTeachers = Timetable::where('teacher_name', session('name'))->get();
        $timetableForAdmin = Timetable::orderBy('semester', 'ASC')->get();
        $UIfile = UserImage::where('email', session('email'))->get();
        return view('/Home/TimeTable')->with([
            'timetable1' => $timetable1,
            'UIfile' => $UIfile,
            'timetableForTeachers' => $timetableForTeachers,
            'timetableForAdmin' => $timetableForAdmin,
        ]);
    }



    //  update time table
    function UpdateTimeTable(Request $request)
    {
        $request->validate([
            'semester' => 'required',
            'course_code' => 'required',
            'id' => 'required',
        ]);

        $data = Timetable::find($request->id);

        if ($data) {

            $data->location = $request->location;
            $data->teacher_name = $request->teacher_name;
            $data->monday = $request->monday;
            $data->tuesday = $request->tuesday;
            $data->wednesday = $request->wednesday;
            $data->thurday = $request->thurday;
            $data->friday = $request->friday;
            $data->saturday = $request->saturday;
            $data->save();

            $request->session()->put('TimeTableUpdated', 'Time table for semester /' . $request->semester . '/ and course code : /' . $request->course_code . '/ has been updated successfully');
            return Redirect::back();
        } else {
            $request->session()->put('TimeTableUpdated2', 'Please select a valid ID');
            return Redirect::back();
        }
    }
}
