<?php 
session_start();
# redirect back to login page
if (!isset($_SESSION['email'])) {
    header("location: login.php");
    exit;
}
if (!isset($_SESSION['password'])) {
    header("location: login.php");
    exit;
}
if (isset($_POST['abandon'])) {
    session_unset();
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<body>
    <?php
    echo "Welcome " . $_SESSION['email'];
    ?>
    <form method="post" class="formLayout">
        <div class="formGroup">
            <input type="hidden" name="abandon" value="true">
            <label> </label>
            <button type="submit">Logout</button>
        </div>
    </form>
</body>

</html>