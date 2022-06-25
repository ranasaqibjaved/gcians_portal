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

    <title>User Image</title>
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
            <h3 class="col justify-content-center text-center d-flex mb-4 pb-4 text-success">User Image</h3>
            <!-- List -->

            <div class="row ">
                @if( isset($UIfile[0]->email))
                <a href="{{ url('storage/UserImage/'.$UIfile[0]->email.'.jpg') }}">
                    <img src="{{ url('storage/UserImage/'.$UIfile[0]->email.'.jpg') }}" width="200" height="200" class="justify-content-center mx-auto d-block rounded-circle justify-content-center text-center align-item-center ">
                </a>
                @else
                <a href="{{ url('storage/UserImage/default.jpg') }}">
                    <img src="{{ url('storage/UserImage/default.jpg') }}" width="200" height="200" class="justify-content-center mx-auto d-block rounded-circle justify-content-center text-center align-item-center ">
                </a>
                @endif
            </div>

            <!-- // only for admin -->

            <form action="{{route('UIUpload')}}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- show errors here -->
                @if($errors->any())
                <div class="error">
                    <h4>{{$errors->first()}}</h4>
                </div>
                @endif
                <br>


                @if ($message = Session::get('uiu'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <div class="row my-2 border border-dark rounded-2 p-4" style="border: 1px solid black;">
                    <h3 class="text-center mb-3 rounded " style="background-color: green;color: black;">Change your
                        Profile Image
                    </h3>
                    <input type="email" name="email" class="col d-none" value="{{session('email')}}" required readonly>
                    <div style="border: 1px solid ; border-radius: 20px; width: 50; height: 50;">
                        <input class="col-5 justify-content-center my-auto" type="file" name="file" id="chooseFile1" required>
                    </div>
                    <button type="submit" name="submit" class="border-0 col-2" title="Upload">
                        <span class="fa fa-upload btn rounded text-success bg-dark" aria-hidden="true"> Upload </span>
                    </button>
                </div>
            </form>
            <!-- //End only for admin -->



        </div>
    </div>

</body>

</html>