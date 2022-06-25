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

    <title>Inter Avail Form</title>
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
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Inter Avail Form</h3>




            <p class="fs-3 fw-bold ">Please Fill Up This form to enter your details in our database</p>
            <form action="{{route('IAFUpload')}}" method="post">
                @csrf
                <!-- success -->
                @if(session()->has('IAF'))
                <div class="success">
                    {{ session()->get('IAF') }}
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


                <label for="email" class="py-1">Enter Your Father Name</label>
                <div class="input">
                    <input type="email" name="email" placeholder="Your Email" value="{{session('email')}}" required readonly />
                </div>

                <label for="fname" class="py-1">Enter Your Father Name</label>
                <div class="input">
                    <input type="text" type="text" name="fname" placeholder="Father Name" required />
                </div>

                <label for="mobile" class="py-1">Enter Your Phone Number</label>
                <div class="input">
                    <input type="text" name="mobile" placeholder="03xx-xxxxxxx" required />
                </div>

                <label for="date_of_birth" class="py-1">Enter Your Date Of Birth</label>
                <div class="input">
                    <input type=date name="date_of_birth" required />
                </div>

                <label for="date_of_admission" class="py-1">Enter Your Date Of Admission</label>
                <div class="input">
                    <input type=month name="date_of_admission" required />
                </div>

                <div>
                    <p class="fs-5">Select Your Gender</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>

                <div>
                    <p class="fs-5">Select Your Session</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="session" value="Morning">
                        <label class="form-check-label" for="male">Morning</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="session" value="Evening">
                        <label class="form-check-label" for="female">Evening</label>
                    </div>
                </div>

                <div>
                    <p class="fs-5">Select Your Session</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="session_type" value="Fall">
                        <label class="form-check-label" for="male">Fall</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="session_type" value="Autumn">
                        <label class="form-check-label" for="female">Autumn</label>
                    </div>
                </div>



                @if( isset($IafView1))
                <p class="text-success fw-bold">Information already sent</p>
                <button type="submit" class="submit bg-secondary" disabled title="Information is Already sent">Submit</button>
                @else
                <button type="submit" class="submit">Submit</button>
                @endif
            </form>







            <!--  -->
        </div>
    </div>


</body>

</html>