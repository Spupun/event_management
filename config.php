<?php 
$conn = mysqli_connect("localhost:3307","root","","event");

if(!$conn){
    die("connection failed" .mysqli_connect_error());
}
?>