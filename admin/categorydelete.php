<?php
include('./connection.php');
$id=$_GET['delid'];
$sql="DELETE FROM `category` WHERE `category_id`='$id'"; 
$run=mysqli_query($conn,$sql);
if($run){
    echo "<script>alert(Data has been deleted)</script>";
    header("Location:./categoryview.php");
}else{
    echo "<script>alert(Data has not been deleted)</script>";
}
?>