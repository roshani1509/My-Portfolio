<?php
include 'conn.php';
$id=$_GET['id'];
$sql="DELETE FROM `fromdata` WHERE id=$id";
$result=mysqli_query($conn,$sql);
if($result)
{
    header("location:index.php");

}
?>
