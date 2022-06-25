<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- //Bootstrap css -->
	<!-- css files -->
	<link rel="stylesheet" href="/css/home/INTELAVAILForm.css" type="text/css" media="all" />
	<!-- Style-CSS -->

	<title>Reset Password</title>
</head>

<body>

	<div class="border-1 m-4 p-4 rounded">



		<form action="/api/resetPassword" method="POST">
			@csrf
			<br>
			<h3 class="bg-success fw-bold text-center rounded py-3 mb-5">Reset Password For Gcian Portal</h3>


			<!-- success -->
			@if(session()->has('PassChangedByToken'))
			<div class="success">
				{{ session()->get('PassChangedByToken') }}
			</div>
			@endif
			<!--// success -->

			<!-- error -->
			@if(session()->has('PassChangedByTokenError'))
			<div class="error">
				{{ session()->get('PassChangedByTokenError') }}
			</div>
			@endif
			<!--// error -->
			@if($errors->any())
			<div class="error">
				<h5>{{$errors->first()}}</h5>
			</div>
			@endif


			<input type="hidden" name="token" value="{{ $token }}">

			<div class="input">
				<span class="fa fa-user" aria-hidden="true"></span>
				<input type="email" placeholder="Enter Your Email Address " name="email" value="{{ old('email') }}" class="ms-3" required autofocus />
			</div>

			<div class="input">
				<span class="fa fa-key " aria-hidden="true"></span>
				<input type="password" placeholder="Enter Password" name="password" id="myInput2" class="ms-3" required autofocus />
				<span class="fa fa-fw fa-eye field_icon toggle-password" aria-hidden="true" onclick="ShowPassword2()"></span>
			</div>
			<div class="input">
				<span class="fa fa-key" aria-hidden="true"></span>
				<input type="password" placeholder="Enter Password Again" name="password_confirmation" class="ms-3" id="myInput3" required autofocus />
				<span class="fa fa-fw fa-eye field_icon toggle-password" aria-hidden="true" onclick="ShowPassword3()"></span>
			</div>
			<button type="submit" class="btn submit">CHANGE PASSWORD</button>
		</form>

		<a class="btn btn-dark  m-4" href="{{url('/')}}">Login To Gcian Portal Instead</a>
	</div>

	<!-- add js -->
	<script src="/js/login.js"></script>
	<script src="https://use.fontawesome.com/db66070aec.js"></script>
	<!-- //add js -->

</body>

</html>