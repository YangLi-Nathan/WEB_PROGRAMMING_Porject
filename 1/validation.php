<?php 
if(isset($_POST['admin_login'])){
    $myemail="admin@admin.com";
    $mypass="123456789";
    session_start();
    $_SESSION['email']=$myemail;
    $_SESSION['password']=$mypass;
    header("location: home.php");
}else{
    if(isset($_POST['login'])){
        // check email and password
        $email = $_POST['email'];
        $password = $_POST['password'];

        // connect to the server and select database
        $conn = new mysqli("localhost", "yli48", "yli48","yli48");

        // to avoid mysql injection
        $email = stripslashes($email);
        $password = stripslashes($password);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql ="SELECT * from users where email='$email' and password='$password'";

        $result=mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);

        if($count == 1)
        {
        // Register $username, $password and redirect to file "login_success.php"
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION['password']=$password;
        header("location:home.php");
        }
        else {
        echo '<script>alert("Username and/or Password incorrect.\\nTry again.")
        location="login.php";
        </script>';
        
        }
    }
}
?>