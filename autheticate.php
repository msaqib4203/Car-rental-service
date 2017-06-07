<?php
session_start();
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 05-03-2017
 * Time: 11:49
 */

include('connection.php');
if(isset($_POST['signup'])){
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['tel'];
    $conn = $GLOBALS['conn'];
    $query = "select * from users where username = '$username'";

    if(mysqli_num_rows(mysqli_query($conn,$query))!=0){
        header("location:index.php?signup=false");
        exit();
    }
    $query = "insert into users values('$username','$name','$contact','$email','$pass')";
    mysqli_query($conn,$query);
    header("location:index.php?signup=true");
    exit();
}

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['login'])){

    $server = "localhost";
    $pass = "";
    $user = "root";
    $db = "rentacar";
    $username = $_POST['username'];
    $passwrd = $_POST['password'];
    //unset($_POST['username']);
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$passwrd' ";
    $conn = mysqli_connect($server,$user,$pass,$db);
    $q = mysqli_query($conn,$query);
    if(mysqli_num_rows($q)!=1){
        $_SESSION['success'] = false;
    }else {
        $row = mysqli_fetch_assoc(mysqli_query($conn,$query));
        $name = $row['name'];
        $_SESSION['name'] = $name;
        $_SESSION['success'] = true;
        $_SESSION['username'] = $row['username'];
    }
    header("Location: index.php");
    exit();
}else if(!isset($_SESSION['name'])){
    header("Location: index.php?login=false");
    exit();
}
    $_SESSION['location'] = $_POST['pickuplocation'];
    $_SESSION['pickupdate'] = $_POST['pickupdate'];
    $_SESSION['pickuptime'] = $_POST['pickuptime'];
    header("Location: select.php");
    exit();
?>