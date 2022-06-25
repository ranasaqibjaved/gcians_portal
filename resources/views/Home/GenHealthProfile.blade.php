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

    <title>General Health Profile</title>
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
            <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">General Health Profile</h3>


            <!-- <p class="fs-3 fw-bold ">Please Fill Up This form to enter your details in our database</p> -->
            <form action="{{route('GHPUpload')}}" method="post">
                @csrf

                <!-- success -->
                @if(session()->has('GHP'))
                <div class="success">
                    {{ session()->get('GHP') }}
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

                <p class="fs-3 fw-bold">Personal Detail</p>

                <label for="name" class="py-1">Enter Your Name</label>
                <div class="input">
                    <input type="text" name="name" placeholder="Name" value="{{session('name')}}" required />
                </div>

                <label for="fname" class="py-1">Enter Your Father Name</label>
                <div class="input">
                    <input type="text" name="fname" placeholder="Father Name" required />
                </div>

                <label for="age" class="py-1">Enter Your Age</label>
                <div class="input">
                    <input type="text" name="age" placeholder="Age" required />
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

                <label for="cnic" class="py-1">Enter Your CNIC Number</label>
                <div class="input">
                    <input type="number" name="cnic" placeholder="Cnic Number" required />
                </div>

                <label for="mobile" class="py-1">Enter Your Phone Number</label>
                <div class="input">
                    <input type="number" name="mobile" placeholder="03xx-xxxxxxx" required />
                </div>

                <label for="email" class="py-1">Your Email Address</label>
                <div class="input">
                    <input type="email" name="email" placeholder="Email" value="{{session('email')}}" required readonly />
                </div>

                <label for="blood_group" class="py-1">Enter Your Blood Group</label>
                <div class="input">
                    <input type="text" name="blood_group" placeholder="Blood Group" required />
                </div>

                <label for="address" class="py-1">Enter Your Home address</label>
                <div class="input">
                    <input type="text" name="address" placeholder="address" required />
                </div>

                <!-- Section B  -->
                <p class="fs-3 fw-bold">General physical Examination (to be filled by the paramedical staff)</p>

                <label for="height" class="py-1">Enter Your Height</label>
                <div class="input">
                    <input type="number" name="height" placeholder="Height" required />
                    <span>cm</span>
                </div>

                <label for="blood_pressure" class="py-1">Enter Your Blood pressure</label>
                <div class="input">
                    <input type="number" name="blood_pressure" placeholder="Blood Pressure" required />
                </div>

                <label for="temperature" class="py-1">Enter Your Temperature</label>
                <div class="input">
                    <input type="number" name="temperature" placeholder="Blood Pressure" required />
                </div>

                <label for="pulse_rate" class="py-1">Enter Your Pulse Rate</label>
                <div class="input">
                    <input type="number" name="pulse_rate" placeholder="Pulse Rate" required />
                </div>

                <label for="abnormality" class="py-1">Any obvious structural abnormality on inspection</label>
                <div class="input">
                    <input type="text" name="abnormality" placeholder="Abnormality?" required />
                </div>

                <label for="overall_health" class="py-1">Overall general physical health on appearance</label>
                <div class="input">
                    <textarea class="w-100" name="overall_health" id="" cols="3" rows="2"></textarea>
                </div>

                <!-- Section C -->
                <p class="fs-3 fw-bold">General Mental Health ( to be filled and authenticated by concerned institution)</p>

                <label for="psychiatric_history" class="py-1">Past psychiatric history, if any</label>
                <div class="input">
                    <input type="text" name="psychiatric_history" placeholder="Psychiatric History?" required />
                </div>

                <label for="decline_academic" class="py-1">A decline in academic performance</label>
                <div class="input">
                    <input type="text" name="decline_academic" placeholder="Decline In Academic?" required />
                </div>

                <label for="manifestation" class="py-1">Manifestation of risky behaviour e.g.
                    increased frequency of vehicle accidents,
                    frequent school light, keeping some
                    weapon like knife etc.</label>
                <div class="input">
                    <input type="text" name="manifestation" placeholder="Manifestation?" required />
                </div>

                <label for="habit" class="py-1">Habit of running away bunking routine
                    classes</label>
                <div class="input">
                    <input type="text" name="habit" placeholder="Habit?" required />
                </div>

                <label for="activities" class="py-1">History of stealing, late coming in
                    classed, involvement in sexual activities</label>
                <div class="input">
                    <input type="text" name="activities" placeholder="Activities?" required />
                </div>

                <label for="bullying" class="py-1">Keeping bad company/friends with habits
                    of bullying using drugs or fights</label>
                <div class="input">
                    <input type="text" name="bullying" placeholder="bullying?" required />
                </div>


                @if( isset($GhpView1))
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