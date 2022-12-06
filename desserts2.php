<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desserts | Kaara</title>
    <link rel="stylesheet" href="desserts.css">
    <style>
        .count{
            position:absolute;
            left:10%;
            position: absolute;
            left: 76%;
            width: 50px;
            top: 58%;
        }

        #cartx{
            position: absolute;
            right: 391px;
            top: 21px;
            text-decoration: none;
            color: white;
        }

        #cartx:hover{
            color:grey;
        }
    </style>
</head>
<body>
    <header>
        <h3>Kaara</h3>
        <a href="cart.php" id="cartx">Cart</a>
        <a href="#" id="login"><?php echo $_SESSION['user'];?></a>
        <a href="logout.php" id="signup">Logout</a>
        
    </header>
    <div class="startinfo">
        <h1>Desserts</h1>
        <p>When you are eating the main course, is your mind already DESSERT?</p>
    </div>

    <div class="dishbox">
        <button class="dishes" id="dish1">
            <div class="image"></div>
            <div class="info">
                <h2>Puff</h2>
                <h3>Rs 30</h3>
                <input type="number" value="1" class="count" id="a" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Puff','30','a')">
            </div>
        </button>
        <button class="dishes" id="dish2">
            <div class="image"></div>
            <div class="info">
                <h2>Black Current Delight</h2>
                <h3>Rs 80</h3>
                <input type="number" value="1" class="count" id="b" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Black Current Delight','80','b')">
            </div>
        </button>
        <button class="dishes" id="dish3">
            <div class="image"></div>
            <div class="info">
                <h2>Choconut</h2>
                <h3>Rs 35</h3>
                <input type="number" value="1" class="count" id="c" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Choconut','35','c')">
            </div>
        </button>
        <button class="dishes" id="dish4">
            <div class="image"></div>
            <div class="info">
                <h2>Choco Cake</h2>
                <h3>Rs 100</h3>
                <input type="number" value="1" class="count" id="d" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Choco Cake','100','d')">
            </div>
        </button>
        <button class="dishes" id="dish5">
            <div class="image"></div>
            <div class="info">
                <h2>Cup Cake</h2>
                <h3>Rs 50</h3>
                <input type="number" value="1" class="count" id="e" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Cup Cake','50','e')">
            </div>
        </button>
        <button class="dishes" id="dish6">
            <div class="image"></div>
            <div class="info">
                <h2>Gudbad</h2>
                <h3>Rs 80</h3>
                <input type="number" value="1" class="count" id="f" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Gudbad','80','f')">
            </div>
        </button>

        

        
    </div>

    <footer>
   
        <div class="fcont" id="fcont1">
        <h3>Locations</h3>
        <p>Mangalore</p>
        <p>Surathkal</p>
        <p>Udupi</p>
        <p>Bantwal</p>
        </div>
        <div class="fcont" id="fcont2">
            <h3>Quick Links</h3>
            <p>Home</p>
            <p>About</p>
            <p>Menu</p>
        </div>
        <div class="fcont" id="fcont3">
            <h3>Contact Info</h3>
            <p>+91 9980559536</p>
            <p>+38 43565656</p>
            <p>kaara@gmail.com</p>
            <p>ranjithkumarr@gmail.com</p>
            <p>rushabamin@gmail.com</p>
            <p></p>
        </div>
        
        <div class="fcont" id="fcont4">
            <h3>Follow Us</h3>
            <p>Facebook</p>
            <p>Instagram</p>
            <p>Twitter</p>
        </div>
        </footer>
        
        <div class="end">
        @COPYRIGHT 2021, ALL RIGHTS RESERVED
        </div>

        <script>
        function cart(x,y,c){
        var qty=document.getElementById(c).value;
        var itemname=x;
        var cost=y;
	    location.href = "k23.php?qty="+qty+"&itemname="+itemname+"&cost="+cost;
	    alert("Item added to Cart");
        }

    </script>
</body>
</html>