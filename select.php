<?php
    class Vehicle{
        public $name;
        public $capacity;
        public $count;
        public $image_url;
        public $perday;
        public $perhour;
        public $perkm;

        function Vehicle($a,$b,$c,$d,$e,$f,$g){
            $this->name = $a;
            $this->capacity = $b;
            $this->count = $c;
            $this->image_url = $d;
            $this->perday = $e;
            $this->perhour = $f;
            $this->perkm = $g;
        }
    }
    $server = "localhost";
    $pass = "";
    $user = "root";
    $db = "rentacar";
    $query = "SELECT * FROM vehicles";
    $vehicles = array();
    $q = mysqli_query(mysqli_connect($server,$user,$pass,$db),$query);
    while($row=mysqli_fetch_assoc($q)){
        array_push($vehicles,new Vehicle($row['name'],$row['seating_capacity'],$row['counts']
            ,$row['image_url'],$row['perday'],$row['perhour'],$row['perkm']));
    }
?>

<!DOCTYPE html>
<html>
<title>Select Vehicle</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<body style="background: #efefef">

<header class="w3-card-8" style="background-color: #000000">
    <div>
        <h2 class="w3-center w3-animate-left" style="color: #FFFFFF">Select Your Vehicle</h2>
        <a href="logout.php" class="w3-button" style="float: right; vertical-align: top;display:inline-block"  id="logoutButton">LOGOUT</a>
    </div>
</header>
<div class="w3-content w3-display-container w3-card-8 w3-animate-zoom" style="width:35%">
    <?php
    for($i=0;$i<sizeof($GLOBALS['vehicles']);$i++){
        echo "<img class=\"mySlides w3-animate-opacity\" src=".$GLOBALS['vehicles'][$i]->image_url." width=\"100%\">";
    }
    $name = $GLOBALS['vehicles'][0]->name;
    $capacity = $GLOBALS['vehicles'][0]->capacity;
    $available;
    if($GLOBALS['vehicles'][0]->count > 0){
        $available = "AVAILABLE";
    }else{
        $available = "NOT AVAILABLE";
    }
    $caption = $name." ".$available;

    ?>
    <div class="w3-display-bottomleft w3-container w3-padding-16 w3-black" id="vehicleName"><?php echo $name;?></div>
    <div class="w3-display-bottommiddle w3-container w3-padding-16 w3-black" id="capacity"><?php echo "CAPACITY: ".$capacity;?></div>
    <div class="w3-display-bottomright w3-container w3-padding-16 w3-black" id="vehicleAvailability"><?php echo $available;?></div>
    <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>

</div>
<div class="w3-card-8" style="background-color: #000000">
    <h2 class="w3-center w3-animate-left" style="color: #FFFFFF">Select a plan</h2>
</div>
<div class="w3-container w3-row" style="margin-top:10px;" align="center">
    <div class="w3-card-8 w3-animate-left" style=" float:left;width: 250px;height: 180px;margin-right: 60px;margin-left: 300px;background-color: #FFFFFF;
     cursor: pointer;">
        <p><b>Per Day</b></p>
        <hr>
        <h1 style="font-size: 50px" id="perday" onclick="fillDetails(this)"><?php echo "&#x20B9 ".$GLOBALS['vehicles'][0]->perday."/-";?></h1>
    </div>
    <div class="w3-card-8 w3-animate-top" style="float:left;width: 250px;height: 180px;margin-right: 60px;background-color: #FFFFFF; cursor: pointer;" >
        <p><b>Per Hour &#x20B9;</b></p>
        <hr>
        <h1 style="font-size: 50px" id="perhour" onclick="fillDetails(this)"><?php echo "&#x20B9 ".$GLOBALS['vehicles'][0]->perhour."/-";?></h1>
    </div>
    <div class="w3-card-8 w3-animate-right" style="float:left;width: 250px;height: 180px;background-color: #FFFFFF; cursor: pointer;">
        <p><b>Per Km</b></p>
        <hr>
        <h1 style="font-size: 50px"  id="perkm" onclick="fillDetails(this)"><?php echo "&#x20B9 ".$GLOBALS['vehicles'][0]->perkm."/-";?></h1>
    </div>
</div>

</body>
</html>
<script>
    var slideIndex = 0;
    showDivs(slideIndex);
    function plusDivs(n) {
        showDivs(slideIndex += n);
    }
    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        slideIndex = slideIndex%x.length;
        slideIndex = slideIndex>=0?slideIndex:x.length-1;
        console.log(slideIndex);
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex].style.display = "block";
        var a = document.getElementById("perday");
        var b = document.getElementById("perhour");
        var c = document.getElementById("perkm");
        getPrice(slideIndex);
    }
</script>


<script>
    var vehicle_obj = null;
    function getPrice(index) {

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                vehicle_obj = JSON.parse(this.responseText);
                document.getElementById("perday").innerHTML = "&#x20B9 "+vehicle_obj.perday+"/-";
                document.getElementById("perkm").innerHTML = "&#x20B9 "+vehicle_obj.perkm+"/-";
                document.getElementById("perhour").innerHTML = "&#x20B9 "+vehicle_obj.perhour+"/-";
                document.getElementById("vehicleName").innerHTML = vehicle_obj.name;
                document.getElementById("capacity").innerHTML = "CAPACITY: "+vehicle_obj.capacity;
                if(vehicle_obj.count > 0)
                    document.getElementById("vehicleAvailability").innerHTML = "AVAILABLE";
                else
                    document.getElementById("vehicleAvailability").innerHTML = "NOT AVAILABLE";
            }
        };
        xmlhttp.open("GET", "getPrice.php?q=" + index, true);
        xmlhttp.send();
    }

    function fillDetails(element){
        if(vehicle_obj!=null && vehicle_obj.count == 0){
            alert("We are sorry currently this vehicle is not avaialble");
            return;
        }
        var planType = element.id;
            window.open("fillDetails.php?plan="+planType+"&id="+slideIndex,"_self");
    }
</script>
