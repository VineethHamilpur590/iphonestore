<?php ob_start(); ?>
<?php $arr = array(
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
    array('id'=>9,
        'image' => 'images\phones\iphone8plus.jpg',
        'name' => 'Iphone 8 plus',
        'calories' =>'$399',
        'description'=>'Take two great things and put them together. Like our soft ice cream and crumbled-up Oreo cookies. Who could resist?'
    ),

    array('id'=>10,
        'image' => '/BurgerShack-CMPE-272/img/menu/potato.jpeg',
        'name' => 'Mini Potato Waffles',
        'calories' =>'201 kCal',
        'description'=>"Just when you thought frozen waffles couldn’t get any more convenient! Introducing Birds Eye mini potato waffles - a bite-sized version of the classic teatime favourite. 

Made with quality potatoes within 40 miles of our UK Waffle factory, Birds Eye mini waffles are a super versatile version of the old family staple. Low in saturated fat and full of energy, they're the perfect companion to any meal.

Our deliciously crisp mini potato waffles are made with real frozen potatoes and gluten free. Available in a small or big bag and ready on the grill in 5-10 minutes. Even better!"
    ),array('id'=>11,
        'image' => '/BurgerShack-CMPE-272/img/menu/apple_pie.jpeg',
        'name' => 'Apple Pie',
        'calories' =>'243 kCal',
        'description'=>"Crispy on the outside, deliciously hot and sweet on the inside, our Apple Pie is a McDonald's classic."
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


 require "dbconnect.php";

$sql = "SELECT * FROM products WHERE id={$id}";


$result = $conn->query($sql);

if (mysqli_num_rows($result) === 0) {

    $sql = "INSERT INTO products (id,name,calories,image,count) values ({$id},'{$data['name']}','{$data['calories']}','{$data['image']}',1)";

    $result2 = $conn->query($sql);


}else{
    while($row = $result -> fetch_assoc()){
        //echo "number of rows: " . $result->num_rows;
        $count =1+$row["count"];
        $sql = "UPDATE products set count='{$count}' where id={$id}";
        $result = $conn->query($sql);
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

    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, maximum-scale=1'>


    <link rel='shortcut icon' type='image/x-icon' href='/BurgerShack-CMPE-272/favicon.png'/>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <link href='BurgerShack-CMPE-272/css/style.css' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
          integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>


    <title>View Product</title>

</head>
<body>

<?php require 'nav2.php'?>

<br>
<br>
<br>

<?php
echo "<div class='container'>
    <div class='row'>
        <div class='col-4'></div>
        <div class='col-4'>
            <p class = lead style='text-align: center'>{$data['name']}</p>
            <br>
            <p class = lead style='text-align: center; font-weight: bold'> Calories : {$data['calories']}</p>
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