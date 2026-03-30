<?php
include('./connection.php');
$stdid=$_GET['delid'];
$tsql="SELECT `plannerpic`,`planner_id` FROM `planner` WHERE `planner_id`='$stdid'"; 
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
if(file_exists("./img/".$tfet['plannerpic'])){
    unlink("./img/".$tfet['plannerpic']);
}

$sqldel="DELETE FROM `planner` WHERE `planner_id`='$stdid'";
$rundel=mysqli_query($conn,$sqldel);
if($sqldel){
    header("Location:./plannerview.php");
}


?>