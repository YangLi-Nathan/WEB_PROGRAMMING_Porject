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
    <title>Signup Page</title>
    <link rel="stylesheet" href="stylesheet_signup.css" />

</head>

<body>

    <div class="user">
        <header class="user__header">
            <img class="logo" src="images/logo1-removebg-preview.png" atl=""></a>
            <br>

            <h1 class="user__title">Sign up with E-mail</h1>
        </header>

        <form class="form" method="POST" action="validation.php">

            <div class="form__group">
                <input type="email" placeholder="E-mail" maxlength="30" class="form__input" name="email"
                    value="<?php echo htmlspecialchars($email) ?>" required autofocus />
            </div>

            <div class="form__group">
                <input type="text" name="fname" class="form__input" required placeholder="First Name" maxlength="20"
                    pattern="[A-Za-z'-]{2,20}" value="<?php echo htmlspecialchars($fname); ?>">
            </div>

            <div class="form__group">
                <input type="text" name="lname" class="form__input" required placeholder="Last Name" maxlength="20"
                    pattern="[A-Za-z'-]{2,20}" value="<?php echo htmlspecialchars($lname); ?>">
            </div>

            <div class="form__group">
                <input type="password" placeholder="Password" minlength="5" class="form__input" name="password"
                    value="<?php echo htmlspecialchars($password) ?>" required />
            </div>

            <button class="btn" type="submit" value="signup" name="signup">Register</button>
        </form>
    </div>

</body>

</html>