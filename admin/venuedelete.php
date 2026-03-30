<?php
include('./connection.php');
$id=$_GET['delid'];
$sql="DELETE FROM `venue` WHERE `venue_id`='$id'"; 
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert(Data has been deleted)</script>";
    header("Location:./venueview.php");
}else{
    echo "<script>alert(Data has not been deleted)</script>";
}
?>