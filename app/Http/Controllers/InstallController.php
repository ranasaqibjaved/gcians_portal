<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use mysqli;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class InstallController extends Controller
{
    public function install(Request $req)
    {
        set_time_limit(300);
        $filename = 'database/fyp.sql';
        $mysql_host = 'localhost';
        $mysql_username = 'root';
        $mysql_password = '';
        $mysql_database = 'fyp';

        $con = @new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
        if ($con->connect_errno) {
            echo "Failed to connect to MySQL: " . $con->connect_errno;
            echo "<br/>Error: " . $con->connect_error;
        }

        // Temporary variable, used to store current query
        $templine = '';
        // Read in entire file
        $lines = file($filename);
        // Loop through each line

        foreach ($lines as $line) {
            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;
            // Add this line to the current segment
            $templine .= $line;
            // If it has a semicolon at the end, it's the end of the query
            if (substr(trim($line), -1, 1) == ';') {
                // Perform the query
                $con->query($templine) or print('Error performing query \'<strong>' . $templine . '\': '   . '<br /><br />');
                // Reset temp variable to empty
                $templine = '';
            }
        }


        echo "Tables imported successfully";
        $token =  Str::random(32);
        $req->session()->put('admin_token', $token);
        DB::table('admin_access')->insert(['token' => $token]);
        return redirect('/admin_account')->with(['Token' => $token]);
    }

    public function adminaccount(Request $request)
    {

        $user = Registration::where('email', $request->email)->first();
        if ($user === null) {
            $usertype = "admin";
            $user = new Registration;
            $token =  Str::random(32);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->usertype = $usertype;

            $user->password = Hash::make($request->password);
            $user->remember_token = $token;
            $user->save();


            //declaring session 
            $request->session()->put('name', $request->name);
            $request->session()->put('email', $request->email);
            $request->session()->put('usertype', $usertype);
            return redirect('/Home');
        }
        return Redirect::back()->withErrors(['msg' => 'Email Already Exists']);
    }
}