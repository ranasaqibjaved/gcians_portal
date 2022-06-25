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

    <title>Contact Information</title>
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
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Contact</h3>



            <h3 class="text-center pt-1 mt-1">Upload Your Contact Info</h3>
            <form action="{{route('CUpload')}}" method="post">
                @csrf

                <!-- success -->
                @if ($message = Session::get('SuccessC'))
                <div class="alert success alert-block">
                    <button type="button" class="close d-flex flex-row-reverse" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                <!--// success -->


                <label for="fathername" class="py-1">Enter Your Father Name</label>
                <div class="input">
                    <input type="text" type="text" name="fathername" placeholder="Father Name" required />
                </div>

                <label for="telephone" class="py-1">Enter Your Phone Number</label>
                <div class="input">
                    <input type="text" name="telephone" placeholder="03xx-xxxxxxx" required />
                </div>

                <label for="email" class="py-1">Enter Your Email</label>
                <div class="input">
                    <input type="email" name="email" placeholder="Email" value="{{session('email')}}" readonly required />
                </div>

                <label for="dateofberth" class="py-1">Enter Your Date Of Birth</label>
                <div class="input">
                    <input type=date name="dateofberth" required />
                </div>

                <label for="homeaddress" class="py-1">Enter Your Home Address</label>
                <div class="input">
                    <input type="text" name="homeaddress" placeholder="Home Address" required />
                </div>

                <div>
                    <p class="fs-5">Select Your Gender</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>

                <label for="message">Are You satisfied with your university </label>
                <div class="input  ">
                    <textarea class="form-control" name="message" placeholder="Are You satisfied with your university" id="floatingTextarea"></textarea>
                </div>


                <button type="submit" class="submit">Submit</button>
            </form>







            <!--  -->
        </div>
    </div>


</body>

</html>