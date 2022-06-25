<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>

<body>
    <div style="font-family: Asap; justify-content: center; text-align: center; align-items: center; border: 3px solid rgb(0, 0, 0); margin: 4ex; padding: 4ex; border-radius: 30%; background-color: rgb(145, 253, 253);  inline-size:auto ;">

        <img src="https://static.lingoapp.com/assets/images/email/il-password-reset@2x.png" style="align-items: center; justify-content: center; text-align: center;" width="200" height=auto></img>
        <strong>
            <h2>Reset Password For Apna Portal </h2>
        </strong>
        <strong>
            <p>Did you forget your passwoord?</p>
        </strong>

        <p>No Problem, just click the button below to reset you Apna Portal Password</p>
        <button style="background-color: rgb(43, 255, 0);">
            <a style="font-size: 1vw; text-decoration: none; color:aliceblue" href="{{url('ResetPassword',$token)}}">Reset Password</a>
        </button>
    </div>
</body>

</html>