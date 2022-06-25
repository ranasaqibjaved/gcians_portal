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


    @if(session('usertype') == 'teacher')
    <title>Upload Student Result</title>
    @else
    <title>Academic Details</title>
    @endif
    <style>
        .hiddenRow {
            padding: 0 !important;
        }

        body {
            overflow-x: auto;
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
            @if(session('usertype') == 'teacher')
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Upload Student Result</h3>
            @else
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Academic Details</h3>
            @endif
            <!-- List -->

            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <!-- Only For Students -->
            @if(session('usertype') == 'student')
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-condensed table-striped">
                            <tbody>
                                <tr data-toggle="collapse" data-target="#semester1" class="accordion-toggle">
                                    <td><i class="fa fa-plus btn btn-success"></i></td>
                                    <td class="fw-bold fs-2">Semester 1</td>
                                </tr>
                                <tr>
                                <tr>
                                    <td colspan="12" class="hiddenRow">
                                        <div class="accordian-body collapse" id="semester1">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr class="info">
                                                        <th>SN</th>
                                                        <th>Subject Title</th>
                                                        <th>Sem.Work</th>
                                                        <th>Mid.Term</th>
                                                        <th>Theory</th>
                                                        <th>Parct.</th>
                                                        <th>Total Marks</th>
                                                        <th>Max Marks</th>
                                                        <th>Grade</th>
                                                        <th>Q.P</th>
                                                        <th>Marks%</th>
                                                        <th>Attend.%</th>
                                                        <th>Remarks</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <p style="display: none;">{{$total1=0}} ,{{$max1=0}}</p>
                                                    @if(isset($sem1))
                                                    @for ( $i = 0 ; $i < count($sem1) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                        <td class="fw-bold">{{$i+1}}</td>
                                                        <td>{{$sem1[$i]->course_code}}</td>
                                                        <td>{{$sem1[$i]->Sem_work}}</td>
                                                        <td>{{$sem1[$i]->Mid_term}}</td>
                                                        <td>{{$sem1[$i]->Theory}}</td>
                                                        <td>{{$sem1[$i]->Practical}}</td>
                                                        <td>{{$sem1[$i]->Total}}</td>
                                                        <td>{{$sem1[$i]->Maximum}}</td>
                                                        <td>{{$sem1[$i]->Grade}}</td>
                                                        <td>{{$sem1[$i]->Q_P}}</td>
                                                        <td>{{$sem1[$i]->Marks}}</td>
                                                        <td>{{$sem1[$i]->Attendance}}</td>
                                                        <td>{{$sem1[$i]->Remarks}}</td>
                                                        <p style="display: none;">{{ $total1= $total1 + $sem1[$i]->Total }},{{ $max1= $max1 + $sem1[$i]->Maximum}}</p>
                                </tr>
                                @endfor
                                @endif
                            <tfoot>
                                <tr>
                                    <th colspan="3"></th>
                                    <th colspan="3">Total </th>

                                    <th> {{ $total1 }} </th>
                                    <th> {{ $max1 }} </th>
                                    @if($max1 >0)
                                    <td>{{ ($total1/$max1)*100 }}%</td>
                                    @endif

                                </tr>
                            </tfoot>
                            </tbody>
                        </table>
                    </div>
                    </td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>



        <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-condensed table-striped">

                        <tbody>
                            <tr data-toggle="collapse" data-target="#semester2" class="accordion-toggle">
                                <td><i class="fa fa-plus btn btn-success"></i></td>
                                <td class="fw-bold fs-2">Semester 2</td>
                            </tr>
                            <tr>
                                <td colspan="12" class="hiddenRow">
                                    <div class="accordian-body collapse" id="semester2">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr class="info">
                                                    <th>SN</th>
                                                    <th>Subject Title</th>
                                                    <th>Sem.Work</th>
                                                    <th>Mid.Term</th>
                                                    <th>Theory</th>
                                                    <th>Parct.</th>
                                                    <th>Total Marks</th>
                                                    <th>Max Marks</th>
                                                    <th>Grade</th>
                                                    <th>Q.P</th>
                                                    <th>Marks%</th>
                                                    <th>Attend.%</th>
                                                    <th>Remarks</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <p style="display: none;">{{$total2=0}} ,{{$max2=0}}</p>
                                                @if(isset($sem2))
                                                @for ( $i = 0 ; $i < count($sem2) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                    <td class="fw-bold">{{$i+1}}</td>
                                                    <td>{{$sem2[$i]->course_code}}</td>
                                                    <td>{{$sem2[$i]->Sem_work}}</td>
                                                    <td>{{$sem2[$i]->Mid_term}}</td>
                                                    <td>{{$sem2[$i]->Theory}}</td>
                                                    <td>{{$sem2[$i]->Practical}}</td>
                                                    <td>{{$sem2[$i]->Total}}</td>
                                                    <td>{{$sem2[$i]->Maximum}}</td>
                                                    <td>{{$sem2[$i]->Grade}}</td>
                                                    <td>{{$sem2[$i]->Q_P}}</td>
                                                    <td>{{$sem2[$i]->Marks}}</td>
                                                    <td>{{$sem2[$i]->Attendance}}</td>
                                                    <td>{{$sem2[$i]->Remarks}}</td>
                                                    <p style="display: none;">{{ $total2= $total2 +
                                                            $sem2[$i]->Total }},{{ $max1= $max2 + $sem2[$i]->Maximum
                                                            }}</p>
                            </tr>
                            @endfor
                            @endif


                        <tfoot>
                            <tr>
                                <th colspan="3"></th>
                                <th colspan="3">Total </th>

                                <th> {{ $total2 }} </th>
                                <th> {{ $max2 }} </th>
                                @if($max2 >0)
                                <td>{{ ($total2/$max2)*100 }}%</td>
                                @endif

                            </tr>
                        </tfoot>
                        </tbody>
                    </table>
                </div>
                </td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-condensed table-striped">

                    <tbody>
                        <tr data-toggle="collapse" data-target="#semester3" class="accordion-toggle">
                            <td><i class="fa fa-plus btn btn-success"></i></td>
                            <td class="fw-bold fs-2">Semester 3</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="semester3">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="info">
                                                <th>SN</th>
                                                <th>Subject Title</th>
                                                <th>Sem.Work</th>
                                                <th>Mid.Term</th>
                                                <th>Theory</th>
                                                <th>Parct.</th>
                                                <th>Total Marks</th>
                                                <th>Max Marks</th>
                                                <th>Grade</th>
                                                <th>Q.P</th>
                                                <th>Marks%</th>
                                                <th>Attend.%</th>
                                                <th>Remarks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p style="display: none;">{{$total3=0}} ,{{$max3=0}}</p>
                                            @if(isset($sem3))
                                            @for ( $i = 0 ; $i < count($sem3) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                <td class="fw-bold">{{$i+1}}</td>
                                                <td>{{$sem3[$i]->course_code}}</td>
                                                <td>{{$sem3[$i]->Sem_work}}</td>
                                                <td>{{$sem3[$i]->Mid_term}}</td>
                                                <td>{{$sem3[$i]->Theory}}</td>
                                                <td>{{$sem3[$i]->Practical}}</td>
                                                <td>{{$sem3[$i]->Total}}</td>
                                                <td>{{$sem3[$i]->Maximum}}</td>
                                                <td>{{$sem3[$i]->Grade}}</td>
                                                <td>{{$sem3[$i]->Q_P}}</td>
                                                <td>{{$sem3[$i]->Marks}}</td>
                                                <td>{{$sem3[$i]->Attendance}}</td>
                                                <td>{{$sem3[$i]->Remarks}}</td>
                                                <p style="display: none;">{{ $total3= $total3 +
                                                        $sem3[$i]->Total }},{{ $max3= $max3 + $sem3[$i]->Maximum
                                                        }}</p>
                        </tr>
                        @endfor
                        @endif


                    <tfoot>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="3">Total </th>

                            <th> {{ $total3 }} </th>
                            <th> {{ $max3 }} </th>
                            @if($max3 >0)
                            <td>{{ ($total3/$max3)*100 }}%</td>
                            @endif
                        </tr>
                    </tfoot>

                    </tbody>
                </table>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-condensed table-striped">

                    <tbody>
                        <tr data-toggle="collapse" data-target="#semester4" class="accordion-toggle">
                            <td><i class="fa fa-plus btn btn-success"></i></td>
                            <td class="fw-bold fs-2">Semester 4</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="semester4">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="info">
                                                <th>SN</th>
                                                <th>Subject Title</th>
                                                <th>Sem.Work</th>
                                                <th>Mid.Term</th>
                                                <th>Theory</th>
                                                <th>Parct.</th>
                                                <th>Total Marks</th>
                                                <th>Max Marks</th>
                                                <th>Grade</th>
                                                <th>Q.P</th>
                                                <th>Marks%</th>
                                                <th>Attend.%</th>
                                                <th>Remarks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p style="display: none;">{{$total4=0}} ,{{$max4=0}}</p>
                                            @if(isset($sem4))
                                            @for ( $i = 0 ; $i < count($sem4) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                <td class="fw-bold">{{$i+1}}</td>
                                                <td>{{$sem4[$i]->course_code}}</td>
                                                <td>{{$sem4[$i]->Sem_work}}</td>
                                                <td>{{$sem4[$i]->Mid_term}}</td>
                                                <td>{{$sem4[$i]->Theory}}</td>
                                                <td>{{$sem4[$i]->Practical}}</td>
                                                <td>{{$sem4[$i]->Total}}</td>
                                                <td>{{$sem4[$i]->Maximum}}</td>
                                                <td>{{$sem4[$i]->Grade}}</td>
                                                <td>{{$sem4[$i]->Q_P}}</td>
                                                <td>{{$sem4[$i]->Marks}}</td>
                                                <td>{{$sem4[$i]->Attendance}}</td>
                                                <td>{{$sem4[$i]->Remarks}}</td>
                                                <p style="display: none;">{{ $total4= $total4 +
                                                        $sem4[$i]->Total }},{{ $max4= $max4 + $sem4[$i]->Maximum
                                                        }}</p>
                        </tr>
                        @endfor
                        @endif


                    <tfoot>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="3">Total </th>

                            <th> {{ $total4 }} </th>
                            <th> {{ $max4 }} </th>
                            @if($max4 >0)
                            <td>{{ ($total4/$max4)*100 }}%</td>
                            @endif
                        </tr>
                    </tfoot>

                    </tbody>
                </table>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-condensed table-striped">

                    <tbody>
                        <tr data-toggle="collapse" data-target="#semester5" class="accordion-toggle">
                            <td><i class="fa fa-plus btn btn-success"></i></td>
                            <td class="fw-bold fs-2">Semester 5</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="semester5">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="info">
                                                <th>SN</th>
                                                <th>Subject Title</th>
                                                <th>Sem.Work</th>
                                                <th>Mid.Term</th>
                                                <th>Theory</th>
                                                <th>Parct.</th>
                                                <th>Total Marks</th>
                                                <th>Max Marks</th>
                                                <th>Grade</th>
                                                <th>Q.P</th>
                                                <th>Marks%</th>
                                                <th>Attend.%</th>
                                                <th>Remarks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p style="display: none;">{{$total5=0}} ,{{$max5=0}}</p>
                                            @if(isset($sem5))
                                            @for ( $i = 0 ; $i < count($sem5) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                <td class="fw-bold">{{$i+1}}</td>
                                                <td>{{$sem5[$i]->course_code}}</td>
                                                <td>{{$sem5[$i]->Sem_work}}</td>
                                                <td>{{$sem5[$i]->Mid_term}}</td>
                                                <td>{{$sem5[$i]->Theory}}</td>
                                                <td>{{$sem5[$i]->Practical}}</td>
                                                <td>{{$sem5[$i]->Total}}</td>
                                                <td>{{$sem5[$i]->Maximum}}</td>
                                                <td>{{$sem5[$i]->Grade}}</td>
                                                <td>{{$sem5[$i]->Q_P}}</td>
                                                <td>{{$sem5[$i]->Marks}}</td>
                                                <td>{{$sem5[$i]->Attendance}}</td>
                                                <td>{{$sem5[$i]->Remarks}}</td>
                                                <p style="display: none;">{{ $total5= $total5 +
                                                        $sem5[$i]->Total }},{{ $max5= $max5 + $sem5[$i]->Maximum
                                                        }}</p>
                        </tr>
                        @endfor
                        @endif


                    <tfoot>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="3">Total </th>

                            <th> {{ $total5 }} </th>
                            <th> {{ $max5 }} </th>
                            @if($max5 >0)
                            <td>{{ ($total5/$max5)*100 }}%</td>
                            @endif
                        </tr>
                    </tfoot>

                    </tbody>
                </table>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-condensed table-striped">

                    <tbody>
                        <tr data-toggle="collapse" data-target="#semester6" class="accordion-toggle">
                            <td><i class="fa fa-plus btn btn-success"></i></td>
                            <td class="fw-bold fs-2">Semester 6</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="semester6">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="info">
                                                <th>SN</th>
                                                <th>Subject Title</th>
                                                <th>Sem.Work</th>
                                                <th>Mid.Term</th>
                                                <th>Theory</th>
                                                <th>Parct.</th>
                                                <th>Total Marks</th>
                                                <th>Max Marks</th>
                                                <th>Grade</th>
                                                <th>Q.P</th>
                                                <th>Marks%</th>
                                                <th>Attend.%</th>
                                                <th>Remarks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p style="display: none;">{{$total6=0}} ,{{$max6=0}}</p>
                                            @if(isset($sem6))
                                            @for ( $i = 0 ; $i < count($sem6) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                <td class="fw-bold">{{$i+1}}</td>
                                                <td>{{$sem6[$i]->course_code}}</td>
                                                <td>{{$sem6[$i]->Sem_work}}</td>
                                                <td>{{$sem6[$i]->Mid_term}}</td>
                                                <td>{{$sem6[$i]->Theory}}</td>
                                                <td>{{$sem6[$i]->Practical}}</td>
                                                <td>{{$sem6[$i]->Total}}</td>
                                                <td>{{$sem6[$i]->Maximum}}</td>
                                                <td>{{$sem6[$i]->Grade}}</td>
                                                <td>{{$sem6[$i]->Q_P}}</td>
                                                <td>{{$sem6[$i]->Marks}}</td>
                                                <td>{{$sem6[$i]->Attendance}}</td>
                                                <td>{{$sem6[$i]->Remarks}}</td>
                                                <p style="display: none;">{{ $total6= $total6 +
                                                        $sem6[$i]->Total }},{{ $max6= $max6 + $sem6[$i]->Maximum
                                                        }}</p>
                        </tr>
                        @endfor
                        @endif


                    <tfoot>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="3">Total </th>

                            <th> {{ $total6 }} </th>
                            <th> {{ $max6 }} </th>
                            @if($max6 >0)
                            <td>{{ ($total6/$max6)*100 }}%</td>
                            @endif
                        </tr>
                    </tfoot>

                    </tbody>
                </table>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-condensed table-striped">

                    <tbody>
                        <tr data-toggle="collapse" data-target="#semester7" class="accordion-toggle">
                            <td><i class="fa fa-plus btn btn-success"></i></td>
                            <td class="fw-bold fs-2">Semester 7</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="semester7">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="info">
                                                <th>SN</th>
                                                <th>Subject Title</th>
                                                <th>Sem.Work</th>
                                                <th>Mid.Term</th>
                                                <th>Theory</th>
                                                <th>Parct.</th>
                                                <th>Total Marks</th>
                                                <th>Max Marks</th>
                                                <th>Grade</th>
                                                <th>Q.P</th>
                                                <th>Marks%</th>
                                                <th>Attend.%</th>
                                                <th>Remarks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p style="display: none;">{{$total7=0}} ,{{$max7=0}}</p>
                                            @if(isset($sem7))
                                            @for ( $i = 0 ; $i < count($sem7) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                <td class="fw-bold">{{$i+1}}</td>
                                                <td>{{$sem7[$i]->course_code}}</td>
                                                <td>{{$sem7[$i]->Sem_work}}</td>
                                                <td>{{$sem7[$i]->Mid_term}}</td>
                                                <td>{{$sem7[$i]->Theory}}</td>
                                                <td>{{$sem7[$i]->Practical}}</td>
                                                <td>{{$sem7[$i]->Total}}</td>
                                                <td>{{$sem7[$i]->Maximum}}</td>
                                                <td>{{$sem7[$i]->Grade}}</td>
                                                <td>{{$sem7[$i]->Q_P}}</td>
                                                <td>{{$sem7[$i]->Marks}}</td>
                                                <td>{{$sem7[$i]->Attendance}}</td>
                                                <td>{{$sem7[$i]->Remarks}}</td>
                                                <p style="display: none;">{{ $total7= $total7 +
                                                        $sem7[$i]->Total }},{{ $max7= $max7 + $sem7[$i]->Maximum
                                                        }}</p>
                        </tr>
                        @endfor
                        @endif


                    <tfoot>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="3">Total </th>

                            <th> {{ $total7 }} </th>
                            <th> {{ $max7 }} </th>
                            @if($max7 >0)
                            <td>{{ ($total7/$max7)*100 }}%</td>
                            @endif
                        </tr>
                    </tfoot>

                    </tbody>
                </table>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->


    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-condensed table-striped">

                    <tbody>
                        <tr data-toggle="collapse" data-target="#semester8" class="accordion-toggle">
                            <td><i class="fa fa-plus btn btn-success"></i></td>
                            <td class="fw-bold fs-2">Semester 8</td>
                        </tr>
                        <tr>
                            <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="semester8">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="info">
                                                <th>SN</th>
                                                <th>Subject Title</th>
                                                <th>Sem.Work</th>
                                                <th>Mid.Term</th>
                                                <th>Theory</th>
                                                <th>Parct.</th>
                                                <th>Total Marks</th>
                                                <th>Max Marks</th>
                                                <th>Grade</th>
                                                <th>Q.P</th>
                                                <th>Marks%</th>
                                                <th>Attend.%</th>
                                                <th>Remarks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <p style="display: none;">{{$total8=0}} ,{{$max8=0}}</p>
                                            @if(isset($sem8))
                                            @for ( $i = 0 ; $i < count($sem8) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                <td class="fw-bold">{{$i+1}}</td>
                                                <td>{{$sem8[$i]->course_code}}</td>
                                                <td>{{$sem8[$i]->Sem_work}}</td>
                                                <td>{{$sem8[$i]->Mid_term}}</td>
                                                <td>{{$sem8[$i]->Theory}}</td>
                                                <td>{{$sem8[$i]->Practical}}</td>
                                                <td>{{$sem8[$i]->Total}}</td>
                                                <td>{{$sem8[$i]->Maximum}}</td>
                                                <td>{{$sem8[$i]->Grade}}</td>
                                                <td>{{$sem8[$i]->Q_P}}</td>
                                                <td>{{$sem8[$i]->Marks}}</td>
                                                <td>{{$sem8[$i]->Attendance}}</td>
                                                <td>{{$sem8[$i]->Remarks}}</td>
                                                <p style="display: none;">{{ $total8= $total8 +
                                                        $sem8[$i]->Total }},{{ $max8= $max8 + $sem8[$i]->Maximum
                                                        }}</p>
                        </tr>
                        @endfor
                        @endif


                    <tfoot>
                        <tr>
                            <th colspan="3"></th>
                            <th colspan="3">Total </th>

                            <th> {{ $total8 }} </th>
                            <th> {{ $max8 }} </th>
                            @if($max8 >0)
                            <td>{{ ($total8/$max8)*100 }}%</td>
                            @endif
                        </tr>
                    </tfoot>

                    </tbody>
                </table>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>
    <p class="fw-bold justify-content-center text-center ">This is online copy for student information and it’s not valid for court.</p>
    <!-- //End Only for students -->
    @endif
    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->

    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- Only For Admins -->
    @if(session('usertype') == 'admin')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-condensed table-striped">
                    <tbody>
                        <tr data-toggle="collapse" data-target="#semester1" class="accordion-toggle">
                            <td><i class="fa fa-plus btn btn-success"></i></td>
                            <td class="fw-bold fs-2">Info About Result of All student</td>
                        </tr>
                        <tr>
                        <tr>
                            <td colspan="12" class="hiddenRow">
                                <div class="accordian-body collapse" id="semester1">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="info" style="background-color: rgb(78, 77, 77); color: aliceblue;">
                                                <th>SN</th>
                                                <th>Semester</th>
                                                <th>Subject Title</th>
                                                <th>Teacher Name</th>
                                                <th>Student Email</th>
                                                <th>Sem.Work</th>
                                                <th>Mid.Term</th>
                                                <th>Theory</th>
                                                <th>Parct.</th>
                                                <th>Total Marks</th>
                                                <th>Max Marks</th>
                                                <th>Grade</th>
                                                <th>Q.P</th>
                                                <th>Marks%</th>
                                                <th>Attend.%</th>
                                                <th>Remarks</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($resultInfoForAdmin))
                                            @for ( $i = 0 ; $i < count($resultInfoForAdmin) ; $i++) <tr data-toggle="collapse" class="accordion-toggle" data-target="#semester10">
                                                <td class="fw-bold">{{$i+1}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->semester}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->course_code}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->teacher_name}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->email}}</td>

                                                <td>{{$resultInfoForAdmin[$i]->Sem_work}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Mid_term}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Theory}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Practical}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Total}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Maximum}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Grade}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Q_P}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Marks}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Attendance}}</td>
                                                <td>{{$resultInfoForAdmin[$i]->Remarks}}</td>
                                                <p style="display: none;">{{$total=$i+1 }}</p>
                        </tr>
                        @endfor
                        @endif
                    <tfoot>
                        <tr>
                            <th colspan="4">
                                Total Number of students Result: {{ $total }}
                            </th>
                            <th colspan="4">
                                Total Number of Registered Students: {{count($RegisteredStudentInfoForAdmin)}}
                            </th>



                        </tr>
                    </tfoot>
                    </tbody>
                </table>
            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>
    @endif
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <!-- Only fro Teachers -->
    @if(session('usertype') == 'teacher')
    <table class="table">
        <thead>
            <tr style="background-color: rgb(78, 77, 77); color: aliceblue;">
                <th scope="col">SN</th>
                <th scope="col">Student Email</th>
                <th scope="col">Sem.</th>
                <th scope="col">Course Code</th>

                <th>Sem.Work</th>
                <th>Mid.Term</th>
                <th>Theory</th>
                <th>Parct.</th>
                <th>Total Marks</th>
                <th>Max Marks</th>
                <th>Grade</th>
                <th>Q.P</th>
                <th>Marks%</th>
                <th>Attend.%</th>
                <th>Submit</th>
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
                    <form action="{{route('ResultUpload')}}" method="post">
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
                        <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                        <input type="text" class="d-none" name="email" value="{{$studentsSem1[$i]->email}}" required>
                        <td class="table-active">{{$studentsSem1[$i]->email}}</td>

                        <input type="text" class="d-none" name="semester" value="{{$studentsSem1[$i]->semester}}" required>
                        <td>{{$studentsSem1[$i]->semester}}</td>

                        <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                        <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                        <td> <input type="text" size="1" name="Sem_work"></td>
                        <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                        <td> <input type="text" size="1" name="Theory"></td>
                        <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                        <td> <input type="text" size="1" name="Total"></td>
                        <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                        <td> <input type="text" maxlength="2" name="Grade"></td>
                        <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                        <td> <input type="text" size="1" name="Marks_P"></td>
                        <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
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
                            <form action="{{route('ResultUpload')}}" method="post">
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

                                <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                                <input type="text" class="d-none" name="email" value="{{$studentsSem2[$i]->email}}" required>
                                <td class="table-active">{{$studentsSem2[$i]->email}}</td>

                                <input type="text" class="d-none" name="semester" value="{{$studentsSem2[$i]->semester}}" required>
                                <td>{{$studentsSem2[$i]->semester}}</td>

                                <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                                <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                                <td> <input type="text" size="1" name="Sem_work"></td>
                                <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                                <td> <input type="text" size="1" name="Theory"></td>
                                <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                                <td> <input type="text" size="1" name="Total"></td>
                                <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                                <td> <input type="text" maxlength="2" name="Grade"></td>
                                <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                                <td> <input type="text" size="1" name="Marks_P"></td>
                                <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
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
                                    <form action="{{route('ResultUpload')}}" method="post">
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



                                        <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                                        <input type="text" class="d-none" name="email" value="{{$studentsSem3[$i]->email}}" required>
                                        <td class="table-active">{{$studentsSem3[$i]->email}}</td>

                                        <input type="text" class="d-none" name="semester" value="{{$studentsSem3[$i]->semester}}" required>
                                        <td>{{$studentsSem3[$i]->semester}}</td>

                                        <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                                        <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                                        <td> <input type="text" size="1" name="Sem_work"></td>
                                        <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                                        <td> <input type="text" size="1" name="Theory"></td>
                                        <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                                        <td> <input type="text" size="1" name="Total"></td>
                                        <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                                        <td> <input type="text" maxlength="2" name="Grade"></td>
                                        <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                                        <td> <input type="text" size="1" name="Marks_P"></td>
                                        <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
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
                                            <form action="{{route('ResultUpload')}}" method="post">
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

                                                <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                                                <input type="text" class="d-none" name="email" value="{{$studentsSem4[$i]->email}}" required>
                                                <td class="table-active">{{$studentsSem4[$i]->email}}</td>

                                                <input type="text" class="d-none" name="semester" value="{{$studentsSem4[$i]->semester}}" required>
                                                <td>{{$studentsSem4[$i]->semester}}</td>

                                                <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                                                <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                                                <td> <input type="text" size="1" name="Sem_work"></td>
                                                <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                                                <td> <input type="text" size="1" name="Theory"></td>
                                                <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                                                <td> <input type="text" size="1" name="Total"></td>
                                                <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                                                <td> <input type="text" maxlength="2" name="Grade"></td>
                                                <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                                                <td> <input type="text" size="1" name="Marks_P"></td>
                                                <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
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
                                                    <form action="{{route('ResultUpload')}}" method="post">
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


                                                        <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                                                        <input type="text" class="d-none" name="email" value="{{$studentsSem5[$i]->email}}" required>
                                                        <td class="table-active">{{$studentsSem5[$i]->email}}</td>

                                                        <input type="text" class="d-none" name="semester" value="{{$studentsSem5[$i]->semester}}" required>
                                                        <td>{{$studentsSem5[$i]->semester}}</td>

                                                        <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                                                        <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                                                        <td> <input type="text" size="1" name="Sem_work"></td>
                                                        <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                                                        <td> <input type="text" size="1" name="Theory"></td>
                                                        <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                                                        <td> <input type="text" size="1" name="Total"></td>
                                                        <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                                                        <td> <input type="text" maxlength="2" name="Grade"></td>
                                                        <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                                                        <td> <input type="text" size="1" name="Marks_P"></td>
                                                        <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
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
                                                            <form action="{{route('ResultUpload')}}" method="post">
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



                                                                <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                                                                <input type="text" class="d-none" name="email" value="{{$studentsSem6[$i]->email}}" required>
                                                                <td class="table-active">{{$studentsSem6[$i]->email}}</td>

                                                                <input type="text" class="d-none" name="semester" value="{{$studentsSem6[$i]->semester}}" required>
                                                                <td>{{$studentsSem6[$i]->semester}}</td>

                                                                <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                                                                <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                                                                <td> <input type="text" size="1" name="Sem_work"></td>
                                                                <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                                                                <td> <input type="text" size="1" name="Theory"></td>
                                                                <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                                                                <td> <input type="text" size="1" name="Total"></td>
                                                                <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                                                                <td> <input type="text" maxlength="2" name="Grade"></td>
                                                                <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                                                                <td> <input type="text" size="1" name="Marks_P"></td>
                                                                <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
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
                                                                    <form action="{{route('ResultUpload')}}" method="post">
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


                                                                        <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                                                                        <input type="text" class="d-none" name="email" value="{{$studentsSem7[$i]->email}}" required>
                                                                        <td class="table-active">{{$studentsSem7[$i]->email}}</td>

                                                                        <input type="text" class="d-none" name="semester" value="{{$studentsSem7[$i]->semester}}" required>
                                                                        <td>{{$studentsSem7[$i]->semester}}</td>

                                                                        <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                                                                        <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                                                                        <td> <input type="text" size="1" name="Sem_work"></td>
                                                                        <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                                                                        <td> <input type="text" size="1" name="Theory"></td>
                                                                        <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                                                                        <td> <input type="text" size="1" name="Total"></td>
                                                                        <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                                                                        <td> <input type="text" maxlength="2" name="Grade"></td>
                                                                        <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                                                                        <td> <input type="text" size="1" name="Marks_P"></td>
                                                                        <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
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
                                                                            <form action="{{route('ResultUpload')}}" method="post">
                                                                                @csrf
                                                                                <!-- success -->
                                                                                <!-- success -->

                                                                                <!--// success -->
                                                                                <!--// success -->
                                                                                <!-- show errors here -->
                                                                                @if($errors->any())
                                                                                <div class="error">
                                                                                    <h4>{{$errors->first()}}</h4>
                                                                                </div>
                                                                                @endif
                                                                                <!--// show errors here -->

                                                                                <input type="text" class="d-none" name="teacher_name" value="{{session('name')}}" required>

                                                                                <input type="text" class="d-none" name="email" value="{{$studentsSem8[$i]->email}}" required>
                                                                                <td class="table-active">{{$studentsSem8[$i]->email}}</td>

                                                                                <input type="text" class="d-none" name="semester" value="{{$studentsSem8[$i]->semester}}" required>
                                                                                <td>{{$studentsSem8[$i]->semester}}</td>

                                                                                <input type="text" class="d-none " name="course_code" value="{{$TotalStudentsForTeacher[$t]->course_code}}" required>
                                                                                <td class="table-active">{{$TotalStudentsForTeacher[$t]->course_code}}</td>

                                                                                <td> <input type="text" size="1" name="Sem_work"></td>
                                                                                <td class="table-active"> <input type="text" size="1" name="Mid_term"></td>
                                                                                <td> <input type="text" size="1" name="Theory"></td>
                                                                                <td class="table-active"> <input type="text" size="1" name="Practical"></td>
                                                                                <td> <input type="text" size="1" name="Total"></td>
                                                                                <td class="table-active"> <input type="text" size="1" name="Maximum"></td>
                                                                                <td> <input type="text" maxlength="2" name="Grade"></td>
                                                                                <td class="table-active"> <input type="text" size="1" name="Q_P"></td>
                                                                                <td> <input type="text" size="1" name="Marks_P"></td>
                                                                                <td class="table-active"> <input type="text" size="1" name="Attendence_P"></td>
                                                                                <td> <button type="submit">Submit </button> </td>

                                                                            </form>
                                                                            </tr>


                                                                            @endfor
                                                                            @endif
                                                                            @endfor



        </tbody>
    </table>
    @endif
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    </div>
    </div>


</body>

</html>