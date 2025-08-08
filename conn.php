<?php
$servername="localhost";
$username="root";
$password="";
$database="prectice";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
    die("connection faild".$conn->connect_error);
}
