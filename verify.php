<?php 
session_start();
include('connection.php'); 
$login = $_POST["user_name"];

$pwd = $_POST["pass"];
$recordset = mysqli_query($con,"select * from login WHERE user_name='$login'AND pass='$pwd'");

while($record = mysqli_fetch_assoc($recordset)){
if($login == $record["user_name"] && $pwd = $record["pass"]) {


$_SESSION["user_name"] = $record["user_name"];
$_SESSION["pass"] = $record["pass"];
 

        if($record["pass"] == 777){
        $_SESSION["pass"] = $record["pass"];
        header("Location:pricing_list.php?user_name=".$record["user_name"]);
        
        exit;
        }
        else{
        header("Location:login.php");
        exit;
        }
}
}

       header("Location:login.php?invalid=1");  
   ?>
