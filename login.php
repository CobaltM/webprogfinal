<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login to Rent Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="stlyeCars.css" />
    <style>
        body{
            background-image: url("loginImage.png");
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
    <h1>Login to Rent Car.</h1>

    <form action='validate.php' method='post'>
        Username: <input type="text" name="user" id="user" required><br>
        <br>
        Password: <input type="password" name="pass" id="pass" required><br>
        <br>
        <input type="submit">
    </form>
    
</body>
</html>
