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

                <form method="post" action="search_result.php" autocomplete="on" class="formLayout"
                    enctype="multipart/form-data">
                    <label>Car Type</label>
                    <select id="type" name="cars">
                        <option value="used">Used</option>
                        <option value="new">New</option>
                    </select>

                    <label>Year</label>
                    <select id="type" name="year">
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="older_2014">Older than 2016</option>

                    </select>



                    <label>Model </label>
                    <select name="Model">

                        <option value="BMW i8">BMW i8</option>
                        <option value="BMW_m8">BMW M8</option>
                        <option value="BMW_M850">BMW m850</option>
                        <option value="Mercedes ">Mercedes Maybach</option>
                        <option value="Audi_a8">Audi A8</option>
                        <option value="Audi_r8">Audi R8</option>
                        <option value="Bentley Continental GT">Bentley Continental GT</option>
                        <option value="Alfa Romeo 4C">Alfa Romeo 4C</option>
                        <option value="Chevrolet Chevrolet">Chevrolet Chevrolet</option>
                        <option value="Aston Martin DB11">Aston Martin DB11</option>
                        <option value="Aston Martin DBS">Aston Martin DBS</option>

                    </select>

                    <label>Mileage Range </label>
                    <select name="mileage">

                        <option value="10000"> less than 10,000</option>
                        <option value="30000">10,000-30,000</option>
                        <option value="50000">30,000-50,000</option>
                        <option value="100000">50,000-100,000</option>

                    </select>

                    <label>Price Limit: </label>
                    <input style="border-color: white;" type="text" name="Price" class="textbox" required step='0.01'
                        pattern="[0-9]+([,\.][0-9]+)?" />

                    <input id="submit" type="submit" name="submit" value="SEARCH">


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
                <a id="sm5" href="https://www.youtube.com/watch?v=t-1ln2ZbJM4&feature=youtu.be"
                    class="fa fa-youtube"></a>
            </div>
    </body>

</html>