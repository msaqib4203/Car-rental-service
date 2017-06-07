<?php
/**
 * Created by PhpStorm.
 * User: MSaqib
 * Date: 28-02-2017
 * Time: 02:30
 */
$vehicle_index = intval($_GET['q']);
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
$q = mysqli_query(mysqli_connect($server,$user,$pass,$db),$query);
$vehicles = array();
while($row=mysqli_fetch_assoc($q)){
    array_push($vehicles,new Vehicle($row['name'],$row['seating_capacity'],$row['counts']
        ,$row['image_url'],$row['perday'],$row['perhour'],$row['perkm']));
}
$result = array('perkm'=>$vehicles[$vehicle_index]->perkm,'perday'=>$vehicles[$vehicle_index]->perday,
    'perhour'=>$vehicles[$vehicle_index]->perhour,"name"=>$vehicles[$vehicle_index]->name,"count"=>$vehicles[$vehicle_index]->count
,"capacity"=>$vehicles[$vehicle_index]->capacity);
echo json_encode($result);
?>