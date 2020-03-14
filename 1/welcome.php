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
    <p id="countDowntimer"></p>

    <form method="post" class="formLayout">
        <div class="formGroup">
            <input type="hidden" name="abandon" value="true">
            <label> </label>
            <button type="submit">Logout</button>
        </div>
    </form>
    <script>
    var countDownDate = new Date("May 5, 2020 12:45:00").getTime();
    // Update the count down every 1 second
    var x = setInterval(function() {
        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countDowntimer").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countDowntimer").innerHTML = "EXPIRED";
        }
    }, 1000);
    </script>









</body>

</html>