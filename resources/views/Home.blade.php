<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- add icon link -->
	<link rel="icon" href="{{ url('images/icon.png') }}" type="image/x-icon">
	<title>Home</title>
</head>

<body>
	@include('Home/HeaderHome')
	<span id="PageIsBeeingLoaded" class=" position-fixed w-100 h-100 text-center"
		style="background: rgb(51, 51, 51); opacity: 0.9; ">
		<progress></progress>
	</span>
	<div class="container " id="contents">
		<!-- containers will start from here -->
		<div class="container row pt-3 mt-2 ">
			<!-- Top text and back link -->
			<h3 class="col justify-content-center text-center d-flex mb-1 pb-1 text-success">Welcome To Gcian Portal</h3>

			<img class="rounded-pill my-4" src="{{ url('images/yh.jpg') }}"
				style="box-shadow: 0 3px 10px rgba(112, 253, 47, 0.5);" alt="Gcian Portal">
			<h5 style="color: rgb(22, 105, 11);" class="text-center">Welcome to Gcian Portal created by Saqib Javed
				and Yasir Sohail.
			</h5>
			<div style="font-family:Verdana, Geneva, Tahoma, sans-serif ;" class="rounded border  text-wrap">

				<p>In this portal, Here are three types of users, Student, Teacher and Admin.
					<br>
				<p>
					<b>Student :</b> Student user can be created by sign up from this website and each student will get
					his/her time
					table, academic details ,attendence , assignments and much more.
				</p>
				<p>
					<b>Teacher :</b> Teacher user can also be created by sign Up from this website and each teacher will
					get his/her
					time table , can upload academic details , attendence and much more
				</p>
				<p>
					<b>Admin :</b> Admin is only decided by programmer of this website. It can not be created by sign up
					and
					has controll over this website. He can send or upload every thing can student or teacher can not.
				</p>
			</div>



			<!-- User Contact Details -->

			<h1 class="mt-5">User Contact Details</h1>
			<div class="row  " style="overflow-x:auto;">
				@if(isset($Cfile->id))
				<div>
					<ul class="list-group list-group-horizontal mb-2">
						<li class="col-3 list-group-item fw-bold">Father Name:</li>
						<li class="col-8 list-group-item" style="font-weight: 600; ">{{$Cfile->fathername }}</li>
					</ul>
					<ul class="list-group list-group-horizontal mb-2">
						<li class="col-3 list-group-item fw-bold">Tele-Phone Number:</li>
						<li class="col-8 list-group-item" style="font-weight: 600; ">{{$Cfile->telephone }}</li>
					</ul>
					<ul class="list-group list-group-horizontal mb-2">
						<li class="col-3 list-group-item fw-bold">Email:</li>
						<li class="col-8 list-group-item" style="font-weight: 600; ">{{$Cfile->email }}</li>
					</ul>
					<ul class="list-group list-group-horizontal mb-2">
						<li class="col-3 list-group-item fw-bold">Date Of Birth:</li>
						<li class="col-8 list-group-item" style="font-weight: 600; ">{{$Cfile->dateofberth }}</li>
					</ul>
					<ul class="list-group list-group-horizontal mb-2">
						<li class="col-3 list-group-item fw-bold">Home Address:</li>
						<li class="col-8 list-group-item" style="font-weight: 600; ">{{$Cfile->homeaddress }}</li>
					</ul>
					<ul class="list-group list-group-horizontal mb-2">
						<li class="col-3 list-group-item fw-bold">Gender:</li>
						<li class="col-8 list-group-item" style="font-weight: 600; ">{{$Cfile->gender }}</li>
					</ul>
					<ul class="list-group list-group-horizontal mb-2">
						<li class="col-3 list-group-item fw-bold">Message:</li>
						<li class="col-8 list-group-item" style="font-weight: 600; ">{{$Cfile->message }}</li>
					</ul>
				</div>
				@else
				<p>Please fill contact form in contacts</p>
				@endif
			</div>
			<small class="d-flex justify-text-end">All rights are reserved</small>

		</div>




		<!-- //////////////////////////////////////////////--Last 2 messages---////////////////////////////////////////////////////////// -->

		@if(isset($M3file[0]->message))
		<div class="position-fixed bottom-0 end-0 pe-1" style="z-index: 11">
			<div class="toast show">
				<div class="toast-header bg-success text-dark">
					<strong class="me-auto ">New Messages</strong>
					<small>{{$M3file[0]->created_at}}</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast"></button>
				</div>
				<div class="toast-body">
					<li class="list-group-item d-flex justify-content-between align-items-start">
						<span> <img src="{{ url('storage/UserImage/'.$M3file[0]->email.'.jpg') }}" alt="User image"
								class="rounded-circle mx-2 UserImage" height="50" width="50"></span>
						<div class="me-auto ">
							<div class="fw-bold text-uppercase">{{$M3file[0]->name}}</div>{{$M3file[0]->message}}
						</div>
					</li>
				</div>
			</div>
		</div>
		@endif

		@if(isset($M3file[1]->message))
		<div class="position-fixed bottom-0 end-0 pe-1" style="z-index: 11">
			<div class="toast show">
				<div class="toast-header bg-success text-dark ">
					<strong class="me-auto ">New Messages</strong>
					<small>{{$M3file[1]->created_at}}</small>
					<button type="button" class="btn-close" data-bs-dismiss="toast"></button>
				</div>
				<div class="toast-body ">
					<li class="list-group-item d-flex justify-content-between align-items-start">
						<span> <img src="{{ url('storage/UserImage/'.$M3file[1]->email.'.jpg') }}" alt="User image"
								class="rounded-circle mx-2 UserImage" height="50" width="50"></span>
						<div class="me-auto ">
							<div class="fw-bold text-uppercase">{{$M3file[1]->name}}</div>{{$M3file[1]->message}}
						</div>
					</li>
				</div>
			</div>
		</div>
		@endif
	</div>
	<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#myBtn").click(function () {
				$("#myToast").toast("show");
			});
		});
	</script>
	<script>
		document.onreadystatechange = function () {
			var state = document.readyState
			if (state == 'interactive') {
				document.getElementById('contents').style.visibility = "hidden";
			} else if (state == 'complete') {
				setTimeout(function () {
					document.getElementById('interactive');
					document.getElementById('PageIsBeeingLoaded').style.visibility = "hidden";
					document.getElementById('contents').style.visibility = "visible";
				}, 1999);
			}
		}
	</script>
</body>

</html>