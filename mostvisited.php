<!doctype html>
<html lang="en">
<head>

<title>Most Visited</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">

</style>

</head>
<body>



<?php
require "dbconnect.php";

$sql = "SELECT * FROM iphoneproductsdb.products; order by count desc ";

$result = $conn->query($sql);

if (mysqli_num_rows($result) === 0) {

    echo "<center><h1 class='lead'> No records found </h1></center>";
} else {

    while ($row = $result->fetch_assoc()) {
        echo "
<br>
             <div class='portfolioContainer'>
            <div class='row'>
                <div class='col-3'></div>
                <div class='col-6' style='background-color:#e3e3e3;border-radius: 5px 5px;padding:5px'>
                       <div class='container'>
                                <p class='h2' style='color: black'>{$row['name']}</p>
                         <div class='row'>
                             <div class='col-6'>
                                 <p class='lead' style='text-align: left;color: black'>calories : {$row['price']}</p>
                             </div>
                             <div class='col-6'>
                                 <p class='h8' style='text-align: right'>Views :{$row['count']}</p>
                             </div>
                         </div>

                       </div>
                </div>
            </div>
    </div>
    <br>
                          
                        
                      
    ";
    }

}

?>





</body>
</html>