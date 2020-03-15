<?php
 session_start();
     if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
     $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
     header('HTTP/1.1 301 Moved Permanently');
     header('Location: ' . $location);
     exit;
     }
?>
<!DOCTYPE HTML>
<html lang="en">
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="login_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
</head>

<body class="body">
    <div class="login-page">
        <div class="form">

            <form method="post" action="validation.php" autocomplete="on">
                <input type="text" name="email" placeholder="&#xf007;  username" title="email" id='email'
                    value="<?php echo $email ?>" required autofocus />
                <input type="password" name="password" placeholder="&#xf023;  password" title="password"
                    value="<?php echo $password ?>" required />
                <li>
                    <label for="checkid" style="word-wrap:break-word; font-size:15px">
                        <input type="checkbox" id="checkid" name="rememberMe" title="rememberMe" value="1" />Remember
                        Username</label>
                </li>
                <input type="submit" id="button" value="Login" name="login">
                <button type="submit" id="button" value="admin_login" name="admin_login" formnovalidate>Admin Pass
                    Button</button>
                <p class="message"></p>
            </form>
        </div>
    </div>

</body>

</html>
<?php
if(isset($_COOKIE['cookie_email'])){
    $email=$_COOKIE['cookie_email'];
    echo "
    <script>
    document.getElementById('email').value = '$email';
    </script>";
}
?>