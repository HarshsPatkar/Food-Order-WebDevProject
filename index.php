<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaara</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <style>

        html{
            scroll-behavior: smooth;
        }
        #carouselExampleIndicators {
            width: 100vw;
            height: 85vh;
            background-size: cover;
            background-position: center;
        }

        .w-100{
            height:673px;
        }

        .carousel-inner {
            position: relative;
            width: 100vw;
            height: 85vh;
            overflow: hidden;
        }

        .carousel-item img{
            background-size: cover;
            background-position: center;
        }

        #carouselExampleIndicators .carousel-inner h1{
            color: white;
            display:block;
            position: absolute;
            top:10%;
            left:50%;
        }

        #carouselExampleIndicators .carousel-inner p{
            color: white;
            display:block;
            position: absolute;
            top: 16%;
            left:50%;
        }

        #carouselExampleIndicators .carousel-inner button{
            
            display:block;
            position: absolute;
            top:13%;
            left:50%;
        }

        #carouselExampleIndicators #carimg1 h1{
            top: 25%;
            left: 38%;
        }

        #carouselExampleIndicators #carimg1 p{
            top: 35%;
            left: 45%;
        }

        #carouselExampleIndicators #carimg1 button{
            left: 47%;
            top: 43%;
            padding: 9px;
            background: transparent;
            border: 1px solid gray;
            color: white;
        }

        #carouselExampleIndicators #carimg1 button:hover{
            background-color: gray;
            transition-duration: 0.4s;
        }

        #carouselExampleIndicators #carimg2 h1{
            top: 25%;
            left: 43%;
        }

        #carouselExampleIndicators #carimg2 p{
            top: 35%;
            left: 45%;
        }

        #carouselExampleIndicators #carimg2 button{
            left: 47%;
            top: 43%;
            padding:9px;
            background:transparent;
            border:1px solid gray;
            color:white;
        }
        #carouselExampleIndicators #carimg2 button:hover{
            background-color: gray;
            transition-duration: 0.4s;
        }

        #carouselExampleIndicators #carimg3 h1{
            left: 45%;
            top: 26%;
        }

        #carouselExampleIndicators #carimg3 p{
            top: 35%;
            left: 48%;
        }

        #carouselExampleIndicators #carimg3 button{
            left: 49%;
            top: 43%;
            padding:9px;
            background:transparent;
            border:1px solid gray;
            color:white;
        }

        #carouselExampleIndicators #carimg3 button:hover{
            background-color: gray;
            transition-duration: 0.4s;
        }

        footer .fcont h3{
            font-size: 18px;
            margin-bottom: 18px;
        }

        #menuheader{
            color: white;
    position: absolute;
    text-decoration: none;
    font-size: 18px;
    right: 30%;
    /* margin-bottom: 21px; */
    /* left: 217px; */
    font-weight: 400;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

#menuheader:hover{
    color:grey;
    cursor:pointer;
}

#aboutus{
    color:white;
    text-decoration: none;
    position: absolute;
    font-size: 16px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    top:31%;
    right:41%;

}

#aboutus:hover{
    color:grey;
    cursor:pointer;
}

#aboutusimg{
    width:200px;
    height:200px;
    border-radius: 50px;
}

.fcont a{
    color:black;
    text-decoration: none;
}

#login{
    font-size:17px;
}

.offerbox{
    height:85vh;
}

#fcont1 h3{
    font-size: 18px;
    margin-bottom: 25px;
}

#fcont3 h3{
    margin-bottom: 18px;
}

.reviewbox{
      width:100%;
      /* height:500px; */
      /* border:2px solid black; */
      display:flex;
      align-items:center;
      justify-content:space-between;
      flex-direction:column;
}

.reviewtitle{
    height:80px;
    width:100vw;
    background-color:ghostwhite;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:26px;
    font-weight:500;
}

.reviewcontent{
    width:93%;
    height:200px;
    border: 1px solid grey;
    border-radius: 10px;
    margin-top: 5px;
    margin-bottom: 5px;
    box-shadow: 0px 0px 15px 0px #b0aeae;
    box-shadow: inset 0px 0px 5px 0px #b0aeae;
  	-webkit-box-shadow: inset 0px 0px 13px 0px #b0aeae;
}

.reviewcontent:hover{
    box-shadow: 0px 0px 15px 0px #b0aeae;
    transition-duration:0.5s;
}


.user{
    margin: 16px;
    margin-left: 37px;
    margin: 16px;
    margin-left: 37px;
    font-size: 21px;
    font-weight: 400;
    border-bottom: 1px solid grey;
}

.content{
    margin: 37px;
}

#fcont3{
    justify-content:space-between;
}


        
    </style>


</head>

<body>
    <div class="mainbox">
        <header>
            <h3 onclick="window.open('index.php');">Kaara</h3>
            <!-- <img src="kaaralogo.png" id="kaaralogo"></img> -->
            <a href="#aboutuscroll" id="aboutus">About Us</a>
            <a href="#menuscroll" id="menuheader">Menu</a>
            <a href="login.html" id="login">Login</a>
            <a href="signup.html" id="signup" target="_blank">Sign Up</a>
            
        </header>
        <div class="offerbox">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" id="carimg1">
                        <img src="carouselburger.jpg" class="d-block w-100" alt="...">
                        <h1>Flat 40% Discount!!</h1>
                        <p>Cant wait to grab it?</p>
                        <button onclick="window.open('login.html');">Buy Now</button>
                    </div>
                    <div class="carousel-item" id="carimg2">
                        <img src="carouselcake.jpg" class="d-block w-100" alt="...">
                        <h1 >Save 20%!</h1>
                        <p >Treat Yourself Now!</p>
                        <button onclick="window.open('login.html');">Buy Now</button>
                    </div>
                    <div class="carousel-item" id="carimg3">
                        <img src="carouselseafood.jpg" class="d-block w-100" alt="...">
                        <h1 >Save 25%!</h1>
                        <p >Smell the Ocean!</p>
                        <button onclick="window.open('login.html');">Buy Now</button>    
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
           
        </div>

    </div>

    <div class="aboutusinfo">
        <div class="aboutusheading" id="aboutuscroll">
            <h4>About Us</h4>
        </div>
        <div class="justinfo">
            <div class="justinfoimg">
                <img src="fruitsalad.jfif" id="aboutusimg">
            </div>
            <div class="justinfoinfo">
                <p>Launched in 2021, Our technology platform connects customers, restaurant partners and delivery partners, serving their multiple needs. Customers use our platform to search for exquisite cuisines and have a scumptious meal. Our wide range of cuisines are an art of ultimate patience, dedication and relentless experiments behind the broilers. The countless reviews from all over India in such a short span of time inspire us to cook amazing food everyday! Lets all come closer and together celebrate the art of food!</p>
            </div>
        </div>
    </div>

    <h2 id="menu" >Menu</h2>
    <div class="menucontainer" id="menuscroll" >
        <button class="box" id="box1" onclick="window.open('starter.html');">Starters</button>
        <button class="box" id="box2" onclick="window.open('maincourse.html');">Main Course</button>
        <button class="box" id="box3" onclick="window.open('desserts.html');">Desserts</button>
        <button class="box" id="box4" onclick="window.open('beverages.html');">Beverages</button>
    </div>

    <div class="reviewtitle">Reviews</div>

    <div class="reviewbox">
    <?php

    $server="localhost";
    $username="root";
    $password="";
    $dbname="kaara";
    $conn = mysqli_connect($server , $username , $password , $dbname);

     $query="select * from review";

     $run= mysqli_query($conn,$query) or die(mysqli_error($conn));

     while($rows=mysqli_fetch_assoc($run))
     {
     ?>
     <div class="reviewcontent">
     <p class="user"><?php echo $rows['namex']; ?></p>
     <p class="content"><?php echo $rows['content']; ?></p>
     </div>
     <?php
     }
     ?>

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
            <a href="index.php">Home</a>
            <a href="#aboutuscroll">About</a>
            <a href="#menuscroll">Menu</a>
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
            <a href="https://www.facebook.com/">Facebook</a>
            <a href="https://www.instagram.com">Instagram</a>
            <a href="https://www.twitter.com">Twitter</a>
        </div>
    </footer>

    <div class="end">
    @COPYRIGHT 2021, ALL RIGHTS RESERVED
    </div>

    

</body>

</html>