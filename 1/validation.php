// after user clicked login should go to the validation page
<?php 
    if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


    //admin user and password
    $myemail="admin@admin.com";
    $mypass="1234";
    // admin access
    if($email == $myemail and $password==$mypass){

        if(isset($_POST['rememberMe']))
        {
            $cookie_email=$email;
            setcookie('cookie_email', $cookie_email, time()+60*60*7);
        }
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;

        header("location: welcome.php");

    }else{
        echo "Email or Password is Invalided. <br> click here to <a href='login.php'> try again</a>";
    }


} else{
    header("location: login.php");
}