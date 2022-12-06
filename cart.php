<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Welcome ".$_SESSION['user']; ?></title>
    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
     *{
         padding:0;
         margin:0;
         
     }

     #heading{
      text-align: center;
    /* padding: 21px; */
    font-size: 20px;
    height: 42px;
    background-color: white;
    opacity: 0.8;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
     }

     span{
         color:green;
     }

     

     table,th,td{
       width:53%;
       border:1px solid black; 
       text-align:center;
       opacity:0.9;
     }
     

     .container{
       margin-top:40px;
     }
     body{
       background:url(cart.jpg);
       background-size:cover;
       background-position:center;
     }

     .trash{
       width:50px;
       height:50px;
       border:none;
       /* background:url(garbage.png); */
       background-position:center;
       background-size:cover;
     }

    td a .trash{
       padding: 13px;
       font-size: 1px;
     }

     .footer{
       position:absolute;
       bottom:0;
       background-color:black;
       color:white;
       width: 1280px;
       text-align: center;
       padding:10px;
       display:flex;
       justify-content:space-around;
       align-items:center;
     }

     .footer h2{
       font-size:19px;
       font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
     }

     .footer button{
       padding:7px;
       border:1px solid grey;
       border-radius:5px;
       color:grey;
       background:none;
     }

     .footer button:hover{
       background-color:grey;
       transition-duration:0.2s;
     }

     #exampleModalLabel{
       color:black;
     }

     .modal-body{
       color:black;
     }

     .modal-footer{
       justify-content:space-around;
     }

    

    

   </style>
</head>
<body>
<?php

$server="localhost";
$username="root";
$password="";
$dbname="kaara";

$session=$_SESSION['user'];

$conn = mysqli_connect($server , $username , $password , $dbname);

$query="select * from $session";
$run= mysqli_query($conn,$query) or die(mysqli_error($conn));

$sum="select sum(price) from $session";
$total=mysqli_query($conn,$sum);

$d1=mysqli_fetch_assoc($total);

$_SESSION['total']=$d1['sum(price)'];



?>

    <div class="container">
    <h2 id="heading">Welcome<span><?php echo "   ".$_SESSION['user']."   ";?></span>to your Cart</h2>

    <table class="table table-dark table-hover">
    <thead>
    <tr>
      <th>Item Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th></th>
    </tr>
    </thead>
    <?php
    while($rows=mysqli_fetch_assoc($run))
    {
    ?>
    <tr>
     <td><?php echo $rows['iname']; ?></td>
     <td><?php echo $rows['price']; ?></td>
     <td><?php echo $rows['qty']; ?></td>
     <td><a class="trash" href="delete.php?in=<?php echo $rows['iname']; ?>">Delete</a></td>
    <tr>
    <?php
    }

    
    ?>

    </table>
 </div>
  <div class="footer">
  <h2>Total Price: Rs <?php echo $_SESSION['total'] ?>  </h2>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Place Order
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo $_SESSION['user']; ?> your order of Rs <?php echo $_SESSION['total'] ?> has been placed successfully! We hope you enjoyed the food, please rate us to help us improve!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.open('index2.php')">Close</button>
        <button type="button" class="btn btn-primary" onclick="window.open('review.html')">Review</button>
      </div>
    </div>
  </div>
</div>
  </div>    

</body>
</html>