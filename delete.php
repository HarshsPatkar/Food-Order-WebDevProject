<?php

session_start();

$server="localhost";
$username="root";
$password="";
$dbname="kaara";

$session=$_SESSION['user'];

$conn = mysqli_connect($server , $username , $password , $dbname);

$name=$_GET['in'];

$query="delete from $session where iname='$name'";
$run=mysqli_query($conn,$query);

$sum="select sum(price) from $session";
$total=mysqli_query($conn,$sum);

$d1=mysqli_fetch_assoc($total);


$_SESSION['total']=$d1[0];


header("location:cart.php");

?>