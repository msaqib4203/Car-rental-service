<?php
session_start();
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 04-03-2017
 * Time: 18:52
 */
//echo $_GET['plan'].$_GET['id'];
include_once ("connection.php");
$conn = $GLOBALS['conn'];
$username = $_SESSION['username'];
$query = "SELECT * FROM users WHERE username = '$username'";
$user = mysqli_fetch_assoc(mysqli_query($conn,$query));

$query = "SElECT * FROM vehicles";
$vehicles = mysqli_query($conn,$query);
$selected = $_GET['id'];
$_SESSION['selectedPlan'] = $_GET['plan'];;
for($i=0;$i!=$selected;$i++){
    $row = mysqli_fetch_assoc($vehicles);
}
$_SESSION['selected_vehicle'] = mysqli_fetch_assoc($vehicles);
$row = $_SESSION['selected_vehicle'];
?>


<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<head>
</head>
<body style="background-color: #efefef"  >
<div class="w3-card-8" style="background-color: #000000">
    <h2 class="w3-center w3-animate-left" style="color: #FFFFFF">Fill your details</h2>
    <a href="logout.php" class="w3-button" style="float: right; vertical-align: top;display:inline-block"  id="logoutButton">LOGOUT</a>
</div>
<div class="w3-container" style="margin-top: 50px;margin-bottom: 50px;margin-right:200px;margin-left:200px ">
        <img class = "w3-card-8 w3-animate-left" src="<?php echo $GLOBALS['row']['image_url'];?>" style="float:left;width:600px;height:400px">
        <form class="w3-card-8 w3-animate-right" action="completeTransaction.php" method="post" style="float: right;width: 40%;margin-left: 10px">
            <div  style="margin: 10px">
                <label>Name</label>
                <input class="w3-input" type="text" name="name" required value="<?php echo $user['name'];?>">
            </div>
            <div  style="margin: 10px">
                <label>Pickup Date</label>
                <input class="w3-input" type="date" name="pickupdate" style="color: #AA99AA" readonly value="<?php echo $_SESSION['pickupdate'];?>">
            </div>
            <div  style="margin: 10px">
                <label>Time</label>
                <input class="w3-input" type="time" name="pickuptime" style="color: #AA99AA" readonly value="<?php echo $_SESSION['pickuptime'];?>">
            </div>

            <div  style="margin: 10px">
                <label>Mobile No:</label>
                <input class="w3-input" type="tel" name="mobile" value="<?php echo $user['mobile_number'];?>">
            </div>
            <div  style="margin: 10px">
                <label>Location:</label>
                <input class="w3-input" style="color: #AA99AA" type="text" name="from" readonly value="<?php echo $_SESSION['location'];?>">
            </div>
            <div  style="margin: 10px">
                <label>Email ID:</label>
                <input class="w3-input" type="tel" name="email" value="<?php echo $user['email_id'];?>">
            </div>
            <div align="center" style="margin: 10px">
                <input class="w3-btn" type="submit" value="Complete Transaction" align="center">
            </div>
        </form>
    </div>
<div class="w3-card-8 w3-animate-zoom"
     style="position:absolute;margin-left:215px;margin-top: -110px;width:600px;background-color: #FFFFFF"><p style="text-align: center"><?php
echo $row['name']." @ ".$_SESSION['selectedPlan'];
        ?></p></div>
</body>

