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
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="countdownTimer.js"></script>
    <link rel="stylesheet" href="styleshee_home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<style>


  #contact{
   margin-top: 10%;

  }

#title{
 text-align: center;
  color: white;
  font-size: 22px;


}
.sub-title{
padding-left: 30%;
  color: white;
  font-size: 18px;
  font-family: Comic Sans MS;


}
#content{
  color: white;
  font-size: 16px;
  padding-left: 30%;
  font-family: Comic Sans MS;

}



  </style>

<body>


    <body>
        <div id="main">
            <!--  Header Section -->
            <header>

                <nav>
                    <ul class="nav_bars">
                       <li><a id="nav_bar1" href="home.php">Home Page</a></li>
                        <li><a id="nav_bar2" href="sale.php">Car for Sale</a></li>
                        <li><a id="nav_bar3" href="sell.php">Sell your car</a></li>
                        <li><a id="nav_bar4" href="service.php">Maintenance Tips</a></li>
                        <li><a id="nav_bar5" href=contact.php>Contact Us</a></li>
                        
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
<div id="contact">

        <br><p id='title'> CUSTOMER SERVICE</p><br>
        <hr style="width: 50%; margin:auto;"><br>
        <p class="sub-title"> Email:</h4><br><br>

       
  <p id="content"> 
  SalesCar@gmail.com<br><br>
*Response will return within one business day</p><br>
<hr style="width: 50%; margin:auto;"><br>
</div>
<p class="sub-title"> Telephone:</h4><br><br>
  <p id="content"> 
  (404)-xxx-xxxx<br><br>
Monday to Friday from 8.30 am to 7.30 pm (EST)<br>
Saturday from 10:00 am to 4:00 pm (EST)</p><br>

<hr style="width: 50%; margin:auto;"><br>
        <p class="sub-title"> Interested to Join In?</h4><br><br>
          <p id="content"> 
  Welcome and send your resume to SalesGroup@gmail.com<br><br><br></p>







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