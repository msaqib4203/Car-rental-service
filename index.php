<?php
session_start();
if(isset($_SESSION['name'])){
  if($_SESSION['success'] == false){
      echo "<script>alert(\"Incorrect Username or Password\");</script>";
  }
}else{
    session_destroy();
}

if(isset($_GET['login'])){
    echo "<script>alert(\"You must login first!\");</script>";
}
if(isset($_GET['signup']) && $_GET['signup'] == 'true'){
    echo "<script>alert(\"success!\");</script>";

}else if(isset($_GET['signup']) && $_GET['signup'] == 'false'){
    echo "<script>alert(\"Username already taken!\");</script>";
}
if(isset($_GET['transaction'])){
    echo "<script>alert(\"Transaction Successful!!\");</script>";
}
?>

<!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<head>
    <header class="w3-card-8" style="background-color: #000000 ">
        <div>
        <h2 class="w3-center" style="color: #FFFFFF;display:inline;margin-left:40%">CAR RENTAL SERVICE</h2>
        <button class="w3-button" style="float: right;vertical-align: top;display: inline-block"
                onclick="document.getElementById('id01').style.display='block'" id="loginButton">LOGIN</button>
            <button class="w3-button" style="float: right; vertical-align: top;display: inline-block"  onclick="document.getElementById('id02').style.display='block'" id="signupButton">SIGNUP</button>
            <a href="logout.php" class="w3-button" style="float: right; vertical-align: top;display:none"  id="logoutButton">LOGOUT</a>
        </div>
    </header>
    <script>

        var loginButton = document.getElementById("loginButton");
        var signupButton = document.getElementById("signupButton");
        var logoutButton = document.getElementById("logoutButton");
        function showLogin(){
            document.getElementById("loginButton").style.display = 'inline-block';
            document.getElementById("signupButton").style.display = 'inline-block';
            document.getElementById("logoutButton").style.display = 'none';
        }
        function hideLogin(){
            document.getElementById("loginButton").style.display = 'none';
            document.getElementById("signupButton").style.display = 'none';
            document.getElementById("logoutButton").style.display = 'inline-block';
        }
    </script>
    <?php

        if(isset($_SESSION['name'])){
           // echo "checking";
            echo "<script>hideLogin();</script>";
        }else{
            //echo "checking123";
            echo "<script>showLogin();</script>";
        }
    ?>
</head>
<body style="background-color: #efefef; background-image: url('cars.png')">
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top">
        <header class="w3-container w3-teal">
        <span onclick="document.getElementById('id01').style.display='none'"
              class="w3-closebtn">&times;</span>
            <h2>LOGIN</h2>
        </header>
        <div class="w3-container">
            <form action="autheticate.php" method="post">
                <label>Username</label>
                <input class="w3-input" name="username" type="text" required/>
                <label>Password</label>
                <input type="password" required name="password" class="w3-input"/>
                <button type="submit" class="w3-button" style="float:right;margin: 5px " name="login">LOGIN</button>
            </form>
        </div>
        <footer class="w3-container w3-teal">
        </footer>
    </div>
</div>
<div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-8 w3-animate-top ">
        <header class="w3-container w3-teal">
        <span onclick="document.getElementById('id02').style.display='none'"
              class="w3-closebtn">&times;</span>
            <h2>LOGIN</h2>
        </header>
        <div class="w3-container">
            <form action="autheticate.php" method="post">
                <label>Username</label>
                <input class="w3-input" required name="username" type="text" required/>
                <label>Password</label>
                <input type="password" required name="password" class="w3-input"/>
                <label>Name</label>
                <input type="text" required name="name" class="w3-input"/>
                <label>Email</label>
                <input type="email" required name="email" class="w3-input"/>
                <label>Contact No:</label>
                <input type="number" required name="tel" class="w3-input"/>
                <button type="submit" class="w3-button" style="float:right;margin: 5px " name="signup">SIGNUP</button>
            </form>
        </div>
        <footer class="w3-container w3-teal">
        </footer>
    </div>
</div>
    <div class="w3-container w3-animate-top" >
        <div class = "w3-card-8" style="background-color:rgba(255,255,255,0.2);margin-top:60px;margin-left:30%;margin-right: 30%">
            <form action="autheticate.php" method="post">
                <div  style="margin: 10px">
                    <label>Pickup Location</label>
                    <input class="w3-input" required list="suggestions" type="text" name="pickuplocation">
                    <datalist id = "suggestions">
                        <option value = "LUCKNOW">
                        <option value = "ALIGARH">
                        <option value = "DELHI">
                        <option value = "NOIDA">
                        <option value = "JHANSI">
                        <option value = "AGRA">
                        <option value = "MEERUT">
                        <option value = "SHIMLA">
                        <option value = "OOTY">
                        <option value = "FIROZABAD">
                    </datalist>
                </div>
                <div  style="margin: 10px">
                    <label>Pickup Date</label>
                    <input class="w3-input" required type="date" name="pickupdate">
                </div>
                <div  style="margin: 10px">
                    <label>Pickup Time</label>
                    <input class="w3-input" required type="time" name="pickuptime">
                </div>
                <div align="center" style="margin: 10px">
                    <input class="w3-btn" type="submit" required value="Check Quotes" align="center">
                </div>
            </form>
        </div>
    </div>
</body>
