<?php
session_start();
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 04-03-2017
 * Time: 19:02
 */
include 'connection.php';
$conn = $GLOBALS['conn'];
if(isset($_POST['name'])){
    $customer = $_SESSION['username'];
    $name = $_POST['name'];
    $mobno = $_POST['mobile'];
    $_SESSION['mobno'] = $mobno;
    $emailid = $_POST['email'];
    $vehicle = $_SESSION['selected_vehicle']['name'];
    if($_SESSION['selectedPlan'] == "perday"){
        $plan = 0;
    }else if($_SESSION['selectedPlan'] == "perhour"){
        $plan = 1;
    }
    else{
        $plan = 2;
    }
    $location = $_SESSION['location'];
    $date = $_SESSION['pickupdate'];
    $time = $_SESSION['pickuptime'].":00";
    $timestamp = date('Y-m-d H:i:s', strtotime("$date $time"));
    $query = "SELECT * from vehicle where name = '$vehicle' and booked_to = ''";
    $booking = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($booking);
    $vehicle_id = $row['vehicle_no'];
    $_SESSION['vehicle_id'] = $vehicle_id;
    $query = "update vehicles set counts = counts-1 where name = '$vehicle'";
    mysqli_query($conn,$query);
    echo mysqli_error($conn);
    $query = "update vehicle set booked_to = '$customer'  where vehicle_no = '$vehicle_id'";
    mysqli_query($conn,$query);
    echo mysqli_error($conn);
    $query = "INSERT INTO transactions (user,vehicle,vehicle_id,plan,name,pickuplocation,pickuptimestamp,email,contact,ordertimestamp)
    VALUES ('$name','$vehicle','$vehicle_id','$plan','$name','$location','$timestamp','$emailid','$mobno',now())";
    if(mysqli_query($conn,$query)) {
        echo 'Performing Transaction...';
     header("location:smsAlert/sendsms.php");
    }else{
        echo mysqli_error($conn);
    }
}
 else{
     echo mysqli_error($conn);
}
?>