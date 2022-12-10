



<?php
$servername = "iphonedb.cd8it5oofcje.us-west-1.rds.amazonaws.com";
$username = "root";
$password = "password";

$dbname = "iphoneproductsdb";

try{
// Create connection
$conn = mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli->errror);
}
echo "Connected successfully";

}catch(Exception $e){
  echo $e;
}

?>
