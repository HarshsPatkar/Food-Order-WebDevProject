<?php
session_start();
$server="localhost";
$username="root";
$password="";
$dbname="kaara";

$conn = mysqli_connect($server , $username , $password , $dbname);


    
    $userid=$_POST['username'];
    $pass=$_POST['pass'];


    $query="select * from signup where userid='$userid' AND password='$pass'";

    $run= mysqli_query($conn,$query) or die(mysqli_error($conn));
    
    $count=mysqli_num_rows($run);

    if($count==1)
    {
       $_SESSION['user']=$userid;
       header('location:index2.php');
    }
    else
    {
        header('location:loginunsuc.html');
    }

    
?>