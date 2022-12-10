



<?php
$servername = "iphonedb.cd8it5oofcje.us-west-1.rds.amazonaws.com";
$username = "root";
$password = "password";

$dbname = "iphoneproductsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

?>
