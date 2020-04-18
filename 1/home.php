<?php 
session_start();
# display login and signup button, else display username and logout button + counter timer
if(isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    $username=$_SESSION['email'];
    echo'<style>.sign_up {display:none;}</style>';
    echo'<style>.log_in {display:none;}</style>';
    echo'<style>.logout {display:block;}</style>';
    echo'<style>.username_display {display:block;}</style>';
    echo'<style>#countDowntimer {display:block;}</style>';

 }else{
    echo'<style>.sign_up {display:block;}</style>';
    echo'<style>.log_in {display:block;}</style>';
    echo'<style>.logout {display:none;}</style>';
    echo'<style>.username_display {display:none;}</style>';
    echo'<style>#countDowntimer {display:none;}</style>';
 }
?>


<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="countdownTimer.js"></script>
    <link rel="stylesheet" href="styleshee_home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>

<body>

    <body>
        <div id="main">
            <!--  Header Section -->
            <header>

                <nav>
                    <ul class="nav_bars">
                        <li><a id="nav_bar1" href=home.php>Home</a></li>
                        <li><a id="nav_bar2" href="sale.php">Car for Sale</a></li>
                        <li><a id="nav_bar3" href="sell.php">Sell your car</a></li>
                        <li><a id="nav_bar4" href="service.php">Maintenance Tips</a></li>
                        <li><a id="nav_bar5" href="contact.php">Contact Us</a></li>
                    </ul>
                </nav>
            </header>


            <!-- signup & login in -->
            <a class="sign_up" href="signup.php"><button>Sign up</button></a>

            <a href="login.php"><img class="log_in" src="images/images-removebg-preview.png" atl="log_in"></a>
            <!-- display user info and logout button + countdown timer-->

            <p class="username_display"><?php echo "Welcome!  "; echo $username;?></p>

            <p id="countDowntimer"></p>

            <a class="logout" href="logout.php"><button>Logout</button></a>
        </div>


        <div id="Animation">
            <img id="images_left" src="images/left.jpg" alt="Italian Trulli">
            <video id="video" controls autoplay loop>
                <source src="images/Peugeot_Instinct_Concept_Car.mp4" type="video/mp4">Your browser does not support the
                video tag.
            </video>
            <img id="images_right" src="images/right.jpg" alt="Italian Trulli">
        </div>


        <!--  Search Section -->
        <div id="Search_Section">
            <div class="center">
                <div class="dropdown">
                    <button class="dropbtn">New & Used Cars
                        <i class="caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="comingsoon.html">New</a>
                        <a href="comingsoon.html">Used</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Make
                        <i class="caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="comingsoon.html">BMW</a>
                        <a href="comingsoon.html">Mercedes-Benz</a>
                        <a href="comingsoon.html">Toyota</a>
                        <a href="comingsoon.html">Audi</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">Models
                        <i class="caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="comingsoon.html">BMW</a>
                        <a href="comingsoon.html">Mercedes-Benz</a>
                        <a href="comingsoon.html">Toyota</a>
                        <a href="comingsoon.html">Audi</a>
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn">No Max Price
                        <i class="caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="comingsoon.html">$10000.00</a>
                        <a href="comingsoon.html">$20000.00</a>
                        <a href="comingsoon.html">$30000.00</a>
                        <a href="comingsoon.html">$40000.00</a>
                    </div>
                </div>


                <div class="dropdown">
                    <button class="dropbtn">Mileage
                        <i class="caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="comingsoon.html">10000</a>
                        <a href="comingsoon.html">20000</a>
                        <a href="comingsoon.html">30000</a>
                        <a href="comingsoon.html">40000</a>
                    </div>
                </div>


                <div class="dropdown">
                    <button class=" dropbtn" onclick="comingsoon.html">Search
                        <i class="caret-down"></i>
                    </button>
                </div>


            </div>
        </div>

        <!--  Inventory Section -->

        <div id="Inventory">
            <h4 id="I_title">
                <pre>     Trending this year</pre>
            </h4>
            <hr><br>
            <ul id="news">
                <li><img class="im" id="im1" src="images/l1.jpg" onmouseover="this.src='images/l11.jpg';"
                        onmouseout="this.src='images/l1.jpg';" atl="gmc"></li>

                <li><img class="im" id="im2" src="images/l2.jpg" atl="gmc" onmouseover="this.src='images/l22.jpg';"
                        onmouseout="this.src='images/l2.jpg';"></li>

                <li><img class="im" id="im3" src="images/l3.jpg" atl="gmc" onmouseover="this.src='images/l33.jpg';"
                        onmouseout="this.src='images/l3.jpg';"></li>

                <li><img class="im" id="im4" src="images/l4.jpg" atl="gmc" onmouseover="this.src='images/l44.jpg';"
                        onmouseout="this.src='images/l4.jpg';"></li>

                <li><img class="im" id="im4" src="images/l5.jpg" atl="gmc" onmouseover="this.src='images/l55.jpg';"
                        onmouseout="this.src='images/l5.jpg';"></li>
            </ul>
        </div>

        <!--  Social Media Section -->
        <div id="Social_Media">
            <div class="center">
                <a id="sm1" href="https://www.facebook.com" class="fa fa-facebook"></a>
                <a id="sm2" href="https://www.twitter.com" class="fa fa-twitter"></a>
                <a id="sm3" href="https://www.google.com" class="fa fa-google"></a>
                <a id="sm4" href="https://www.linkedin.com" class="fa fa-linkedin"></a>
                <a id="sm5" href="https://www.youtube.com/watch?v=3HfVNXfMh0E&feature=youtu.be"
                    class="fa fa-youtube"></a>
            </div>
    </body>

</html>