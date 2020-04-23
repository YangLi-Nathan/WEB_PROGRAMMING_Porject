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
    <title>Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="countdownTimer.js"></script>
    <link rel="stylesheet" href="styleshee_home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<style>
  <style>


  #contact{
   margin-top: 10%;
   

  }

#title{
 text-align: center;
  color: white;
  font-size: 22px;
   font-family: Comic Sans MS;
   background-image: url("images/l2 copy.jpg");
    opacity: 0.5;
   height: 550px;
   


}
.sub-title{
padding-left: 30%;
  color: white;
  font-size: 18px;
  font-family: Comic Sans MS;


}
#content{
  color: white;
  font-size: 14px;
  padding-left: 30%;
  font-family: Comic Sans MS;

}
.sub-title1{
padding-left: 60%;
  color: white;
  font-size: 18px;
  font-family: Comic Sans MS;


}
#content1,#ul1{
  color: white;
  font-size: 14px;
  padding-left: 60%;
  font-family: Comic Sans MS;

}
#box{
  width: 30%;
  
}
#box_1{
  width: 100%;
}
#ul1,.li1{
  font-family: Comic Sans MS;
  font-size: 14px;

}
#content2,#ul2{
  color: white;
  font-size: 14px;
  padding-left: 25%;
   padding-right: 35%;
  font-family: Comic Sans MS;
    

}

.sub-title2{

  color: white;
  font-size: 18px;
  font-family: Comic Sans MS;
  padding-left: 25%;



}

#box_2{
  width: 100%;

}
#ul2,.li2{
  font-family: Comic Sans MS;
  font-size: 14px;


}


  </style>
  </style>
<body>


    <body>
      <div id="img">
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


        <br><p id='title'> CAR MAINTENANCE TIPS</p><br><br>

       
        <div id="box">
        <p class="sub-title">Preventative Vehicle Maintenance vs. Vehicle Repair Maintenance</h4><br><br>

       
  <p id="content"> 
  Preventative vehicle maintenance is all about keeping your car out of the shop, where expensive repairs add up quickly. The expense required to perform routine maintenance will pay for itself many times over compared to fixing a broken down car. </p><br>
<hr style="width: 50%; margin:auto;"><br>
</div>

<div id="box_1">
<p class="sub-title1" > Preventative Vehicle Maintenance means:</h4><br><br>
  <p id="content1"> 
    <ul id="ul1" style="list-style-type:square;">
      <li class="li1">Changing your car’s oil every 3,000 miles vs. just adding oil when it leaks out or burns off</li>
      <li class="li1">Using mid-grade fuel from reputable gas stations vs. using the cheapest gas</li>
      <li class="li1">Checking your car’s fluid levels regularly (oil, coolant, brake fluid, transmission fluid, etc.)</li>
      <li class="li1">Performing annual maintenance vs. ignoring your vehicle manufacturer’s maintenance recommendations</li>
      <li class="li1">Aligning the front-end of your car annually vs. having uneven, premature wear on your tires and paying to replace your tires often</li>
    </ul><br>
  <hr style="width: 35%; float:right"><br>

  </p><br>
</div>
</p></div>
<div id="box_2">
<p class="sub-title2" > Using Tehnology to track Maintenance</h4><br><br>
  <p id="content1"> 
    <ul id="ul2" style="list-style-type:square;">
      <li class="li2">aCar - A popular Android car maintenance tracker comes with easy-to-fill up records od your vehicle's maintenance, repair, and mileage histories</li>
      <li class="li2">AutoCare -  This applications available on Android and iOS gives you the ability to track your car's repair and maintenance history, fuel mileage, and a whole lot more. It even has notifications for work that needs to be completed on your vehicle.</li>
      <li class="li2">Car Minder Plus- An iOS app, the Car Minder Plus is perfect for seamless monitoring of actions perfomed on your oil filters, dive belts, engine oils, and air filters as these already come as presets. You can also enter and manage your own maintenance records for a more customized touch</li>
      <li class="li2">Road Trip - Available on iOS, Road Trip Tracks fuel mileage as well as maintenance history, maintenance costs, and reminders for future vehicle-related activities. There's tire log, too, giving you an idea of the tread wear on your summer and winter tires</li>
    </ul><br>
  <hr style="width: 35%; margin-left:10%;"><br>
<ul id="ul1" style="list-style-type:square;">
  <li class="li1">Source: https://www.carbibles.com/car-maintenance-tips/</li>
  <li class="li1">Source: https://www.handsofthecarpenter.org/car-maintenance-tips/?gclid=CjwKCAjwp-X0BRAFEiwAheRui47xaKQN6h8b60HanFR0VT0kbU_d0VLnWcqctGodyv9E9z_dLuv_SBoCXNsQAvD_BwE#</li>
</ul>



  </p><br>
</div>




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