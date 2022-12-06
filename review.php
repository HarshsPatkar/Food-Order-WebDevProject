<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="kaara";

$conn = mysqli_connect($server , $username , $password , $dbname);

$name=$_SESSION['user'];

$reviewx=$_POST['review'];

$sql="insert into review(namex,content) values ('$name','$reviewx')";

$run= mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($run)
{
    header('location:index2.php');
}


?>