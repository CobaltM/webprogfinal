<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inventory of Rent Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-image: url("inventoryImage.jpg");
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
    <h1>Inventory of Rent Car.</h1>

    <form action="addtocart.php" method="post">
        <div id="step1">
        Step 1: <br>
        Select a Pickup <br>
        Location: 
        <select required name="pickuplocation">
            <option value=1  id="pickupLocation1" >Airport</option>
            <option value=2  id="pickupLocation2" >South</option>
            <option value=3  id="pickupLocation3" >Downtown</option>
            <option value=4  id="pickupLocation4" >Bus Station</option>
            <option value=5  id="pickupLocation5" >Train Station</option>
            <option value=6  id="pickupLocation6" >Midtown</option>
        </select>
        Day <input type="date" name="pickupDay" id="pickupDay" required>
        Time <input type="time" name="pickupTime" value="12:00" id="pickupTime" required>
        </div>
        <div id="step2">
        Step 2: <br>
        Choose vehicle size:
            <div class="dropdown">
        <select required>
            <option value=1 name="car" id="car">Car $15/day</option>
            <option value=2 name="truck" id="truck">Truck $17/day</option>
            <option value=3 name="van" id="van">Van $17/day</option>
            <option value=4 name ="suv" id="suv">SUV $20/day</option>
        </select>
            </div>
        </div>
        <div id="step3">
            Step 3: <br>
            Select Drop Off<br>
            Location: 
            <select required name="dropofflocation">
                <option value=1  id="pickupLocation1" >Airport</option>
                <option value=2  id="pickupLocation2" >South</option>
                <option value=3  id="pickupLocation3" >Downtown</option>
                <option value=4  id="pickupLocation4" >Bus Station</option>
                <option value=5  id="pickupLocation5" >Train Station</option>
                <option value=6  id="pickupLocation6" >Midtown</option>
            </select>
            Day <input type="date" name="dropOffDay" id="dropOffDay" required>
            Time <input type="time" name="dropOffTime" id="dropOffTime" value="12:00" required>
            <br><br>
            <input type="submit">
        </div>
    
    </form>
</body>
</html>
