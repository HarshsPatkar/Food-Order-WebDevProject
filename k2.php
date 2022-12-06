<?php

session_start();

        $server="localhost";
        $username="root";
        $password="";
        $dbname="kaara";

        $session=$_SESSION['user'];

        $conn = mysqli_connect($server , $username , $password , $dbname);

        $item=$_GET['itemname'];
        $price=$_GET['cost'];
        $quantity=$_GET['qty'];

        $price=$price*$quantity;

        $query="insert into $session(iname,price,qty) values ('$item','$price','$quantity')";

        mysqli_query($conn,$query);
	    header("location:starter2.php");

        ?>