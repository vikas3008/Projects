<?php
//echo "<pre>";
//print_r($_POST);
require_once('config.php');

$service=$_POST['service'];
$type=$_POST['type'];
$date=$_POST['date'];
$time=$_POST['time'];
$frequency=$_POST['frequency'];
$comment=$_POST['comments'];

$insert="INSERT INTO `booking_table`(`service`, `type`, `date`, `time`, `frequency`, `comments`) 
VALUES('".$service."','".$type."','".$date."','".$frequency."','".$time."', '".$comment."')";
mysqli_query($conn,$insert);

?>
<?php
$select="SELECT * FROM `booking_table`";
$query=mysqli_query($conn,$select);

?>

?>
<html>
<body>
<head>
			<link href="css/bootstrap.min.css" rel="stylesheet"/>
			<link href="css/custom_style.css" rel="stylesheet"/>
			<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
			<script src="js/popper.min.js" type="text/javascript"></script>
			<script src="js/bootstrap.min.js"></script>
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
			<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-light p-4">
		<h5 class="text h4">Home</h5>
		<span class="text-muted">Toggleable</span>
    </div>
  </div>
  <nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">TIMESAVERZ</a>
	  <a class="nav-item ml-5">Mumbai > Cleaning > Home</a>

	<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>

<div class="people-box pt-5 pb-5 mb-5">
<div class="container">
<div class="row">
					<div class="people-text col-md-3 mb-4">YOUR<strong>CART</strong></div>
						<div class="col-md-9 line2"></div>

			<div class="col-md-6 heading-p1 service-box">
			<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Address
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
	  <input type="text" class="form-control add" id="address" placeholder="Enter Address">
				<input type="submit" class="btn btn-warning yellow-btn  m-3" onclick="move()">
				
				</div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			Payment        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
	  <div class="row">
	  <div class="col-md-5">
					  <label for="coupan">Coupon code</label>
					  <input id="coupan" class="form-control coupan" name="coupon">
					
						</select>
				</div>
				
				<div class="col-md-5">
					   
					  <input type="submit" class="form-control btn-warning yellow-btn apply-btn" name="type" value="Apply">
						
						</select>
				</div>
				</div>
				<label for="payment" class="mt-3">Select a Payment Method</label>
				<ul>
				<li><input input class="form-check-input" type="radio" value="" >Debit Card.</li>
				<li><input input class="form-check-input" type="radio" value="" >Credit Card.</li>
				<li><input input class="form-check-input" type="radio" value="" >Cash on Delivery.</li>
				<li><input input class="form-check-input" type="radio" value="" >Net Banking.</li>
				</ul>
      </div>
    </div>
  </div>
	
		</div>		
				
				
			<div class="col-md-5 heading-p2 ml-3">
				<div class="row container ml-3 book-service-box">
				<div class="col-md-10 ml-1">
				<label><strong>BOOKING DETAILS</strong></label>
				<br>
				
				<?php
				 while($res=mysqli_fetch_assoc($query)){
				?>
				
				
				<div class="col-md-5">
				<h5 class="booking"><?php echo $res['service']; ?>
				</div>
				
				<div class="col-md-5">
				<h5 class="booking"><?php echo $res['type']; ?>
				</div>
				
				<div class="col-md-4">
				<p class="dateandtime"><?php echo $res['date']; ?>  and <?php echo $res['time']; ?></p>
				</div
				</div>
				<hr>
				
				
				<?php } ?>
				
				<h5><Label class="col-md-12 mt-2">Address</h5>
				<p id="sim">
				</p>
			</div>
		</div>

		<script>
		function move(){
				 var a= document.getElementById('address').value;
				 
				 document.getElementById('sim').innerHTML = a;
				 
				
				}
		</script>
