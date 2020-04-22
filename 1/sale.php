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
$db = mysqli_connect("localhost", "ygao11", "ygao11", "ygao11");

  // Initialize message variable
  if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}

$result = $db->query("SELECT image FROM images ORDER BY uploaded DESC"); 


?>


<!DOCTYPE html>
<html>

<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="countdownTimer.js"></script>
    <link rel="stylesheet" href="styleshee_home.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>For Sale</title>
</head>
<style>
        * {
            background-color: #24252A;
        }

        
        button {
            font-weight: bold;
            letter-spacing: .1em;
            outline: 0;
            background: transparent;
            width: 100%;
            border: 0;
            transition: all 0.3 ease;
            cursor: pointer;
            font-size: 25px;
            padding-top: 20px;
            font-family: san-serif;
            font-weight: 500;
            font-size: 17px;
            color: #edf0f1;
            text-decoration: none;
        }
        
        #notice {
            font-size: 30px;
            padding-top: 100px;
            font-family: sans-serif;
            font-style: italic;
            font-weight: bold;
            text-align: center;
            color: aliceblue;
        }

        img{
          width: 400px;
          height: 200px;
        }
    </style>
  <div id="main">
            <!--  Header Section -->
            <header>

                <nav>
                    <ul class="nav_bars">
                      <li><a id="nav_bar1" href="home.php">Home Page</a></li>
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


        <table><
        <?php if($result->num_rows > 0){ ?> 
    <div class="gallery"><tr><th>
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> </th></tr>
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?></table>



        <!--  Social Media Section -->
        <div  id="Social_Media">
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