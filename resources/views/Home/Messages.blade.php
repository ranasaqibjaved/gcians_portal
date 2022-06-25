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
    <style>
        .hide {
            display: none;
        }
    </style>

    <title>Messages</title>
</head>

<body>

    @include('Home/HeaderHome')
    <div class="container ">
        <!-- containers will start from here -->
        <div class=" row pt-1 mt-1 ">
            <!-- Top text and back link -->
            <div class="row">
                <a href="/Home" class=" text-decoration-none text-dark fw-bold ">
                    <i class="fa fa-arrow-left" aria-hidden="true"> Back</i></a>
            </div>
            <h3 class="col justify-content-center text-center d-flex mb-2 pb-2 text-success">Messages</h3>
            <!-- List -->
            <nav aria-label="Page navigation example ">
                <ul class="list-group list-group-flush pagination ">
                    @if(isset($Mfile))
                    @foreach($Mfile as $images)

                    <li class="list-group-item d-flex justify-content-between align-items-start col border-1">
                        <span> <img src="{{ url('storage/UserImage/'.$images->email.'.jpg') }}" alt="User image" class="rounded-circle mx-2 UserImage" height="50" width="50"></span>
                        <div class="ms-2 me-auto ">
                            <div class="fw-bold text-uppercase">{{$images->name}}</div>{{$images->message}}
                        </div>
                        <span class="d-flex badge bg-secondary rounded-pill">{{$images->created_at}}</span>
                    </li>
                    @endforeach
                    @else
                    <h3>No Message found</h3>
                    @endif
                </ul>
            </nav>


            <div class="d-flex justify-content-end">
                {!! $Mfile->links() !!}

            </div>

            <form action="{{route('MUpload')}}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- show errors here -->
                @if($errors->any())
                <div class="error">
                    <h4>{{$errors->first()}}</h4>
                </div>
                @endif
                <br>
                <!--// show errors here -->
                <!-- Success Message -->
                @if(session()->has('Mfileuploadedsuccessfully'))
                <div class="success">
                    {{ session()->get('Mfileuploadedsuccessfully') }}
                </div>
                @endif

                <div class="row m-2  border border-dark rounded-4 border rounded" style="border: 1px solid black;">
                    <h3 class="text-center bg-success fw-bold">Upload Your Message</h3>
                    <input type="email" name="email" class="d-none" value="{{session('email')}}" required readonly>
                    <!-- <input type="text" name="user_type" class="d-none" value="{{session('user_type')}}" required readonly> -->
                    <input type="text" class="fw-bold" name="name" value="{{session('name')}}" required readonly>
                    <textarea name="message" rows="10" cols="30" placeholder="Message here" required></textarea>

                    <button type="submit" name="submit" class="  w-100">
                        <span class="fa fa-upload btn rounded text-success bg-dark w-100 fw-bold" aria-hidden="true">
                            Submit </span>
                    </button>
                </div>
            </form>
            <p>BE RESPONSIBLE OF YOUR MESSAGES</p>



        </div>
    </div>

</body>

</html>