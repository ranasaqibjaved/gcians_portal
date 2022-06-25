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
    <title>Notice Board</title>
</head>

<body>
    @include('Home/HeaderHome')
    <div class="container ">
        <!-- containers will start from here -->
        <div class="container row pt-1 mt-1 ">
            <!-- Top text and back link -->
            <div class="row">
                <a href="/Home" class=" text-decoration-none text-dark fw-bold ">
                    <i class="fa fa-arrow-left" aria-hidden="true"> Back</i> </a>
            </div>
            <h3 class="col justify-content-center text-center d-flex mb-4 pb-4 text-success">Notice Board</h3>
            <!-- List -->
            <div class="row ">
                @if(isset($NBfile))
                @foreach($NBfile as $images)
                <div class="col  m-1 " style="border: 1px solid black;" title="{{$images->description}}">
                    <a href="{{ url('storage/NoticeBoard/'.$images->name) }}">
                        <img src="{{ url('storage/NoticeBoard/'.$images->name) }}" width="200" height="200" class="NoticeBoardImageDiv  m-1  border border-2 border-success rounded justify-content-center mx-auto d-block">
                        <p style="color: black; font: 0.9em sans-serif;  text-transform: capitalize;">
                            <b>Description :</b> {{$images->description}}
                        </p>
                    </a>
                </div>
                @endforeach
                @endif
            </div>



            @if(session('usertype') == 'admin')
            <!-- // only for admin -->

            <!-- Success success -->
            @if(session()->has('fileuploadedsuccessfully'))
            <div class="success">
                {{ session()->get('fileuploadedsuccessfully') }}
            </div>
            @endif
            <form action="{{route('NBUpload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- show errors here -->
                @if($errors->any())
                <div class="error">
                    <h4>{{$errors->first()}}</h4>
                </div>
                @endif
                <br>
                <!--// show errors here -->
                @if(session()->has('NBfileuploadedsuccessfully'))
                <div class="success" style="overflow: auto;">
                    {{ session()->get('NBfileuploadedsuccessfully') }}
                </div>
                @endif

                <div class="row my-2 border border-dark rounded-4 border rounded" style="border: 1px solid black;">
                    <h5 class="bg-success fw-bold text-center py-1">
                        Upload Notifications
                    </h5>

                    <input class=" justify-content-center mb-2" type="file" name="file" id="chooseFile1" required>
                    <input type="text" placeholder="Add description" name="description" required>
                    <button type="submit" name="submit">
                        <span class="fa fa-upload btn rounded text-success bg-dark w-100"> Upload </span>
                    </button>
                </div>
            </form>
            <!-- //End only for admin -->
            @endif

        </div>
    </div>


</body>

</html>