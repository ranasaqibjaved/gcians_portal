<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin User</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</head>

<body>
    <!-- admin_token -->
    <h1 style="text-align:center ; font-weight: bolder ;">Installation wizard</h1>
    <div style="margin:10px ;padding: 20px; border:1px solid black; background-color: gray; ">

        <h3>Please Create an Admin account to do some stuff next</h3>
        <!-- show errors here -->
        @if($errors->any())
        <div class="fw-bold"
            style="color: rgb(255, 255, 255); text-align: center; background-color: rgb(252, 78, 65); ">
            <h4>{{$errors->first()}}</h4>
        </div>
        @endif
        <br>
        <!--// show errors here -->
        <div style="padding: 20px ; border: 2px solid green; background-color: white">
            <h2 style="text-align:center ; padding-bottom: 30px; font-weight:700 ;">Create an Admin Account</h2>
            <form action=" /create" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Admin name"><br><br>
                <input type="email" name="email" placeholder="Admin email "><br><br>
                <input type="password" name="password" placeholder="Admin password "><br><br>
                <p style="color:red">Password must be at least 6 characters</p>
                <input type="submit">
            </form>
        </div>
    </div>


</body>

</html>