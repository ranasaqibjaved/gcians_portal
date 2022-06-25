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
  <link rel="stylesheet" href="{{url('css/home.css')}}" type="text/css" media="all" />
  <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css" media="all" />
  <!-- Style-CSS -->

  <title>Search</title>
</head>

<body>

  @include('Home/HeaderHome')

  <div class="container ">
    <!-- containers will start from here -->
    <div class="container row pt-3 mt-2">
      <!-- Top text and back link -->
      <div class="row">
        <a href="/Home" class=" text-decoration-none text-dark fw-bold">
          <i class="fa fa-arrow-left" aria-hidden="true"> Back</i></a>
      </div>
      <h3 class="col justify-content-center text-center d-flex mb-4 pb-1 text-success">Search Result</h3>
      <!-- List -->

      <!-- Success Message -->
      @if(session()->has('Result'))
      <div class="fw-bold ">
        {{ session()->get('Result') }}
      </div>
      @endif
      <!-- show errors here -->

      <nav aria-label="Page navigation example">
        <ul class="list-group list-group-flush pagination">
          @if(isset($Squery))
          @foreach($Squery as $sa)
          <li class="list-group-item d-flex justify-content-between align-items-start col border">
            <span> <img src="{{ url('storage/UserImage/'.$sa->email.'.jpg') }}" alt="Gcuf Logo" class="rounded-circle mx-2 UserImage" height="50" width="50"></span>
            <div class="ms-2 me-auto ">
              <div class="fw-bold text-uppercase text-success">{{$sa->name}}</div>
              <p class="fw-light">{{$sa->message}}</p>
            </div>
            <span class="badge bg-secondary rounded-pill">{{$sa->created_at}}</span>
          </li>
          @endforeach

          @else
          <h1>No result found of this query</h1>
          @endif

        </ul>
      </nav>


    </div>
  </div>


</body>

</html>