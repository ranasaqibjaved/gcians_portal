<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="{{ url('images/icon.png') }}" type="image/x-icon">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css files -->
  <link rel="stylesheet" href="{{url('/css/home.css')}}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{url('/css/style.css')}}" type="text/css" media="all" />
  <!-- Style-CSS -->
</head>

<body>
  <!-- Top Nav Bar -->
  <div class="d-flex justify-content-between  sticky-top topnavbar">

    <div class="col-1 logo1">
      <img src="{{ url('images/gcuflogo.png') }}" alt="Gcuf Logo" class=" ms-1" height="50" width="50">
    </div>

    <!-- Search form -->
    <div class="col-6 pt-2">
      <form method="GET" action="{{url('/search')}}">
        <input class="form-control py-3 opacity-75" name="search" type="search" placeholder="Find Report and More" style="color: aliceblue; background-color: rgb(124, 124, 124);" required>
        <button class="btn d-none" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <!-- //Search form -->

    <!-- User Image -->
    <div class=" col-1">
      <button style="border:none;" title="Change Your DP" onclick="location.href = '/Home/UserImage';">
        @if( isset($UIfile[0]->name) )
        <img src="{{ url('storage/UserImage/'.$UIfile[0]->name) }}" class="rounded-circle" alt="User Image" height="45" width="45">
        @else
        <img src=" {{url('storage/UserImage/'.'default.jpg')}}" class="rounded-circle" alt="No Image" height="45" width="45">
        @endif
      </button>
    </div>
    <!-- End User Image -->


    <!-- START session name and email -->
    <div class="col iconDetails ">
      <span class="row fw-bold " title="{{session('name')}}">{{session('name')}}</span>
      <span class="row " title="{{session('email')}}">{{session('email')}}</span>
    </div>
    <!--END session name and email -->






    <!-- Menu Icon -->
    <span class="d-flex flex-row-reverse col">
      <button type="button" id="sidebarCollapse" class="btn fs-2 overflow-hidden" title="Menu" onclick="document.getElementById('sound2').play();">
        <i class="fas fa-bars menuicon rounded"></i>
      </button>
    </span>
    <!-- //Menu Icon -->
  </div>
  </div>
  <!-- End- Top nav bar -->

  <!-- Left Nav Bar -->
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">

      <h1><a href="#" class="logo active" style=" pointer-events: none;">{{session('name')}}</a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="{{url('/Home')}}"><span class="fa fa-home mr-3 iconNav"></span>Dashboard</a>
        </li>

        <!-- Messages Tab -->
        <li>
          <a href="#" id="toggleMessage2"><span class="fa fa-envelope mr-3 iconNav"></span>View Message <span>
              <i class="far  fa-plus-square " id="toggleMessage" aria-hidden="true" style="float: right; margin-top: 8px;"></i>
              <i class="far fa-minus-square" id="spanMessage" style="float: right; margin-top: 8px; display: none;" aria-hidden="true"></i>
            </span></a>
        </li>
        <li class="liMessage" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/Messages')}}"><span class="fa fa-address-card mr-3 ml-5 iconNav "></span>Messages </a>
        </li>
        <li class="liMessage" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/NoticeBoard')}}"><span class="fa fa-address-book mr-3 ml-5 iconNav"></span>Notice Board
          </a>
        </li>
        <!-- // Messages Tab -->

        <!-- Student Services Tab -->
        <li>
          <a href="#"><span class="fa fa-calendar mr-3 iconNav"></span>Student Services <span>
              <i class="far  fa-plus-square" id="Services" aria-hidden="true" style="float: right; margin-top: 8px"></i>
              <i class="far fa-minus-square" id="Services1" style="float: right; margin-top: 8px; display: none;" aria-hidden="true"></i>
            </span></a>
        </li>
        <li id="li1" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/TimeTable')}}"><span class="fa fa-table mr-3 ml-5 iconNav"></span>Time Table </a>
        </li>

        <li id="li32" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/UploadAssignment')}}"><span class="fa fa-upload mr-3 ml-5 iconNav" title="Upload Assignment"> </span>Upload Asign.</a>
        </li>
        <li id="li33" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/Attendence')}}"><span class="fa fa-user mr-3 ml-5 iconNav" title="Attendance"></span>Attendance</a>
        </li>
        <!-- //Student Services Tab -->

        <!-- Digital Liberary -->
        <li>
          <a href="{{url('Home/DigitalLibrary')}}"><span class="fa fa-book mr-3 iconNav"></span>Digital Liberary</a>
        </li>
        <!-- //Digital Liberary -->

        <!-- Fee Details -->
        <li>
          <a href="#"><span class="fa fa-usd mr-3 iconNav"></span> Fee Details <span>
              <i class="far  fa-plus-square" id="fee1" aria-hidden="true" style="float: right; margin-top: 8px"></i>
              <i class="far fa-minus-square" id="fee2" style="float: right; margin-top: 8px; display: none;" aria-hidden="true"></i>
            </span></a>
        </li>
        <li id="li3" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/Vouchar')}}"><span class="fa fa-money mr-3 ml-5 iconNav"></span>Vouchar</a>
        </li>
        <li id="li4" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/Scholarship')}}"><span class="fa fa-graduation-cap mr-3 ml-5 iconNav"></span>Scholarship
          </a>
        </li>
        <!-- //Fee Details -->

        <!-- Forms -->
        <li>
          <a href="#"><span class="far fa-edit mr-3 iconNav"></span>Forms <span>
              <i class="far  fa-plus-square" aria-hidden="true" id="form1" style="float: right; margin-top: 8px"></i>
              <i class="far fa-minus-square" id="form2" style="float: right; margin-top: 8px; display: none;" aria-hidden="true"></i>
            </span></a>
        </li>
        <li class="form_sidebar" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/NationalEnrollDrive')}}"><span class="fa fa-step-forward mr-3 ml-5 iconNav"></span>
            N.Enrol. Drive </a>
        </li>
        <li class="form_sidebar" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/AlumniSurvey')}}"><span class="fa fa-book mr-3 ml-5 iconNav"></span>Alumni Survey</a>
        </li>
        <li class="form_sidebar" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/GraduationSurvey')}}" title="Graduation Survay"><span class="fa fa-graduation-cap mr-3 ml-5 iconNav"></span>
            G.Survey </a>
        </li>
        <li class="form_sidebar" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/GenHealthProfile')}}"><span class="fa fa-medkit mr-3 ml-5 iconNav"></span>Gen. Health
            Profile</a>
        </li>
        <li class="form_sidebar" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/INTELAVAILForm')}}"><span class="far fa-edit mr-3 ml-5 iconNav"></span>Intel. Avail Form
          </a>
        </li>
        <li class="form_sidebar" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/CareerAlumni')}}"><span class="fa fa-cab mr-3 ml-5 iconNav"></span>Career Alumni </a>
        </li>
        <!-- //Forms -->

        <!-- Account Details -->
        <li>
          <a href="#"><span class="fa fa-user mr-3 iconNav"></span> Account Details <span>
              <i class="far  fa-plus-square" id="account1" aria-hidden="true" style="float: right; margin-top: 9px"></i>
              <i class="far fa-minus-square" id="account2" style="float: right; margin-top: 8px; display: none;" aria-hidden="true"></i>
            </span></a>
        </li>
        <li id="li5" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/UserImage')}}"><span class="fa fa-male mr-3 ml-5 iconNav"></span> Change Profile </a>
        </li>
        <li id="li6" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/ChangePassword')}}"><span class="fa fa-unlock mr-3 ml-5 iconNav"></span>Change Password</a>
        </li>
        <li id="li61" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/Contact')}}"><span class="fa fa-user mr-3 ml-5 iconNav"></span>Contact Info</a>
        </li>
        <!-- //Account Details -->

        <!-- Exams -->

        <li>
          <a href="#"><span class="fa fa-user mr-3 iconNav"></span> Exams <span>
              <i class="far  fa-plus-square" aria-hidden="true" id="exam1" style="float: right; margin-top: 8px"></i>
              <i class="far fa-minus-square" id="exam2" style="float: right; margin-top: 8px; display: none;" aria-hidden="true"></i>
            </span></a>
        </li>
        <li id="li9" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/AcademicDetails')}}"><span class="fa fa-database mr-3 ml-5 iconNav"></span>Academic
            Details </a>
        </li>
        <li id="li7" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/OnlineExam')}}"><span class="fa fa-address-book mr-3 ml-5 iconNav"></span> Online Exam
          </a>
        </li>
        <li id="li8" style="display: none; background-color: #3a3b3c;">
          <a href="{{url('Home/ViewExam')}}"><span class="fa fa-eye mr-3 ml-5 iconNav"></span>View Exam </a>
        </li>
        <!-- //Exams -->

        <!-- LogOut -->
        <li>
          <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="user-select: none;" onclick="document.getElementById('sound1').play();"><span class="fas fa-sign-out-alt mr-3 iconNav"></span>Log Out</a>
        </li>
        <!-- LogOut -->

      </ul>
    </nav>
    <!-- // Left Nav Bar -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog opacity-100 ">
        <div class="modal-content opacity-75 " style="background-color: #3b3b3b; color: rgb(255, 255, 255); ">
          <div class="modal-body text-center opacity-100" style="border-bottom:1px solid yellow ;">
            Are you sure? You want to logout
          </div>
          <div class="modal-footer opacity-100" style="align-items: center; justify-content: center; opacity: 1;">
            <form action="{{url('api/logout')}}" method="get">
              <Button title="Log Out" type="submit" class="btn btn-danger opacity-100" onclick="document.getElementById('sound2').play();"> yes </Button>
              <button type="button" title="No" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- sounds -->
    <audio id="sound1" src="{{url('sound/messagebox.mp3')}}" preload="auto"></audio>
    <audio id="sound2" src="{{url('sound/smallbox.mp3')}}" preload="auto"></audio>
    <!-- //sounds -->


    <script src="{{url('/js/jquery.min.js')}}"></script>
    <script src="{{url('/js/popper.js')}}"></script>
    <script src="{{url('/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/js/main.js')}}"></script>
</body>

</html>