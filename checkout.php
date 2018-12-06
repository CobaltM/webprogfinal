<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
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
    	<h1> Checkout</h1>
    	<h2> Cart</h2>
    	<?php
    	session_start();

    	$l = $_SESSION["viewcart"];
        $l = (sizeof($l))/3;
        $tot=0;
        //echo "<p>Car for ".$_SESSION['viewcart'][1*3+1]." Days. Price : $".$_SESSION['viewcart'][1*3+2]."</p>";
        for($i=0;$i<$l;$i++){
            echo "<tr>";
            if($_SESSION['viewcart'][$i*3]==1){
                echo "<th>Car for ".$_SESSION['viewcart'][$i*3+1]." Days <br> Price : $".$_SESSION['viewcart'][$i*3+2]."</th> <br><br>";
            }
            elseif ($_SESSION['viewcart'][$i*3]==2) {
               echo "<th>Truck rental for ".$_SESSION['viewcart'][$i*3+1]." Days <br> Price : $".$_SESSION['viewcart'][$i*3+2]."</th>"."</th><br><br>";
            }
            elseif($_SESSION['viewcart'][$i*3]==3){
                echo "<th>Van for".$_SESSION['viewcart'][$i*3+1]." Days <br> Price : $".$_SESSION['viewcart'][$i*3+2]."</th><br><br>";
            }
            else{
                echo "<th>SUV for ".$_SESSION['viewcart'][$i*3+1]." Days <br> Price : $".$_SESSION['viewcart'][$i*3+2]."</th><br><br>";
            }
            echo "</tr>";
            $tot=$tot+$_SESSION['viewcart'][$i*3+2];
        }
        echo "<p>Total Price: $".$tot."</p>";
        echo "<a href='cc.html'>pay</>";
    	?>
    </body>
</html>