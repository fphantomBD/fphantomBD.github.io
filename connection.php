<?php

$db['hostname']="localhost";
$db['username']="droneint";
$db['password']="65J66qzfVu";
$db['database']="droneint_fphantom_drone";

$con=mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

if(mysqli_connect_errno())
{
   echo "Failed to connect to MySql: " . mysqli_connect_errno();
}

?>