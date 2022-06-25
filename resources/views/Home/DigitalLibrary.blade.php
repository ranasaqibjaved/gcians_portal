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

    <title>Digital Liberary</title>
</head>

<body>

    @include('Home/HeaderHome')

    <div class="container ">
        <!-- containers will start from here -->
        <div class="container row py-3 my-2 ">
            <!-- Top text and back link -->
            <div class="row">
                <a href="/Home" class="col-2 text-decoration-none text-dark fw-bold">
                    <i class="fa fa-arrow-left" aria-hidden="true"> Back</i></a>
            </div>
            <h3 class="col justify-content-center text-center d-flex mb-4 pb-4 text-success">Digital Liberary</h3>
            <!-- List -->
            <h5>All Books and Notes will be availiable here </h5>
            @if(isset($DLfile))
            @foreach($DLfile as $images)
            <div class="row ">
                <div class="col-2 NoticeBoardImageDiv">
                    <a href="{{ url('storage/DIGITAL_LIBRARY/'.$images->name) }}">
                        @if($images->extention == 'pdf')
                        <img src="{{ url('storage/DIGITAL_LIBRARY/'.'pdf.png') }}" width="200" height="200" class="NoticeBoardImageDiv  m-1  border border-2 border-success rounded justify-content-center mx-auto d-block">
                        @elseif($images->extention == 'pptx')
                        <img src="{{ url('storage/DIGITAL_LIBRARY/'.'pptx.png') }}" width="200" height="200" class="NoticeBoardImageDiv  m-1  border border-2 border-success rounded justify-content-center mx-auto d-block">
                        @elseif($images->extention == 'rar')
                        <img src="{{ url('storage/DIGITAL_LIBRARY/'.'rar.png') }}" width="200" height="200" class="NoticeBoardImageDiv  m-1  border border-2 border-success rounded justify-content-center mx-auto d-block">
                        @elseif($images->extention == 'zip')
                        <img src="{{ url('storage/DIGITAL_LIBRARY/'.'rar.png') }}" width="200" height="200" class="NoticeBoardImageDiv  m-1  border border-2 border-success rounded justify-content-center mx-auto d-block">
                        @else
                        <img src="{{ url('storage/DIGITAL_LIBRARY/'.$images->name) }}" width="200" height="200" class="NoticeBoardImageDiv  m-1  border border-2 border-success rounded justify-content-center mx-auto d-block">
                        @endif
                    </a>
                </div>
                <b>Description:</b>
                <p style="font-family: 'Times New Roman', Times, serif;"> {{$images->description}}</p>
            </div>
            @endforeach
            @endif
            <div class="d-flex justify-content-end">
                {{ $DLfile->links() }}
            </div>


            <!-- // only for admin -->
            @if(session('usertype') == 'admin')

            <!-- Success success -->
            @if(session()->has('fileuploadedsuccessfully'))
            <div class="success">
                {{ session()->get('fileuploadedsuccessfully') }}
            </div>
            @endif

            <form action="{{route('DLUpload')}}" method="post" enctype="multipart/form-data">
                @csrf

                <!-- show errors here -->
                @if($errors->any())
                <div class="error">
                    <h4>{{$errors->first()}}</h4>
                </div>
                @endif
                <br>
                <!--// show errors here -->
                @if(session()->has('DLfileuploadedsuccessfully'))
                <div class="success">
                    {{ session()->get('DLfileuploadedsuccessfully') }}
                </div>
                @endif

                <div class="row  border border-dark rounded-4 border rounded" style="border: 1px solid black;">
                    <p class="fs-3 text-center" style="background-color: green;color: black; ">Upload New Files in
                        Liberary</p>
                    <div class="input">
                        <input class="col justify-content-center " type="file" name="file" id="chooseFile1" required>
                    </div>
                    <div class="input">
                        <input class="col justify-content-center " type="text" name="description" placeholder="Enter Description" required>
                    </div>
                    <button type="submit" name="submit" class="border-0 col">
                        <span class="fa fa-upload btn rounded text-success bg-dark w-100" aria-hidden="true">Upload
                        </span>
                    </button>
                </div>
            </form>
            <!-- //End only for admin -->

            @endif

        </div>
    </div>


</body>

</html>