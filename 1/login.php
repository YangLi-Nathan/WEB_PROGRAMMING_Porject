<?php
session_start();
    if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === "off") {
    $location = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $location);
    exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
</head>

<body>
    <div class="pageContainer centerText">
        <h2>Login</h2>
        <form method="post" class="formLayout" action="validation.php" autocomplete="on">
            <div class="formGroup">
                <label>User Name(E-mail Address):</label>
                <input type="text" name="email" placeholder="E-mail" title="email" id='email'
                    value="<?php echo $email ?>" required autofocus /><br>
            </div>
            <div class="formGroup">
                <label>Password:</label>
                <input type="password" name="password" placeholder="password" title="password"
                    value="<?php echo $password ?>" required /><br>
            </div>
            <div class="formGroup">
                <label>Remember Username</label>
                <input type="checkbox" name="rememberMe" title="rememberMe" value="1" /><br>
            </div>

            <div class="formGroup">
                <label> </label>
                <div>
                    <input type="submit" value="Login" name="login"><br>
                    <button type="submit" value="admin_login" name="admin_login" formnovalidate>
                        Admin Pass Button</button>
                </div>
            </div>
        </form>
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