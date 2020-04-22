 <?php
  // Create database connection
  $db = mysqli_connect("localhost", "ygao11", "ygao11", "ygao11");

  // Initialize message variable
  if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}

?>