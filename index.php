<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head><title>Iphone Store | BEST ONLINE MOBILE SHOPPING STORE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">

</style>
</head>
<body style="font-family: Montserrat">

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

);



$data = array();
$temp = array();
for($i=0;$i<12;$i++){
    if(isset($_COOKIE[(string)$i])){
        $temp[$i]= $_COOKIE[(string)$i];

    }


}


arsort($temp);


foreach ($temp as $key => $value) {

    foreach ($arr as $a){
        if((string)$a['id']==(String)$key){
            array_push($data,$a);
        }
    }


}

// most recent will now stay in data, but we need only the first 5

$end=5;
if(sizeof($data)<5)
    $end=sizeof($data);








?>

<h2 style="margin-top: 2em;text-align: center"> Most Recent Products</h2>

<?php


for($i=0;$i<$end;$i++){
    echo "
            
            <div class='col-2'>
            <a href='/viewProduct.php?id={$data[$i]['id']}'>
            
                <img src={$data[$i]['image']} class='img-fluid' alt=''>
                <br>
                <br>
                <h3 class='text-center'>{$data[$i]['name']}
                </h3>
                <h6 class='text-center'>{$data[$i]['price']}</h6>

            </a>
            </div>
            
            
        ";
}


?>

<div class="row">

</div>








<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
	?>


<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
		<?php

		for($i=0;$i<9;$i++){

			echo " <div class=' col-md-4 col-sm-6 col-xs-12' id='{$arr[$i]['id']}'>
			<a href='/iphonestore/viewProduct.php?id={$arr[$i]['id']}'>
			<div class='panel panel-default'>
				<div class='panel-heading' style='background-color:grey'></div>
				<div class='panel-body'>
                                       
                                        <center><img  class='img-responsive' src='{$arr[$i]['image']}' height='205' >
					<b> {$arr[$i]['name']} <br></b>Price:{$arr[$i]['price']}/-
                                        
                                    <!--   <a  data-toggle='modal' data-target='#pz' title='login to see full specification' ><span></span>specifications</a></center></center>-->
                                        
					<button class='btn btn-primary form-control' style='background-color:grey' type='button' value='Submit'  name='btn' data-toggle='modal' data-target='#pz'>Specifications</button>


				</div>
			</div>
			</a>
		</div>	";


		}?>
               
                
			

		

			

		
	</div>
</div>


<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>






<?php } ?>

<?php require 'login_modal.php'; ?>
<?php require 'add_to_cart.php'; ?>


</body>
</html>

