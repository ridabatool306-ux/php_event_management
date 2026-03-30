<?php
include('./connection.php');
$id=$_GET['delid'];
$tsql="SELECT `eventpic` FROM `event` WHERE `event_id`='$id'"; 
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
$pic=unserialize($tfet['eventpic']);
if($pic){
foreach($pic as $key=>$pics){
        unlink("./img/".$pics);
    }
 }

$sqldel="DELETE FROM `event` WHERE `event_id`='$id'";
$rundel=mysqli_query($conn,$sqldel);
if($sqldel){
    header("Location:./eventview.php");
}


?>