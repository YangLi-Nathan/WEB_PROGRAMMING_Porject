<?php 
if(isset($_POST['admin_login'])){
    $myemail="admin@admin.com";
    $mypass="1234";
    session_start();
    $_SESSION['email']=$myemail;
    $_SESSION['password']=$mypass;
    header("location: welcome.php");
}else{
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header("location: welcome.php");
    
        if(isset($_POST['rememberMe']))
        {
            $cookie_email=$email;
            setcookie('cookie_email', $cookie_email, time()+60*60*7);
        }
    } else{
        header("location: login.php");
    }
}
?>