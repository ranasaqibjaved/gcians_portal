<?php

//CONFIGURATION for SmartAdmin UI

//ribbon breadcrumbs config
//array("Display Name" => "URL");
$breadcrumbs = array(
	"Home" => APP_URL
);

/*navigation array config

ex:
"dashboard" => array(
	"title" => "Display Title",
	"url" => "http://yoururl.com",
	"url_target" => "_self",
	"icon" => "fa-home",
	"label_htm" => "<span>Add your custom label/badge html here</span>",
	"sub" => array() //contains array of sub items with the same format as the parent
)

*/
$page_nav = array(


	"dashboard" => array(
		"title" => "Dashboard",
		"url" => APP_URL,
		"icon" => "fa-home"
	),

	//For View Messages
	"viewmessages" => array(
		"title" => "View Messages",
		"icon" => "fa-envelope",
		"sub" => array(
			"messages" => array(
				"title" => "Messages",
				"url" => APP_URL.'/Home/Messages',
		        "label_htm" => '<span class="badge pull-right inbox-badge">21</span>',

			),
			'noticeboard' => array(
				'title' => 'Notice Board',
				'url' => APP_URL.'/Home/NoticeBoard'
			)
		)
	),

	//Student Services
	"studentservices" => array(
		"title" => "Student Services",
		"icon" => "fa-calendar",
		"sub" => array(
			
			"timetable" => array(
				"title" => "Time Table",
				"url" => APP_URL.'/Home/TimeTable'
			),
			'academicdetails' => array(
				'title' => 'Academic Details',
				'url' => APP_URL.'/Home/AcademicDetails'
			)
		)
	),
	
	// Digital Liberary
	"digitalliberary" => array(
		"title" => "Digital Liberary",
		"url" => APP_URL."/Home/DigitalLibrary",
		"icon" => "fa-book",
	),

	// Fee Details
	"feedetails" => array(
		"title" => "Fee Details",
		"icon" => "fa-dollar",
		"sub" => array(
			
			"feedetails" => array(
				"title" => "Vouchar",
				"url" => APP_URL."/Home/FeeDetails",
			),
			"scholarships" => array(
				"title" => "Scholarships",
				"url" => APP_URL."/Home/Scholarship",
			),
		)
	),

	//Forms
	"forms" => array(
		"title" => "Forms",
		"icon" => "fa-pencil-square-o",
		"sub" => array(

			"uploadassignment" => array(
				"title" => "Upload Assignment",
				"url" => APP_URL."/Home/UploadAssignment"
			),
			"nationalenrollmentdrive" => array(
				"title" => "National Enrollment Drive",
				"url" => APP_URL."/Home/NationalEnrollDrive"
			),
			"alumnisurvey" => array(
				"title" => "Alumni Survey",
				"url" => APP_URL."/Home/AlumniSurvey"
			),
			"graduationsurvey" => array(
				"title" => "Graduation Survey",
				"url" => APP_URL."/Home/GraduationSurvey",
			),
			"genhealthprofile" => array(
				"title" => "Gen. Health Profile",
				"url" => APP_URL."/Home/GenHealthProfile",
			),
			"intelavailform" => array(
				"title" => "Intel. Avail Form",
				"url" => APP_URL."/Home/INTELAVAILForm",
			),
			"careeralumni" => array(
				"title" => "Career Alumni",
				"url" => APP_URL."/Home/CareerAlumni",
			),
		)
	),
	
	// Account Details
	"accountdetails" => array(
		"title" => "Account Details",
		"icon" => "fa-user",
		"sub" => array(
			
			"chnagedp" => array(
				"title" => "Chnage Profile Image",
				"url" => APP_URL."/Home/UserImage",
			),
			"changepassword" => array(
				"title" => "Change Password",
				"url" => APP_URL."/Home/ChangePassword",
			),
			"contact" => array(
				"title" => "Edit/View Contact",
				"url" => APP_URL."/Home/Contact",
			),
		)
	),

	// Exams Details
	"exams" => array(
		"title" => "Exams",
		"icon" => "fa-user",
		"sub" => array(
			
			"viewexam" => array(
				"title" => "View Exam",
				"url" => APP_URL."/Home/ViewExam",
			),
			"onlineexam" => array(
				"title" => "Online Exam",
				"url" => APP_URL."/Home/OnlineExam",
			),
		)
	),

	// Log Out
	"logout" => array(
		"title" => "Log Out",
		"url" => APP_URL."/",
		"icon" => "fa-sign-out",
	),
	
	
	
);

//configuration variables
$page_title = "";
$page_css = array();
$no_main_header = false; //set true for lock.php and login.php
$page_body_prop = array(); //optional properties for <body>
$page_html_prop = array(); //optional properties for <html>
?>