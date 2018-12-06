<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register to Rent Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="stlyeCars.css" />
    <style>
        body{
            background-image: url("registerImage.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1{
            text-align: center;
            color: #32425b;
            font-family: "Lucida Sans Unicode", sans-serif;
            border: solid azure;
            border-radius: 20%;
            padding: 1em;
            background-color: rgb(240, 255, 255, .9);
            margin-left: 30%;
            margin-right: 30%;
        }
        form{
            border: #32425b;
            background-color: #32425b;
            color: azure;
            border-radius: 20%;
            padding: 4em;
            margin-left: 30%;
            margin-right: 30%;
            background: rgb(50, 66, 91, .8);
            text-align: center;

        }
        
    </style>
</head>
<body>
    <h1>Register to Rent Car.</h1>

    <form action="registervalidate.php" method="POST">
        Username:   &emsp; &nbsp; <input type="Username" name="username" id="firstName" required><br>
        <br>
        Password:  &emsp; &nbsp; <input type="Password" name="password" id="password" required> <br>
        <br>
        Confirm Password:  &nbsp;<input type="Password" name="confirm_password" id="confirm_password" required><br>
        <br>

        <input type="submit">

        <script>
        var password = document.getElementById("password")
          , confirm_password = document.getElementById("confirm_password");

        function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
          } else {
            confirm_password.setCustomValidity('');
          }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
        </script>
    </form>
    
</body>
</html>
