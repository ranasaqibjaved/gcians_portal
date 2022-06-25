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
    <link rel="stylesheet" href="{{ asset('css/home/INTELAVAILForm.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->

    <title>Vouchar</title>
</head>

<body>

    @include('Home/HeaderHome')

    <div class="container ">
        <!-- containers will start from here -->
        <div class="container row  ">
            <!-- Top text and back link -->
            <div class="row">
                <a href="/Home" class="col-2 text-decoration-none text-dark fw-bold">
                    <i class="fa fa-arrow-left" aria-hidden="true"> Back</i></a>
            </div>
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success tw-bold">Vouchar</h3>
            <!-- List -->

            <!-- Only for studnets -->
            @if(session('usertype') == 'student')

            <table class="table table-striped fs-5">
                <thead>
                    <tr style="background-color: rgb(78, 77, 77); color: aliceblue;">
                        <th scope="col">Info</th>
                        <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td scope="row">Name</td>
                        <th class=" fw-light">{{session('name')}}</th>
                    </tr>

                    <tr>
                        <td scope="row">Email</td>
                        <th class=" fw-light">{{session('email')}}</th>
                    </tr>

                    <tr>
                        <td scope="row">Semster</td>
                        @if(isset($feedetails->semester))
                        <th class=" fw-light">{{$feedetails->semester}}</th>
                        @endif
                    </tr>

                    <tr>
                        <td scope="row">Program</td>
                        @if(isset($feedetails->program))
                        <th class=" fw-light">{{$feedetails->program}}</th>
                        @endif
                    </tr>

                    <tr>
                        <td scope="row">Banks</td>
                        @if(isset($feedetails->bank))
                        <th class=" fw-light">{{$feedetails->bank}}</th>
                        @endif
                    </tr>

                    <tr>
                        <td scope="row">Vouchar Number</td>
                        @if(isset($feedetails->vouchar_no))
                        <th class=" fw-light">{{$feedetails->vouchar_no}}</th>
                        @endif
                    </tr>

                    <tr>
                        <td scope="row">Due Date</td>
                        @if(isset($feedetails->Due_date))
                        <th class=" fw-light">{{$feedetails->Due_date}}</th>
                        @endif
                    </tr>

                    <tr>
                        <td scope="row">Net Amount</td>
                        @if(isset($feedetails->net_amount))
                        <th class=" fw-light">{{$feedetails->net_amount}}</th>
                        @endif
                    </tr>


                    <tr>
                        <td scope="row">Vouchar File</td>
                        @if(isset($feedetails->Vouchar_file))
                        <th class=" fw-light">

                            <a href="/storage/vouchers/{{$feedetails->Vouchar_file}}" title="Print Vouchar"> <i class="fa fa-dollar"></i>Print Vouchar</a>
                            ({{$feedetails->Vouchar_file}})
                        </th>
                        @endif
                    </tr>

                    <tr>
                        <td scope="row">Issue Date</td>
                        @if(isset($feedetails->created_at))
                        <th class=" fw-light">{{$feedetails->created_at}}</th>
                        @endif
                    </tr>

                </tbody>
            </table>
            @endif
            <!-- //Only for students -->

            @if(session('usertype') == 'admin')
            <!-- Voucahr Details Only for admins-->
            <table class="table">
                <thead>
                    <tr style="background-color: rgb(78, 77, 77); color: aliceblue;">
                        <th>ID</th>
                        <th>Sem.</th>
                        <th>Program</th>
                        <th>Banks</th>
                        <th>Voucaher Number</th>
                        <th>Due Date</th>
                        <th>Net Amount</th>
                        <th>Voucaher</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($AdminViewVoucahr))
                    @foreach($AdminViewVoucahr as $vdata)
                    <tr>
                        <td>{{$vdata->id}}</td>
                        <td class="table-active">{{$vdata->semester}}</td>
                        <td>{{$vdata->program}}</td>
                        <td class="table-active">{{$vdata->bank}}</td>
                        <td>{{$vdata->vouchar_no}}</td>
                        <td class="table-active">{{$vdata->Due_date}}</td>
                        <td>{{$vdata->net_amount}}</td>
                        <td class="table-active"><a href="/storage/vouchers/{{$vdata->Vouchar_file}}">{{$vdata->Vouchar_file}}</a></td>

                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>

            <!-- UPLOAD VOUCHER HERE --ONLY FOR ADMIN -->
            <div id="section3" class="section-w3ls border-1">
                <form action="{{route('AddVouchar')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- success -->
                    @if ($message = Session::get('VF'))
                    <div class="alert success alert-block">
                        <button type="button" class="close d-flex flex-row-reverse" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <!--// success -->

                    <!-- Error -->
                    @if ($message = Session::get('VFError'))
                    <div class="alert error alert-block">
                        <button type="button" class="close d-flex flex-row-reverse" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <h3 class="text-center mb-3 bg-success ">Upload Fee Vouchar</h3>

                    <div class="row my-2 border border-dark rounded-2 p-4" style="border: 1px solid black;">

                        <div class="input"><input type="number" name="id" placeholder="Enter Id from Above Table" required></div>
                        <div class="input"><input type="number" name="semester" placeholder="Semester" required></div>
                        <div class="input"><input type="text" name="program" placeholder="Program" required></div>
                        <div class="input"><input type="text" name="bank" placeholder="Bank" required></div>
                        <div class="input"><input type="number" name="vouchar_no" placeholder="Vouchar_Number" required>
                        </div>
                        <div class="input">
                            <label for="Due_date">Due Date</label>
                            <input type="date" name="Due_date" placeholder="Due Date" required>
                        </div>
                        <div class="input"><input type="number" name="net_amount" placeholder="Net Amount" required>
                        </div>
                        <div class="input"><input type="file" name="file" placeholder="Voucahr File" required>
                        </div>

                        <button type="submit" name="submit" class="border-0 col-2" title="Upload">
                            <span class="fa fa-upload btn rounded text-success bg-dark" aria-hidden="true"> Upload
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            @endif


        </div>
    </div>


</body>

</html>