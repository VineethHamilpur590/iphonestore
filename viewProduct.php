<?php ob_start(); ?>
<?php 

$arr = array(
    array('id'=>0,
        'image' => 'images\phones\iphone14promax.jpg',
        'name' => 'Iphone 14 pro max',
        'price' =>'$1099',
        'description' => 'Sometimes you just want to reach for a classic.'
    ),
    array('id'=>1,
        'image' => 'images\phones\iphone13pro.jpg',
        'name' => 'Iphone 13 pro',
        'price' =>'$999',
        'description'=>'With New and improved camera.'
    ),
    array('id'=>2,
        'image' => 'images\phones\iphone11.jpg',
        'name' => 'Iphone 11',
        'price' =>'$599',
        'description' =>"With new improved A13 Bionic chip."
    ),
    array('id'=>3,
        'image' => 'images\phones\iphonex.jpg',
        'name' => 'Iphone X',
        'price' =>'$499',
        'description' =>"With new and improved A12 bionic chip."

    ),
    array('id'=>4,
        'image' => 'images\phones\iphonese.jpg',
        'name' => 'Iphone SE',
        'price' =>'$429',
        'description' =>"With new multi-touch display and IPS Technology."
    ),
    array('id'=>5,
        'image' => 'images\phones\iphone6splus.jpg',
        'name' => 'Iphone 6S Plus',
        'price' =>'$299',
        'description' =>'It’s a classic with wide color display.'
    ),
    array('id'=>6,
        'image' => 'images\phones\iphone6s.jpg',
        'name' => ' Iphone 6s',
        'price' =>'$259',
        'description'=>"With new Fingerprint resistant coating ."
    ), array('id'=>7,
        'image' => 'images\phones\iphone12pro.jpg',
        'name' => ' Iphone 12 pro',
        'price' =>'$699',
        'description'=>'With new Haptic touch technology.'
    ), array('id'=>8,
        'image' => 'images\phones\iphone12.jpg',
        'name' => 'Iphone 12',
        'price' =>'$259',
        'description'=>'With new retina HD Display.'
    ),
    
);


$id =  $_GET['id'];
$id = (string)$id;

$data =array();
foreach ($arr as $item) {

    if($item['id']==$id){
        //echo "found <br>";
        $data = $item;
        break;
    }
}


 


$cookie_name = $id;
$cookie_val = time();
setcookie($cookie_name,$cookie_val,time()+60*60*24,'/');



?>


<!doctype html>
<html lang='en'>
<head>

<title>View Product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">

</style>

</head>
<body>


<br>
<br>
<br>

<?php

require "header_logged_out.php"
echo "<div class='container'>
    <div class='row'>
        <div class='col-4'></div>
        <div class='col-4'>
            <p class = lead style='text-align: center'>{$data['name']}</p>
            <br>
            <p class = lead style='text-align: center; font-weight: bold'> Price : {$data['price']}</p>
            <br>
            <br>
            <img src={$data['image']} class='img-fluid' alt=''>
        </div>
    </div>
    <br>
    <br>
    <div class='row'>
        <div class='col-2'></div>
        <div class='col-8'>
            <p class = lead style='text-align: center'>{$data['description']}</p>
        </div>
    </div>
    <div class='row'></div>
</div>" ; 

?>









</body>
</html>