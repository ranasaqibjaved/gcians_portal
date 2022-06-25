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

    <title>View Exam</title>
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
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Date Sheet </h3>
            <!-- List -->

            <!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->
            @if( session('usertype') == 'student')
            <p>Date sheet will be uploaded soon as papers are to be conducted</p>
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
                                <th scope="col">Sunday</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ( $i = 0 ; $i < count($timetable1) ; $i++) <tr>
                                <th scope="row">{{$timetable1[$i]->course_code}}</th>
                                <th scope="row">{{$timetable1[$i]->teacher_name}}</th>


                                </tr>
                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
            @endif


            <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////// -->

        </div>
    </div>


</body>

</html>