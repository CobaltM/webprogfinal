<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Cart of Rent Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-image: url("viewCartBackground.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: "Lucida Sans Unicode", sans-serif;
            color:azure;
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
        .subm{
          background-color: #32425b;
            color:azure;
            border: none;
            padding: .5em;
            border-radius: 3%;
            float: right;
            transform: translateY(-50px);
        }
        div{
            border: solid, #32425b;
            border-radius: 10%;
            padding:1.5em;
            background: rgb(50, 66, 91, .8);
            margin-bottom: .5em;
            margin-right: 50%;
            color: azure;
        }
        button{
            float:left;
            background-color: #32425b;
            color:azure;
            border: none;
            padding: 1.5em;
            border-radius: 10%;
        }
        a{
            color:azure;
        }
        a:hover{
            color: #c7daf7;
        }
    </style>
   <?php
     $selected =$_POST['carSize'];
   function chooseImage(){
       
   }

   ?>
</head>
<body>
    <button><a href='menu.php'> Back to menu </a></button>
    <h1>View Your Cart of Rent Car. </h1>

    <div>
    <h2> Thank you for choosing Rent Car. </h2>
    <?php
      session_start();
      
      $remove=$_POST['removethis'];
      
      if($remove){
        $remove=$remove-1;
        array_splice($_SESSION['viewcart'],$remove*3,3);
        array_splice($_SESSION['cart'],$remove,1);
      }
      $l = $_SESSION["viewcart"];
        $l = (sizeof($l))/3;
        $tot=0;
        //echo "<p>Car for ".$_SESSION['viewcart'][1*3+1]." Days. Price : $".$_SESSION['viewcart'][1*3+2]."</p>";
        for($i=0;$i<$l;$i++){
            if($_SESSION['viewcart'][$i*3+2]%982451653==0){
                $vip=True;
                $vipd=982451653;
            }
            if($_SESSION['viewcart'][$i*3]==1){
                echo "<p>Car for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
            }
            elseif ($_SESSION['viewcart'][$i*3]==2) {
               echo "<p>Truck rental for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>"."</th>";
            }
            elseif($_SESSION['viewcart'][$i*3]==3){
                echo "<p>Van for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
            }
            elseif($_SESSION['viewcart'][$i*3]==4){
                echo "<p>SUV for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
            }
            elseif($_SESSION['viewcart'][$i*3]==11){
                echo "HELO";
                if($vip){
                    echo "<p>Parking at Hotel 1 for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking at Hotel 1 for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }

            }
            elseif($_SESSION['viewcart'][$i*3]==12){
                if($vip){
                    echo "<p>Parking at Hotel 2 for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking at Hotel 2 for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==13){
                if($vip){
                    echo "<p>Parking at Grand Theatre for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking at Grand Theatre for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==14){
                if($vip){
                    echo "<p>Parking at Restaurants for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking at Restaurants for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==15){
                if($vip){
                    echo "<p>Parking at Train Stations for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking at Train Stations for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==16){
                if($vip){
                    echo "<p>Parking at Grand Hotel for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking at Grand Hotel for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==17){
                if($vip){
                    echo "<p>Parking at Docks for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking at Docks for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==18){
                if($vip){
                    echo "<p>Parking Deck 3 access for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking Deck 3 access for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==19){
                if($vip){
                    echo "<p>Parking Deck 2 access for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking Deck 2 access for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            elseif($_SESSION['viewcart'][$i*3]==20){
                if($vip){
                    echo "<p>Parking Deck 1 access for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".($_SESSION['viewcart'][$i*3+2]/$vipd).".00</p><p><b>VIP</b></p>";
                }
                else{
                echo "<p>Parking Deck 1 access for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
                }
            }
            else{
                echo $_SESSION['viewcart'][$i*3];
            }
            echo "<form action='viewCart.php' method='POST'>";
            echo "<input value=".($i+1)." type='hidden' name='removethis' />";
            echo "<input class='subm' type=submit value='Remove this item'>";
            echo "</form>";
            if($vip){
                $tot=$tot+($_SESSION['viewcart'][$i*3+2]/$vipd);
            }
            $tot=$tot+$_SESSION['viewcart'][$i*3+2];
        }
        echo "<p>Total Price: $".$tot.".00</p>";
        if($tot){
          echo "<a href='cc.html'>";
          echo "<button>Pay Now</button>";
          echo "</a>";
        }
      ?>
    
    </div> 
</body>
</html>

