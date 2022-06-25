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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- css files -->
    <link rel="stylesheet" href="/css/home/INTELAVAILForm.css" type="text/css" media="all" />
    <!-- Style-CSS -->

    <title>Attendance</title>
    <style>
        .hiddenRow {
            padding: 0 !important;
        }
    </style>
</head>

<body>

    @include('Home/HeaderHome')

    <div class="container ">
        <!-- containers will start from here -->
        <div class="container row pt-3 mt-2 ">
            <!-- Top text and back link -->
            <div class="row">
                <a href="/Home" class="col-2 text-decoration-none text-dark fw-bold">
                    <i class="fa fa-arrow-left" aria-hidden="true"> Back</i></a>
            </div>
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Attendance</h3>
            <!-- List -->
            <p class="fs-5">Minimum Attendance For this semester is 65%</p>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <!-- Only for Students -->
            @if(session('usertype') == 'student')
            @if(isset($Aview))
            @for ( $j = 0 ; $j < count($count) ; $j++) <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-condensed table-striped ">
                            <tbody>
                                <tr data-toggle="collapse" data-target="#a{{$count[$j]->id}}1" class="accordion-toggle">
                                    <td><i class="fa fa-plus btn btn-success"></i></td>
                                    <td class="fw-bold fs-4">{{$count[$j]->course_code}},{{$count[$j]->teacher_name}} </td>
                                </tr>
                                <tr>
                                    <td colspan="12" class="hiddenRow">
                                        <div class="accordian-body collapse" id="a{{$count[$j]->id}}1">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="info">
                                                        <th>SN</th>
                                                        <th>Date</th>
                                                        <th>Present</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <p style="display: none;">{{$total=0}} ,{{$max=0}}</p>
                                                    @for ( $i=0 ; $i < count($Aview) ; $i++) @if($Aview[$i]->subject_title == $count[$j]->course_code )
                                                        <tr data-toggle="collapse" class="accordion-toggle" data-target="#a{{$count[$j]->id}}110">
                                                            <td class="fw-bold">{{$max +1}}</td>
                                                            <td>{{$Aview[$i]->date}}</td>
                                                            @if($Aview[$i]->present)
                                                            <td style="color:green">Present</td>
                                                            @else
                                                            <td style="color:red">Absent</td>
                                                            @endif
                                                            <p style="display: none;">
                                                                Total Presents: {{ $total= $total + $Aview[$i]->present }},
                                                                {{ $max= $max +1 }}
                                                            </p>
                                                        </tr>
                                                        @endif
                                                        @endfor
                                                <tfoot>
                                                    <tr>
                                                        <th> Total Presents:</th>
                                                        <th> {{ $total }} </th>
                                                    </tr>
                                                    <tr>
                                                        <th> Total classes:</th>
                                                        <th> {{ $max }} </th>
                                                    </tr>
                                                    <tr>
                                                        <th> Total Percentage:</th>
                                                        @if($max >0)
                                                        <p style="display:none">{{$T = ($total/$max)*100}}</p>
                                                        @if($T >= 65)
                                                        <th style="color:green">{{$T}}%</th>
                                                        @else
                                                        <th style="color:red">{{$T}}%</th>
                                                        <th style="color:red">Please Attend Classes</th>
                                                        @endif
                                                        @endif
                                                    </tr>
                                                </tfoot>
                            </tbody>
                        </table>
                    </div>

                    </tbody>
                    </table>
                </div>
        </div>
    </div>
    @endfor
    @endif
    @endif
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <!-- Only fro Teachers -->
    @if(session('usertype') == 'teacher')
    <table class="table">
        <thead>
            <tr style="background-color: rgb(78, 77, 77); color: aliceblue;">
                <th scope="col">SN</th>
                <th scope="col">Date</th>
                <th scope="col">Student Email</th>
                <th scope="col">Semester</th>
                <th scope="col">Attendence</th>
                <th scope="col">Submit</th>
            </tr>
        </thead>
        <tbody>
            @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 1 )
                <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                    <i style="color: red;"> SEMESTER : </i> 1
                </p>
                <br>
                @for($i=0 ; $i < count($studentsSem1) ; $i++) <tr>
                    <th class="table-active" scope="row">{{$i+1}}</th>
                    <form action="{{route('AttendenceUpload')}}" method="post">
                        @csrf
                        <!-- success -->
                        @if(session()->has('ATTENDANCE'))
                        <div class="success">
                            {{ session()->get('ATTENDANCE') }}
                        </div>
                        @endif
                        <!--// success -->
                        <!-- show errors here -->
                        @if($errors->any())
                        <div class="error">
                            <h4>{{$errors->first()}}</h4>
                        </div>
                        @endif
                        <!--// show errors here -->

                        <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                        <input type="text" class="d-none" name="email" placeholder="email" value="{{$studentsSem1[$i]->email}}" required>
                        <input type="text" class="d-none" name="subject_title" placeholder="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                        <input type="text" class="d-none" name="teacher_name" placeholder="teacher_name" value="{{session('name')}}" required>
                        <input type="text" class="d-none" name="semester" placeholder="semester" value="{{$studentsSem1[$i]->semester}}" required>
                        <td class="table-active">{{$studentsSem1[$i]->email}}</td>
                        <td>{{$studentsSem1[$i]->semester}}</td>
                        <td class="col table-active">
                            <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                            <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                        </td>
                        <td> <button type="submit">Submit </button> </td>
                    </form>
                    </tr>
                    @endfor
                    @endif
                    @endfor


                    @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 2 )
                        <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                            <i style="color: red;"> SEMESTER : </i> 2
                        </p>
                        <br>
                        @for($i=0 ; $i < count($studentsSem2) ; $i++) <tr>
                            <th class="table-active" scope="row">{{$i+1}}</th>
                            <form action="{{route('AttendenceUpload')}}" method="post">
                                @csrf
                                <!-- success -->

                                <!--// success -->
                                <!-- show errors here -->
                                @if($errors->any())
                                <div class="error">
                                    <h4>{{$errors->first()}}</h4>
                                </div>
                                @endif
                                <!--// show errors here -->

                                <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                                <input type="text" class="d-none" name="email" placeholder="email" value="{{$studentsSem2[$i]->email}}" required>
                                <input type="text" class="d-none" name="subject_title" placeholder="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                                <input type="text" class="d-none" name="teacher_name" placeholder="teacher_name" value="{{session('name')}}" required>
                                <input type="text" class="d-none" name="semester" placeholder="semester" value="{{$studentsSem2[$i]->semester}}" required>
                                <td class="table-active">{{$studentsSem2[$i]->email}}</td>
                                <td>{{$studentsSem2[$i]->semester}}</td>
                                <td class="col table-active">
                                    <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                                    <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                                </td>
                                <td> <button type="submit">Submit </button> </td>
                            </form>
                            </tr>
                            @endfor
                            @endif
                            @endfor


                            @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 3 )
                                <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                                    <i style="color: red;"> SEMESTER : </i> 3
                                </p>
                                <br>
                                @for($i=0 ; $i < count($studentsSem3) ; $i++) <tr>
                                    <th class="table-active" scope="row">{{$i+1}}</th>
                                    <form action="{{route('AttendenceUpload')}}" method="post">
                                        @csrf
                                        <!-- success -->

                                        <!--// success -->
                                        <!-- show errors here -->
                                        @if($errors->any())
                                        <div class="error">
                                            <h4>{{$errors->first()}}</h4>
                                        </div>
                                        @endif
                                        <!--// show errors here -->

                                        <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                                        <input type="text" class="d-none" name="email" placeholder="email" value="{{$studentsSem3[$i]->email}}" required>
                                        <input type="text" class="d-none" name="subject_title" placeholder="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                                        <input type="text" class="d-none" name="teacher_name" placeholder="teacher_name" value="{{session('name')}}" required>
                                        <input type="text" class="d-none" name="semester" placeholder="semester" value="{{$studentsSem3[$i]->semester}}" required>
                                        <td class="table-active">{{$studentsSem3[$i]->email}}</td>
                                        <td>{{$studentsSem3[$i]->semester}}</td>
                                        <td class="col table-active">
                                            <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                                            <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                                        </td>
                                        <td> <button type="submit">Submit </button> </td>
                                    </form>
                                    </tr>
                                    @endfor
                                    @endif
                                    @endfor


                                    @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 4 )
                                        <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                                            <i style="color: red;"> SEMESTER : </i> 4
                                        </p>
                                        <br>
                                        @for($i=0 ; $i < count($studentsSem4) ; $i++) <tr>
                                            <th class="table-active" scope="row">{{$i+1}}</th>
                                            <form action="{{route('AttendenceUpload')}}" method="post">
                                                @csrf
                                                <!-- success -->

                                                <!--// success -->
                                                <!-- show errors here -->
                                                @if($errors->any())
                                                <div class="error">
                                                    <h4>{{$errors->first()}}</h4>
                                                </div>
                                                @endif
                                                <!--// show errors here -->

                                                <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                                                <input type="text" class="d-none" name="email" placeholder="email" value="{{$studentsSem4[$i]->email}}" required>
                                                <input type="text" class="d-none" name="subject_title" placeholder="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                                                <input type="text" class="d-none" name="teacher_name" placeholder="teacher_name" value="{{session('name')}}" required>
                                                <input type="text" class="d-none" name="semester" placeholder="semester" value="{{$studentsSem4[$i]->semester}}" required>
                                                <td class="table-active">{{$studentsSem4[$i]->email}}</td>
                                                <td>{{$studentsSem4[$i]->semester}}</td>
                                                <td class="col table-active">
                                                    <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                                                    <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                                                </td>
                                                <td> <button type="submit">Submit </button> </td>
                                            </form>
                                            </tr>
                                            @endfor
                                            @endif
                                            @endfor


                                            @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 5 )
                                                <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                                                    <i style="color: red;"> SEMESTER : </i> 5
                                                </p>
                                                <br>
                                                @for($i=0 ; $i < count($studentsSem5) ; $i++) <tr>
                                                    <th class="table-active" scope="row">{{$i+1}}</th>
                                                    <form action="{{route('AttendenceUpload')}}" method="post">
                                                        @csrf
                                                        <!-- success -->

                                                        <!--// success -->
                                                        <!-- show errors here -->
                                                        @if($errors->any())
                                                        <div class="error">
                                                            <h4>{{$errors->first()}}</h4>
                                                        </div>
                                                        @endif
                                                        <!--// show errors here -->

                                                        <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                                                        <input type="text" class="d-none" name="email" placeholder="email" value="{{$studentsSem5[$i]->email}}" required>
                                                        <input type="text" class="d-none" name="subject_title" placeholder="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                                                        <input type="text" class="d-none" name="teacher_name" placeholder="teacher_name" value="{{session('name')}}" required>
                                                        <input type="text" class="d-none" name="semester" placeholder="semester" value="{{$studentsSem5[$i]->semester}}" required>
                                                        <td class="table-active">{{$studentsSem5[$i]->email}}</td>
                                                        <td>{{$studentsSem5[$i]->semester}}</td>
                                                        <td class="col table-active">
                                                            <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                                                            <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                                                        </td>
                                                        <td> <button type="submit">Submit </button> </td>
                                                    </form>
                                                    </tr>
                                                    @endfor
                                                    @endif
                                                    @endfor


                                                    @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 6 )
                                                        <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                                                            <i style="color: red;"> SEMESTER : </i> 6
                                                        </p>
                                                        <br>
                                                        @for($i=0 ; $i < count($studentsSem6) ; $i++) <tr>
                                                            <th class="table-active" scope="row">{{$i+1}}</th>
                                                            <form action="{{route('AttendenceUpload')}}" method="post">
                                                                @csrf
                                                                <!-- success -->

                                                                <!--// success -->
                                                                <!-- show errors here -->
                                                                @if($errors->any())
                                                                <div class="error">
                                                                    <h4>{{$errors->first()}}</h4>
                                                                </div>
                                                                @endif
                                                                <!--// show errors here -->

                                                                <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                                                                <input type="text" class="d-none" name="email" placeholder="email" value="{{$studentsSem6[$i]->email}}" required>
                                                                <input type="text" class="d-none" name="subject_title" placeholder="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                                                                <input type="text" class="d-none" name="teacher_name" placeholder="teacher_name" value="{{session('name')}}" required>
                                                                <input type="text" class="d-none" name="semester" placeholder="semester" value="{{$studentsSem6[$i]->semester}}" required>
                                                                <td class="table-active">{{$studentsSem6[$i]->email}}</td>
                                                                <td>{{$studentsSem6[$i]->semester}}</td>
                                                                <td class="col table-active">
                                                                    <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                                                                    <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                                                                </td>
                                                                <td> <button type="submit">Submit </button> </td>
                                                            </form>
                                                            </tr>
                                                            @endfor
                                                            @endif
                                                            @endfor


                                                            @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 7 )
                                                                <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                                                                    <i style="color: red;"> SEMESTER : </i> 7
                                                                </p>
                                                                <br>
                                                                @for($i=0 ; $i < count($studentsSem7) ; $i++) <tr>
                                                                    <th class="table-active" scope="row">{{$i+1}}</th>
                                                                    <form action="{{route('AttendenceUpload')}}" method="post">
                                                                        @csrf
                                                                        <!-- success -->

                                                                        <!--// success -->
                                                                        <!-- show errors here -->
                                                                        @if($errors->any())
                                                                        <div class="error">
                                                                            <h4>{{$errors->first()}}</h4>
                                                                        </div>
                                                                        @endif
                                                                        <!--// show errors here -->
                                                                        <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                                                                        <input type="text" class="d-none" name="email" placeholder="email" value="{{$studentsSem7[$i]->email}}" required>
                                                                        <input type="text" class="d-none" name="subject_title" placeholder="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                                                                        <input type="text" class="d-none" name="teacher_name" placeholder="teacher_name" value="{{session('name')}}" required>
                                                                        <input type="text" class="d-none" name="semester" placeholder="semester" value="{{$studentsSem7[$i]->semester}}" required>
                                                                        <td class="table-active">{{$studentsSem7[$i]->email}}</td>
                                                                        <td>{{$studentsSem7[$i]->semester}}</td>
                                                                        <td class="col table-active">
                                                                            <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                                                                            <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                                                                        </td>
                                                                        <td> <button type="submit">Submit </button> </td>
                                                                    </form>
                                                                    </tr>
                                                                    @endfor
                                                                    @endif
                                                                    @endfor


                                                                    @for($t = 0 ; $t < count($TotalStudentsForTeacher) ; $t++ ) @if( $TotalStudentsForTeacher[$t]->semester == 8 )
                                                                        <p style="color:white ; " class="fw-bold bg-dark"> <i style="color: red;">COURSE_TITLE: </i> {{$TotalStudentsForTeacher[$t]->course_code}}
                                                                            <i style="color: red;"> SEMESTER : </i> 8
                                                                        </p>
                                                                        <br>
                                                                        @for($i=0 ; $i < count($studentsSem8) ; $i++) <tr>
                                                                            <th class="table-active" scope="row">{{$i+1}}</th>
                                                                            <form action="{{route('AttendenceUpload')}}" method="post">
                                                                                @csrf
                                                                                <!-- success -->
                                                                                <!-- success -->
                                                                                @if(session()->has('ATTENDANCE'))
                                                                                <div class="success">
                                                                                    {{ session()->get('ATTENDANCE') }}
                                                                                </div>
                                                                                @endif
                                                                                <!--// success -->
                                                                                <!--// success -->
                                                                                <!-- show errors here -->
                                                                                @if($errors->any())
                                                                                <div class="error">
                                                                                    <h4>{{$errors->first()}}</h4>
                                                                                </div>
                                                                                @endif
                                                                                <!--// show errors here -->

                                                                                <td><input type="date" name="date" value="{{ date('Y-m-d')}}" required></td>
                                                                                <input type="text" class="d-none" name="email" value="{{$studentsSem8[$i]->email}}" required>
                                                                                <input type="text" class="d-none" name="semester" value="{{$studentsSem8[$i]->semester}}" required>
                                                                                <input type="text" class="d-none" name="subject_title" value="{{$TotalStudentsForTeacher[$t]->course_code}} " required>
                                                                                <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>
                                                                                <td class="table-active">{{$studentsSem8[$i]->email}}</td>
                                                                                <td>{{$studentsSem8[$i]->semester}}</td>
                                                                                <td class="col table-active">
                                                                                    <a style="color:green"> Present : <input type="radio" name="present" value="1" required> </a>
                                                                                    <a style="color:red"> Absent : <input type="radio" name="present" value="0" required> </a>
                                                                                </td>
                                                                                <td> <button type="submit">Submit </button> </td>
                                                                            </form>
                                                                            </tr>
                                                                            @endfor
                                                                            @endif
                                                                            @endfor



        </tbody>
    </table>
    @endif



    </div>
    </div>


</body>

</html>