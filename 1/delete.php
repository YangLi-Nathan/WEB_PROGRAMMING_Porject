<?php



if(isset($_GET['did'])) {

$db = mysqli_connect("localhost", "ygao11", "ygao11", "ygao11");

  // Initialize message variable
  if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
  echo $_GET['did'];
  $id=$_GET['did'];


$result = $db->query("DELETE FROM images WHERE `id`=$id "); 



header( "refresh:1;url=modify.php" );
}
  
?>




<!DOCTYPE html>
<html>
<head>
  <title>
    

  </title>
</head>
<style>
  * {
            background-color: #24252A;
        }
        p{
          color: white;
          font-size: 20px;
          font-family: Comic Sans MS;
        }

  </style>
<body>

<p> Deleting....</p>

</body>
</html>