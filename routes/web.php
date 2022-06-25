<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DigitalLiberaryController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UploadAssignmentController;
use App\Http\Controllers\StudentresultController;
use App\Http\Controllers\FeedetailController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\NedController;
use App\Http\Controllers\GhpController;
use App\Http\Controllers\IafController;
use App\Http\Controllers\AttendenceController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewExamController;
use App\Http\Controllers\OnlineExamController;
use App\Http\Controllers\InstallController;
// use App\Http\Controllers\Controllers;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Middleware for logged in -- You Are Logged In
Route::group(['middleware' => ['LoggedIn']], function () {

    // Setting Up Views for Home Page
    Route::view('/Home', 'Home');
    Route::view('Home/AlumniSurvey', 'Home/AlumniSurvey');
    Route::view('Home/AcademicDetails', 'Home/AcademicDetails');
    Route::view('Home/Career', 'Home/Career');
    Route::view('Home/Contact', 'Home/Contact');
    Route::view('Home/ChangePassword', 'Home/ChangePassword');
    Route::view('Home/CareerAlumni', 'Home/CareerAlumni');
    Route::view('Home/DigitalLibrary', 'Home/DigitalLibrary');
    Route::view('Home/GenHealthProfile', 'Home/GenHealthProfile');
    Route::view('Home/GraduationSurvey', 'Home/GraduationSurvey');
    Route::view('Home/HeaderHome', 'Home/HeaderHome');
    Route::view('Home/INTELAVAILForm', 'Home/INTELAVAILForm');
    Route::view('Home/Messages', 'Home/Messages');
    Route::view('Home/NoticeBoard', 'Home/NoticeBoard');
    Route::view('Home/NationalEnrollDrive', 'Home/NationalEnrollDrive');
    Route::view('Home/OnlineExam', 'Home/OnlineExam');
    Route::view('Home/StudentServices', 'Home/StudentServices');
    Route::view('Home/Scholarship', 'Home/Scholarship');
    Route::view('Home/TimeTable', 'Home/TimeTable');
    Route::view('Home/UserImage', 'Home/UserImage');
    Route::view('Home/UploadAssignment', 'Home/UploadAssignment');
    Route::view('Home/ViewExam', 'Home/ViewExam');
    Route::view('Home/Search', 'Home/Search');
    Route::view('Home/Vouchar', 'Home/Vouchar');
    Route::view('Home/Attendence', 'Home/Attendence');
    Route::view('/Home/Contact', '/Home/Contact');

    //Getting data by passing values
    Route::get('/Home', [HomeController::class, 'HomeView']);
    Route::get('/search', [MessageController::class, 'search']);
    Route::get('/Home/search', [MessageController::class, 'searchUI']);
    Route::get('/Home/Vouchar', [FeedetailController::class, 'FeedetailsView']);
    Route::get('/Home/Scholarship', [ScholarshipController::class, 'ScholarshipView']);
    Route::get('/Home/NationalEnrollDrive', [NedController::class, 'NedView']);
    Route::get('/Home/GenHealthProfile', [GhpController::class, 'GhpView']);
    Route::get('/Home/INTELAVAILForm', [IafController::class, 'IafView']);
    Route::get('/Home/UploadAssignment', [UploadAssignmentController::class, 'SemdataView']);
    Route::get('/Home/Attendence', [AttendenceController::class, 'AttendenceView']);
    Route::get('/Home/TimeTable', [TimetableController::class, 'TimeTableView']);
    Route::get('/Home/AcademicDetails', [StudentresultController::class, 'StudentResultView']);
    Route::get('/Home/ChangePassword', [RegistrationController::class, 'RegistrationImageView']);
    Route::get('/Home/UserImage', [UserImageController::class, 'userImageView']);
    Route::get('/Home/DigitalLibrary', [DigitalLiberaryController::class, 'DigitalLiberaryView']);
    Route::get('/Home/Messages', [MessageController::class, 'MessageView']);
    Route::get('/Home/NoticeBoard', [NoticeBoardController::class, 'NoticeBoardView']);
    Route::get('/Home/Contact', [ContactController::class, 'ContactView']);
    Route::get('/Home/ViewExam', [ViewExamController::class, 'ViewExamView']);
    Route::get('/Home/OnlineExam', [OnlineExamController::class, 'OnlineExamView']);

    // Uploading data 
    Route::post('/Home/UploadAssignment', [UploadAssignmentController::class, 'UA'])->name('UA');
    Route::post('/Home/DigitalLibrary', [DigitalLiberaryController::class, 'DLUpload'])->name('DLUpload');
    Route::post('/Home/NoticeBoard', [NoticeBoardController::class, 'NBUpload'])->name('NBUpload');
    Route::post('/Home/Messages', [MessageController::class, 'MUpload'])->name('MUpload');
    Route::post('/Home/UserImage', [UserImageController::class, 'UIUpload'])->name('UIUpload');
    Route::post('/Home/Contact', [ContactController::class, 'CUpload'])->name('CUpload');
    Route::post('/Home/Vouchar', [FeedetailController::class, 'AddVouchar'])->name('AddVouchar');
    Route::post('/Home/Scholarship', [ScholarshipController::class, 'scholarshipUpload'])->name('scholarshipUpload');
    Route::post('/Home/NationalEnrollDrive', [NedController::class, 'NedUpload'])->name('NedUpload');
    Route::post('/Home/GenHealthProfile', [GhpController::class, 'GHPUpload'])->name('GHPUpload');
    Route::post('/Home/INTELAVAILForm', [IafController::class, 'IAFUpload'])->name('IAFUpload');
    Route::post('/Home/Attendence', [AttendenceController::class, 'AttendenceUpload'])->name('AttendenceUpload');
    Route::post('/Home/AcademicDetails', [StudentresultController::class, 'ResultUpload'])->name('ResultUpload');
    Route::post('/Home/TimeTable', [TimetableController::class, 'UpdateTimeTable'])->name('UpdateTimeTable');
});


// Middleware for logged Out-- You Are Not Logged In
Route::group(['middleware' => ['LoggedIn2']], function () {

    // Views for main page
    Route::view('/', 'Login');
    Route::view('/SignUp', 'SignUp');
    Route::view('/Reset', 'Reset');
});

Route::view('404', 'errors/404');

Route::view('/install', 'install/install');
Route::view('/admin_account', 'install/admin_account');
Route::post('/create', [InstallController::class, 'adminaccount']);
Route::get('install/install_all', [InstallController::class, 'install']);


Route::view('/Header', 'Header');
Route::view('/ResetPassword', 'ResetPassword');
Route::view('/SendResetLinkPage', 'SendResetLinkPage');
Route::get('ResetPassword/{token}', [RegistrationController::class, 'resetPasswordGetToken']);


Route::view('/temp', 'temp');