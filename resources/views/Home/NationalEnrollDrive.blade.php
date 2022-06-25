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

    <title>National Inrollment Drive</title>
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
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">National Enrollment Drive</h3>




            <p class="fs-3 fw-bold ">Please Fill Up This form to enter your details in National Enrollment Drive</p>
            <form action="{{route('NedUpload')}}" method="post">
                @csrf
                <!-- show errors here -->
                @if($errors->any())
                <div class="error">
                    <h4>{{$errors->first()}}</h4>
                </div>
                @endif

                <!-- show errors here -->
                @if($errors->any())
                <div class="error">
                    <h4>{{$errors->first()}}</h4>
                </div>
                @endif
                <br>
                <!--// show errors here -->
                @if(session()->has('Ned'))
                <div class="success" style="overflow: auto;">
                    {{ session()->get('Ned') }}
                </div>
                @endif

                <label for="name" class="py-1">Enter Your Name</label>
                <div class="input">
                    <input type="text" name="name" placeholder="Name" value="{{session('name')}}" required />
                </div>

                <label for="email" class="py-1">Your Email</label>
                <div class="input">
                    <input type="email" name="email" placeholder="Email" value="{{session('email')}}" required readonly />
                </div>

                <label for="fname" class="py-1">Enter Your Father Name</label>
                <div class="input">
                    <input type="text" name="fname" placeholder="Father Name" required />
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

                <label for="opinion">Are You satisfied with your university </label>
                <div class="input  ">
                    <textarea class="form-control" placeholder="Are You satisfied with your university" name="opinion" id="opinion"></textarea>
                </div>




                @if( isset($NedView1))
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