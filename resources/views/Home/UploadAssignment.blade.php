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
    @if(session('usertype') == 'student')
    <title>Upload Assignment</title>
    @else
    <title>Assignments</title>
    @endif

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
            @if(session('usertype') == 'student')
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success tw-bold">Upload Your Assignment</h3>
            @else
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success tw-bold">Student Assignments</h3>
            @endif
            <!-- List -->

            @if(session('usertype') == 'student')
            <!--ONLY FOR STUDENTS  -->
            @if(session()->has('fileuploadedsuccessfully'))
            <div class="success">
                {{ session()->get('fileuploadedsuccessfully') }}
            </div>
            @endif
            <table class="table  border border-success">
                <thead>
                    <tr class="table-active" style="background-color: rgb(78, 77, 77); color: aliceblue;">
                        <th scope="col">SN</th>
                        <th scope="col">Course Code</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">Upload Assignment</th>
                        <th scope="col"></th>
                        <th scope="col">Uploaded</th>
                    </tr>
                </thead>
                <tbody>


                    @for ( $i = 0 ; $i < count($Semdata) ; $i++) <tr>
                        <th scope="row" class="table-active">{{$i+1}}</th>
                        <th scope="row">{{$Semdata[$i]->course_code}}</th>
                        <th scope="row" class="table-active">{{$Semdata[$i]->teacher_name}}</th>
                        <th scope="row" class=" col-1">
                            <form action="{{route('UA')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Success success -->
                                @if(session()->has('success'))
                                <div class="success">
                                    {{ session()->get('success') }}
                                </div>
                                @endif
                                <!--// show success here -->
                                <!-- show errors here -->
                                @if($errors->any())
                                <div class="error">
                                    <h4>{{$errors->first()}}</h4>
                                </div>
                                @endif


                                <input type="file" name="file" id="chooseFile5">
                                <input type="text" name="email" value="{{session('email')}}" style="display: none;">
                                <input type="text" name="teacherName" value="{{$Semdata[$i]->teacher_name}}" style="display: none;">
                                <input type="text" name="semester" value="{{$Semdata[$i]->semester}}" style="display: none;">
                                <input type="text" name="courseCode" value="{{$Semdata[$i]->course_code}}" style="display: none;">
                                <input type="text" name="studentName" value="{{session('name')}}" style="display: none;">
                        <th>
                            <button type="submit" name="submit" title="Upload your {{$Semdata[$i]->course_code}} Assignment">
                                <span class="fa fa-upload btn bg-success ">Upload</span>
                            </button>
                        </th>
                        </form>
                        </th>
                        @foreach($GhpView1 as $check)
                        @if( $Semdata[$i]->course_code == $check->courseCode )
                        <th scope="row" class="table-active text-success">Yes</th>
                        @endif
                        @endforeach



                        @endfor


                </tbody>
            </table>
            <!--//ONLY FOR STUDENTS  -->
            @endif

            <!-- Only for Teachers -->
            @if(session('usertype') == 'teacher')

            <div class="row ">
                <table class="table">
                    <thead>
                        <tr style="background-color: rgb(78, 77, 77); color: aliceblue;">
                            <th>Student Name</th>
                            <th>Student Email</th>
                            <th>Semester</th>
                            <th>Course Title</th>
                            <th>Assignment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($DataforTeacherView))
                        @foreach($DataforTeacherView as $data)
                        <tr>
                            <td class="table-active">{{$data->studentName}}</td>
                            <td>{{$data->email}}</td>
                            <td class="table-active">{{$data->semester}}</td>
                            <td>{{$data->courseCode}}</td>
                            <td class="table-active"><a href="{{$data->file_path}}">{{$data->filename}}</a></td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>

            </div>
            @endif
            <div class="d-flex justify-content-end">
                {!! $DataforTeacherView->links() !!}

            </div>
            <!-- //Only for Teachers -->



        </div>
    </div>

</body>

</html>