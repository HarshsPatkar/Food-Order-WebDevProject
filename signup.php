<?php

$server="localhost";
$username="root";
$password="";
$dbname="kaara";

$conn = mysqli_connect($server , $username , $password , $dbname);

if(!empty($_POST['name']) && !empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['cpass']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

if($pass===$cpass)
{
 $query="insert into signup(names,userid,password) values ('$name','$username','$pass')";
}
else
{
    echo '<script>';
    echo 'alert("Passwords dont match!")';
    echo '</script>';
    header('location:signup.html');
}

 $run= mysqli_query($conn,$query) or die(mysqli_error($conn));

 if($run)
 {
     $tablecr="create table $username(iname varchar(20) PRIMARY KEY,price int,qty int)";
     mysqli_query($conn,$tablecr);
     header('location:successful.html');
 }
 else{
    echo "Unsuccessful Registration";
 }
}
else
{
    echo "Enter all the fields";
}

?>