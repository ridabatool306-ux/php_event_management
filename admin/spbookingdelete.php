<?php
include('./connection.php');
$id=$_GET['delid'];
$sql="DELETE FROM `specificbooking` WHERE `spbooking_id`='$id'"; 
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert(Data has been deleted)</script>";
    header("Location:./specificbookingview.php");
}else{
    echo "<script>alert(Data has not been deleted)</script>";
}
?>