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
    echo'<style>#form {display:block;}</style>';
    echo'<style>#login_message {display:none;}</style>';
    echo'<style>h3 {display:block;}</style>';

 }else{
    echo'<style>.sign_up {display:block;}</style>';
    echo'<style>.log_in {display:block;}</style>';
    echo'<style>.logout {display:none;}</style>';
    echo'<style>.username_display {display:none;}</style>';
    echo'<style>#countDowntimer {display:none;}</style>';
    echo'<style>#form {display:none;}</style>';

    echo'<style>#login_message {display:block;}</style>';
    echo'<style>h3 {display:none;}</style>';

 }
$db = mysqli_connect("localhost", "ygao11", "ygao11", "ygao11");

  // Initialize message variable
  if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 



    $cars=$_POST['cars'];
    $year=$_POST['year'];
    $model=$_POST['Model'];
    $mileage=$_POST['mileage'];
    $price=(int)$_POST['Price'];
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $db->query("INSERT into images (session_name, cars, year, model, mileage, price, image, uploaded) VALUES ('$username','$cars','$year','$model','$mileage','$price','$imgContent', NOW())"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 


 



?>

<html>

<script src="countdownTimer.js"></script>
<link rel="stylesheet" href="styleshee_home.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <style>
    label,
    select {
        color: white;
    }

    h3 {
        color: white;
        margin-left: 100px;
    }

    img {
        position: absolute;
        width: 1300px;
        top: 70px;
        right: 0px;
    }

    input [type=text] {
        color: white;
        border: 2px, white;
        border-radius: 4px;
    }

    input {
        color: white;
    }

    #form {
        margin-left: 100px;
    }

    @media(max-width:1700px) {
        img {
            position: relative;
            width: 100%;
            top: 0px;

        }
    }

    #submit {
        color: white;
        font-size: 16px;
        font-family: Comic Sans MS;
        margin-left: 17%;
    }

    #login_message {
        font-size: 20px;
        color: white;
        font-family: Comic Sans MS;
        margin-left: 5%;
    }

    table,
    tb,
    tr {
        color: white;
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


    </div>
    <br><br><br><br><br><br><br><br>
    <h3>Tell Us About Your Car</h3><br>
    <div id="form">

        <form method="post" action="sell.php" autocomplete="on" class="formLayout" enctype="multipart/form-data">
            <label>Car Type</label>
            <select id="type" name="cars">
                <option value="used">Used</option>
                <option value="new">New</option>
            </select><br><br>

            <label>Year</label>
            <select id="type" name="year">
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="older_2014">Older than 2016</option>

            </select><br><br>



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

            </select><br><br>

            <label>Mileage Range </label>
            <select name="mileage">

                <option value="10000"> less than 10,000</option>
                <option value="30000">10,000-30,000</option>
                <option value="50000">30,000-50,000</option>
                <option value="100000">50,000-100,000</option>

            </select><br><br>

            <label>Price: </label>
            <input style="border-color: white;" type="text" name="Price" class="textbox" required step='0.01'
                pattern="[0-9]+([,\.][0-9]+)?" /><br><br>

            <label>Select a Picture of your car:</label>
            <input type="file" name="image"><br><br>





            <input id="submit" type="submit" name="submit" value="Upload">
        </form>
        <br>


        <input id="submit" type="button"
            onclick="window.location.href = 'https://codd.cs.gsu.edu/~ygao11/project/mini-project3/modify.php';"
            value="Previous Record">
    </div>

    <div id="login_message">Please login or signup first!<br> Thank you for your Cooperation!</div>
    <div id="current_sells">
    </div>


    <?php 


if(isset($_POST['submit'])){
  echo "<script>alert('submit successfully, the record is added to our database');</script>"; 
}

 ?>



    <img src="sell_bac.jpg" atl="log_in"></a>


</body>

</html>