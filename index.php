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
<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
	?>
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
    
);?>

<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
		<?php

		for($i=0;$i<9;$i++){

			echo " <div class=' col-md-4 col-sm-6 col-xs-12' id='{$arr[$i]['id']}'>
			<a href=`/viewProduct?id={$arr[$i]['id']}`>
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


		}
               
                
			

		

			

		
	</div>
</div>


<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>



<?php } else { 
	require 'header_logged_in.php'; 
?>

<div class="container" style="margin-top: 50px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 1</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\phones\iphone11promax.jpg">
                                            <b> Apple iphone 11 pro max<br><br></b>
                                            <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;1,01,400/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apple<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iOS<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.8 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 MP</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 2</div>
				<div class="panel-body" >
					
					<center><img  class="img-responsive" src="images\phones\minote9pro.jpg">
					<b> Redmi note 9 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;19,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xiomi<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.67 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48 MP Quad</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 3</div>
				<div class="panel-body">
					<center><img  class="img-responsive"  src="images\phones\oneplus7tpro.jpg">
					<b> One Plus 7T pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;58,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oneplus<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 4</div>
				<div class="panel-body">
					<center><img  class="img-responsive" src="images\phones\oppo f11.jpg">
					<b>oppo f11 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;21,990/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPPO<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.5 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48 MP</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 5</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\realme6pro.jpg">
					<b>realme 6 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;18,499/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Realme<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.6 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16 MP dual<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64 MP Quad</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 6</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\vivos1pro.jpg">
					<b>vivo s1 pro <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;19,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIVO<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.4 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48 MP Quad</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 7</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\Motorolaedgeplus.jpg">
					<b>Motorola edge plus <br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;74,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Motorola<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;25 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;108 MP triple</p>
                                        
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 8</div>
				<div class="panel-body" >
					<center><img  class="img-responsive" src="images\phones\nokia9.jpg">
					<b>nokia 9<br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;36,899/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nokia<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.99 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;20 MP penta</p>
					<button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>
                <div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 9</div>
				<div class="panel-body" >
                                    <center><img  class="img-responsive" src="images\phones\samsunggalays20.jpg">
                                        <b>samsung galaxy s20<br><br></b>
                                        <b>Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹&nbsp;&nbsp;77,999/-<br><br></b></center>
                                        <b>specifications</b>
                                        <p>Brand &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Samsung<br>
                                           Operating &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Android<br>
                                           Screen size &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.7 inches<br>
                                           Security &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facial Recognition<br>
                                           Front camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40 MP<br>
                                           Rear camera &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;108 MP Quad</p>
                                        
                                        <button class="btn btn-primary form-control" title="click here to add this item in the cart" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

			

		
	</div>
</div>

<?php } ?>

<?php require 'login_modal.php'; ?>
<?php require 'add_to_cart.php'; ?>


</body>
</html>

