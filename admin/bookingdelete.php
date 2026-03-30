<?php
include('./connection.php');
$id=$_GET['delid'];
$sql="DELETE FROM `booking` WHERE `booking_id`='$id'"; 
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert(Data has been deleted)</script>";
    header("Location:./bookingview.php");
}else{
    echo "<script>alert(Data has not been deleted)</script>";
}
?>