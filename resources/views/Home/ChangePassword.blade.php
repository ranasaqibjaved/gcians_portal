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

    <title>Change Password</title>
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
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Change Your Password</h3>
            <!-- List -->

            <div id="section3" class="section-w3ls">

                <form action="/api/resetpassBysession" method="POST">
                    @csrf
                    <br>
                    <!-- show errors here -->
                    @if($errors->any())
                    <div class="error">
                        <h4>{{$errors->first()}}</h4>
                    </div>
                    @endif
                    <!--// show errors here -->

                    <!-- success -->
                    @if(session()->has('ok'))
                    <div class="success">
                        {{ session()->get('ok') }}
                    </div>
                    @endif
                    <!--// success -->

                    <input class="d-none" name="email" type="email" value="{{session('email')}}" readonly>
                    <div class="input">
                        <span class="fa fa-key " aria-hidden="true"></span><br>
                        <input class="ms-2" type="password" placeholder="Password" name="password" id="myInput2" required autofocus />
                        <span class="fa fa-fw fa-eye field_icon toggle-password" aria-hidden="true" onclick="ShowPassword2()"></span>
                    </div>
                    <div class="input">
                        <span class="fa fa-key" aria-hidden="true"></span><br>
                        <input class="ms-2" type="password" placeholder="Confirm Password" name="password_confirmation" id="myInput3" required autofocus />
                        <span class="fa fa-fw fa-eye field_icon toggle-password" aria-hidden="true" onclick="ShowPassword3()"></span>
                    </div>
                    <button type="submit" class="submit">CHANGE</button>
                </form>

            </div>



        </div>
    </div>

    <!-- add js -->
    <script src="/js/login.js"></script>
    <!-- //add js -->

</body>

</html>