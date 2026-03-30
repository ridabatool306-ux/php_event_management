<?php
include('./connection.php');
$stdid=$_GET['delid'];
$tsql="SELECT `volunteerpic`,`volunteer_id` FROM `volunteer` WHERE `volunteer_id`='$stdid'"; 
$trun=mysqli_query($conn,$tsql);
$tfet=mysqli_fetch_assoc($trun);
if(file_exists("./img/".$tfet['volunteerpic'])){
    unlink("./img/".$tfet['volunteerpic']);
}

$sqldel="DELETE FROM `volunteer` WHERE `volunteer_id`='$stdid'";
$rundel=mysqli_query($conn,$sqldel);
if($sqldel){
    header("Location:./volunteerview.php");
}


?>