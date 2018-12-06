<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;

            font-family: "Lucida Sans Unicode", sans-serif;
        }
        h1{
            text-align: center;
            color: #32425b;
            
            border: solid azure;
            border-radius: 20%;
            padding: 1em;
            background-color: rgb(240, 255, 255, .9);
            margin-left: 30%;
            margin-right: 30%;
        }
        div{
            border: solid, #32425b;
            border-radius: 10%;
            padding:1em;
            background: rgb(50, 66, 91, .8);
            margin-bottom: .5em;
            margin-right: 50%;
            color: azure;
        }
        select {
        font-size: 16px;
        font-family: "Lucida Sans Unicode", sans-serif;
        position: relative;
        display: inline-block;
        }
        option{
            font-family: "Lucida Sans Unicode", sans-serif;
            padding:2em;
            min-width: 160px;
            
        }
    </style>
</head>
    <body>
    	<form action="validatecard.php" method="post">
    		Cardholder Name: <input type='text' name='chname' id = 'chname'>
    		Card Number: <input  type='number' name = 'cardnumber' id = 'cardnumber'>
    		<br>
    		Exp: <input type='month' name='expm' id='exp'>&nbsp;&nbsp;&nbsp;&nbsp;
    		CVV2: <input type="number" name="seccode" id = 'seccode'>

    	</form>
<?php
?>
</body>
</html>