<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starters | Kaara</title>
    <link rel="stylesheet" href="starter.css">

    <style>
        .count{
            position:absolute;
            left:10%;
            position: absolute;
            left: 76%;
            width: 50px;
            top: 58%
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
        <h1>Starters</h1>
        <p>Looking for something to kickoff your tastebuds?!, You have with you an exclusive chain of options to choose from!</p>
    </div>
    <div class="dishbox">
        <button class="dishes" id="dish1">
            <div class="image"></div>
            <div class="info">
                <h2 id="tomato-soup">Tomato Soup</h2>
                <h3 id="price1">Rs 79</h3>
                <input type="number" value="1" class="count" id="a" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Tomato Soup','79','a')">
                
            </div>
        </button>
        <button class="dishes" id="dish2">
            <div class="image"></div>
            <div class="info">
                <h2 id="corn-soup">Corn Soup</h2>
                <h3>Rs 85</h3>
                <input type="number" value="1" class="count" id="b" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Corn Soup','85','b')">
            </div>
        </button>
        <button class="dishes" id="dish3">
            <div class="image"></div>
            <div class="info">
                <h2 id="chickensoup">Chicken Soup</h2>
                <h3>Rs 119</h3>
                <input type="number" value="1" class="count" id="c" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Chicken Soup','119','c')">
            </div>
        </button>
        <button class="dishes" id="dish4">
            <div class="image"></div>
            <div class="info">
                <h2 id="muttonsoup">Mutton Soup</h2>
                <h3>Rs 159</h3>
                <input type="number" value="1" class="count" id="d" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Mutton Soup','159','d')">
            </div>
        </button>
        <button class="dishes" id="dish5">
            <div class="image"></div>
            <div class="info">
                <h2>Chicken Cuttlet</h2>
                <h3 id="cuttlet">Rs 129</h3>
                <input type="number" value="1" class="count" id="e" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Chicken Cuttlet','129','e')">
            </div>
        </button>
        <button class="dishes" id="dish6">
            <div class="image"></div>
            <div class="info">
                <h2 id="tandoori">Chicken Tandoori</h2>
                <h3>Rs 139</h3>
                <input type="number" value="1" class="count" id="f" min="1">
                <input type="submit" value="Add to Cart" class="cart" onclick="cart('Chicken Tandoori','139','f')">
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
	    location.href = "k2.php?qty="+qty+"&itemname="+itemname+"&cost="+cost;
	    alert("Item added to Cart");
        }

    </script>


</body>
</html>

