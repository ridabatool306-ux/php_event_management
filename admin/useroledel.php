<?php
include('./connection.php');
$sid=$_GET['delid'];
$sql="DELETE FROM `login_table` WHERE `id`='$sid'"; 
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert(Data has been deleted)</script>";
    header("Location:./useroleview.php");
}else{
    echo "<script>alert(Data has not been deleted)</script>";
}
?>