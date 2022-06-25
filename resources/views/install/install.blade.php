<!DOCTYPE html>
<html lang="en">

<head>
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
    <title>Install</title>
</head>

<body>
    <h1 class="text-center">Welcome to installation Wizard </h1>
    <div style=" border : 2px solid green  ; margin  : 10px ; padding : 10px ; ">
        <div>
            <p>Please click below to import database system in your xamp</p>
            <!-- <p>This can take 80 to 100 seconds or up</p> -->
            <p id='time' style="color:blue"></p>

            <button type="button" class="btn btn-success"
                onclick="this.innerHTML='Processing...', document.getElementById('time').innerHTML = 'This can take 1 to 2 minutes or up',disabled = true ">
                <a style="text-decoration: none; color:bisque" href="install/install_all">Process</a>
            </button>

        </div>
    </div>

</body>

</html>