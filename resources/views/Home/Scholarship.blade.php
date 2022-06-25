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

  <title>Scholarship Page</title>
</head>

<body>

  @include('Home/HeaderHome')

  <div class="container ">
    <!-- containers will start from here -->
    <div class="container row pt-3 mt-2 ">
      <!-- Top text and back link -->
      <div class="row">
        <a href="/Home" class="col-2 text-decoration-none text-dark fw-bold">
          <i class="fa fa-arrow-left" aria-hidden="true"> Back</i><b></a>
      </div>
      <h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success tw-bold">Scholarship Page</h3>
      <!-- List -->

      <div style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">

        <h5>Here is all information About Scholarships in Pakistan and Abroad</h5>
        <h5>Please Visit this page now and later to get new Scholarships</h5>

      </div>

      <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

      @if(isset($ScDATA))
      @foreach($ScDATA as $images)
      <div class="col " style="border-bottom: 1px solid black ;">

        <a href="{{$images->link}}">
          <img src="{{ url('storage/Scholarships/'.$images->file_name) }}" title="{{$images->link}}" width="500" height="150" class="NoticeBoardImage img-fluid m-3  border border-2 border-success rounded justify-content-center mx-auto d-block">
        </a>
        DISCRIPTION :<i class="fw-bold"> {{$images->description}}</i> <a href="{{$images->link}}">Click here to visit website</a>

      </div>
      @endforeach
      <div class="d-flex justify-content-end">
        {{ $ScDATA->links() }}
      </div>
      @endif

      @if(session('usertype') == 'admin')

      <!-- // only for admin -->
      <form action="{{route('scholarshipUpload')}}" method="post" enctype="multipart/form-data">
        @csrf

        @if(session()->has('SF'))
        <div class="success" style="overflow: auto;">
          {{ session()->get('SF') }}
        </div>
        @endif

        <div class="row my-2 border border-dark rounded-4 border rounded" style="border: 1px solid black;">
          <h5 class="bg-success fw-bold text-center py-1">
            Upload New Scholarship
          </h5>

          <div class="input">
            <input type="text" placeholder="Add description" name="description" required>
          </div>
          <div class="input">
            <input type="text" placeholder="Add link of website" name="link" required>
          </div>
          <div class="input">
            <input class=" justify-content-center mb-2" type="file" name="file" id="chooseFile1" required>
          </div>
          <button type="submit" name="submit">
            <span class="fa fa-upload btn rounded text-success bg-dark w-100"> Upload </span>
          </button>
        </div>
      </form>
      <!-- //End only for admin -->
      @endif





      <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    </div>
  </div>


</body>

</html>