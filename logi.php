

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	

</style>
</head>
<body>
<?php 
if (isset($_POST["Login"]) && !empty($_POST["Username"]) && !empty($_POST["Password"])){
    $userfile = fopen("credentials.txt", "r");
    while(($line=fgets($userfile))!==false){
        $line = rtrim($line,"\r\n");
        $user = explode(",", $line);
        if ($_POST["Username"]==$user[0]  && $_POST["Password"]==$user[1]){
            $_SESSION["user"] = $_POST["Username"];
            fclose($userfile);
            header("location: admin.php");
            exit;
        }else{
            header("location: error.php");
        }
    }
}
?>
</body>
</html>


