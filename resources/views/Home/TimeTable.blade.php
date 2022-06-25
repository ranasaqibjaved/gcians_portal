<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ url('images/icon.png') }}" type="image/x-icon">

  <!-- Bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- //Bootstrap css -->

  <!-- css files -->
  <link rel="stylesheet" href="/css/home/INTELAVAILForm.css" type="text/css" media="all" />
  <!-- Style-CSS -->


  <title>Time Table</title>
</head>

<body>

  @include('Home/HeaderHome')

  <div class="container ">
    <!-- containers will start from here -->
    <div class="container row pt-3 ">
      <!-- Top text and back link -->
      <div class="row">
        <a href="/Home" class="col-2 text-decoration-none text-dark fw-bold">
          <i class="fa fa-arrow-left" aria-hidden="true"> Back</i></a>
      </div>
      <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Time Table</h3>
      <!-- List -->

      @if( session('usertype') == 'student')
      <div class="tab-content " id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
          <!-- Table is here -->
          <table class="table table-striped">
            <thead>
              <tr style="background-color: rgb(201, 201, 201);">
                <th scope="col" style="border-right: 2px solid black;">Course Code</th>
                <th scope="col">Teacher Name</th>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>
                <!-- <th scope="col">Sunday</th> -->
              </tr>
            </thead>
            <tbody>
              @for ( $i = 0 ; $i < count($timetable1) ; $i++) <tr>
                <th scope="row">{{$timetable1[$i]->course_code}}</th>
                <th scope="row">{{$timetable1[$i]->teacher_name}}</th>

                <td>{{$timetable1[$i]->monday}}<br>
                  @if(($timetable1[$i]->monday == null))
                  @else
                  {{$timetable1[$i]->location}}
                  @endif
                </td>

                <td>{{$timetable1[$i]->tuesday}}<br>
                  @if(($timetable1[$i]->tuesday == null))
                  @else
                  {{$timetable1[$i]->location}}
                  @endif
                </td>

                <td>{{$timetable1[$i]->wednesday}}<br>
                  @if(($timetable1[$i]->wednesday == null))
                  @else
                  {{$timetable1[$i]->location}}
                  @endif
                </td>

                <td>{{$timetable1[$i]->thurday}}<br>
                  @if(($timetable1[$i]->thurday == null))
                  @else
                  {{$timetable1[$i]->location}}
                  @endif
                </td>

                <td>{{$timetable1[$i]->friday}}<br>
                  @if(($timetable1[$i]->friday == null))
                  @else
                  {{$timetable1[$i]->location}}
                  @endif
                </td>

                <td>{{$timetable1[$i]->saturday}}<br>
                  @if(($timetable1[$i]->saturday == null))
                  @else
                  {{$timetable1[$i]->location}}
                  @endif
                </td>
                </tr>
                @endfor
            </tbody>
          </table>
        </div>
      </div>
      @endif


      <!-- FOR TEACHERS ONLY -->

      @if( session('usertype') == 'teacher' )
      <div class="tab-content " id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
          <!-- Table is here -->
          <table class="table table-striped">
            <thead>
              <tr style="background-color: rgb(201, 201, 201);">
                <th scope="col" style="border-right: 2px solid black;">Course Code</th>
                <th scope="col">Semester</th>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>
                <!-- <th scope="col">Sunday</th> -->
              </tr>
            </thead>
            <tbody>
              @for ( $i = 0 ; $i < count($timetableForTeachers) ; $i++) <tr>
                <th scope="row">{{$timetableForTeachers[$i]->course_code}}</th>
                <th scope="row">{{$timetableForTeachers[$i]->semester}}</th>

                <td>{{$timetableForTeachers[$i]->monday}}<br>
                  @if(($timetableForTeachers[$i]->monday == null))
                  @else
                  {{$timetableForTeachers[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForTeachers[$i]->tuesday}}<br>
                  @if(($timetableForTeachers[$i]->tuesday == null))
                  @else
                  {{$timetableForTeachers[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForTeachers[$i]->wednesday}}<br>
                  @if(($timetableForTeachers[$i]->wednesday == null))
                  @else
                  {{$timetableForTeachers[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForTeachers[$i]->thurday}}<br>
                  @if(($timetableForTeachers[$i]->thurday == null))
                  @else
                  {{$timetableForTeachers[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForTeachers[$i]->friday}}<br>
                  @if(($timetableForTeachers[$i]->friday == null))
                  @else
                  {{$timetableForTeachers[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForTeachers[$i]->saturday}}<br>
                  @if(($timetableForTeachers[$i]->saturday == null))
                  @else
                  {{$timetableForTeachers[$i]->location}}
                  @endif
                </td>

                </tr>
                @endfor


            </tbody>
          </table>

        </div>
      </div>
      @endif

      <!-- Only For Admins -->
      @if( session('usertype') == 'admin' )
      <div class="tab-content " id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
          <!-- Table is here -->
          <table class="table table-striped">
            <thead>
              <tr style="background-color: rgb(201, 201, 201);">
                <th scope="col">ID</th>
                <th scope="col" style="border-right: 2px solid black;">Course Code</th>
                <th scope="col">Semester</th>
                <th scope="col">Teacher</th>
                <th scope="col">Monday</th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>

              </tr>
            </thead>
            <tbody>
              @for ( $i = 0 ; $i < count($timetableForAdmin) ; $i++) <tr>

                <th scope="row">{{$timetableForAdmin[$i]->id}}</th>
                <th scope="row">{{$timetableForAdmin[$i]->course_code}}</th>
                <th scope="row">{{$timetableForAdmin[$i]->semester}}</th>
                <th scope="row">{{$timetableForAdmin[$i]->teacher_name}}</th>

                <td>{{$timetableForAdmin[$i]->monday}}<br>
                  @if(($timetableForAdmin[$i]->monday == null))
                  @else
                  {{$timetableForAdmin[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForAdmin[$i]->tuesday}}<br>
                  @if(($timetableForAdmin[$i]->tuesday == null))
                  @else
                  {{$timetableForAdmin[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForAdmin[$i]->wednesday}}<br>
                  @if(($timetableForAdmin[$i]->wednesday == null))
                  @else
                  {{$timetableForAdmin[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForAdmin[$i]->thurday}}<br>
                  @if(($timetableForAdmin[$i]->thurday == null))
                  @else
                  {{$timetableForAdmin[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForAdmin[$i]->friday}}<br>
                  @if(($timetableForAdmin[$i]->friday == null))
                  @else
                  {{$timetableForAdmin[$i]->location}}
                  @endif
                </td>

                <td>{{$timetableForAdmin[$i]->saturday}}<br>
                  @if(($timetableForAdmin[$i]->saturday == null))
                  @else
                  {{$timetableForAdmin[$i]->location}}
                  @endif
                </td>

                </tr>
                @endfor


            </tbody>
          </table>

        </div>
      </div>


      <!-- Update time table by finding its semester and course code -->
      <h1 class="bg-success text-dark text-center my-4"> Update Time Table </h1>
      <form action="{{route('UpdateTimeTable')}}" method="post">
        @csrf

        <!-- success -->
        @if ($message = Session::get('TimeTableUpdated'))
        <div class="alert success alert-block">
          <button type="button" class="close d-flex flex-row-reverse" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif
        <!--// success -->

        <!-- Error -->
        @if ($message = Session::get('TimeTableUpdated2'))
        <div class="alert error alert-block">
          <button type="button" class="close d-flex flex-row-reverse" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif


        <input class="input w-100" type="number" placeholder="Enter Id from above table " name="id" required>

        <div class="d-flex flex-row">
          <select name="semester" class=" fw-bold input" required>
            <option value="" disabled selected>Semester</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
          </select>

          <input type="text" class="input col mx-2" name="course_code" placeholder="Enter Course Code" required>

        </div>

        <input type="text" class="input col mx-2" name="location" placeholder="Location" required>
        <input type="text" class="input col mx-2" name="teacher_name" placeholder="Teacher Name" required>
        <input type="text" class="input col mx-2" name="monday" placeholder="Monday">
        <input type="text" class="input col mx-2" name="tuesday" placeholder="Tuesday">
        <input type="text" class="input col mx-2" name="wednesday" placeholder="Wednesday">
        <input type="text" class="input col mx-2" name="thurday" placeholder="Thursday">
        <input type="text" class="input col mx-2" name="friday" placeholder="Friday">
        <input type="text" class="input col mx-2" name="saturday" placeholder="Saturday">
        <input type="submit" class="btn success bg-success w-100">

      </form>
      @endif
      <!-- End Admin view -->
    </div>
  </div>


</body>

</html>