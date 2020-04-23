<?php

// connnect to database
    $conn = new mysqli("localhost", "yli48", "yli48","yli48");

    $email=$_POST["email"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $password=$_POST["password"];


    $sql = "INSERT INTO users (userID, fName, lName, email, password) VALUES ('','$fname','$lname','$email','$password');";

    if ($conn->query($sql) == TRUE) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header('Location: home.php');
    } else {
        echo '<script>alert("Registration not Successful! Duplicate email ID or there was something wrong! Please try again.")
        location="signup.php";
        </script>';
    }
    mysqli_close($con);
?>