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
<div class="heading-box pt-5 pb-5">
	<div class="container">
			<div class="row">
			<p class="col-md-3 cleaning-text">HOME CLEANING  <span class="badge badge-light">3.5/5</span>
				<div class="col-md-6 line"></div>
				<div class="col-md-3 heading_icons"><i class="fas fa-users fa-xs"> 3,000+ </i><i class="fas fa-hourglass-start fa-xs"> 2 Hours </i><i class="fas fa-briefcase fa-xs"> 1,243+ </i>
			</div>
			</p>
			</div>	
			<div class="row">
			<div class="col-md-6 heading-p1 service-box">
				<p><strong>Service Includes:</strong></p>
				<ul>
				<li>Manual cleaning of floors</li>
				<li>Removal of cobwebs</li>
				<li>Cleaning and disinfection of washrooms</li>
				<li>Dusting of Gadgets, sofas, chairs, mattresses, carpets</li>
				<li>Cleaning of cabinets and wardrobes externally</li>
				<li>Cleaning of Fans, tubes, switchboard, bulbs, door handles</li>
				</ul>
				<p><strong>Service Time:</strong> 3-6 Hours (depending on BHK)</p>
				<p><strong>No. of Servicemen:</strong> 2-6 (depending on BHK)</p>
				<p><strong>Note: </strong></p>
				<ul>
				<li>Additional charges applicable for wall cleaning</li>
				<li>Customer to provide for stool or ladder, water and electrical connection</li>
				</ul>
				<hr>
				<p class="text-center" ><i class="fas fa-percentage yellow-text"></i>User code <strong>TIMZ45</strong> to avail an additional 15% Off! <span class="yellow-text">t &amp c</span></p>
				</div>
				
				
				
				
			<div class="col-md-5 heading-p2 offset-md-1">
				<div class="row container ml-3 book-service-box">
				
				<div class="col-md-5">
				<form action="cart.php" method="POST" >
					  <label for="select-service">Select Service</label>
					  <select id="select-service" class="form-control select-1" name="service">
						<option selected>Cleaning</option>
						<option>Pest-Control</option>
						</select>
					</div>
				
					<div class="col-md-5">
					  <label for="select-type">Select Type</label>
					  <select id="select-type" class="form-control select-2" name="type">
						<option selected>Basic</option>
						<option>1bhk</option>
						<option>3bhk</option>
						</select>
					</div>
				
					<div class="col-md-10 mt-3">
					  <label for="frequency">Frequency</label>
					  <select id="frequency" class="form-control select-3" name="frequency">
						<option disabled selected>select frequency</option>
						<option>Once a month</option>
						<option>Once in six months</option>
						</select>
				</div>
				<div class="col-md-5 mt-3">
				<label for="date">Date</label>
				<input id="date" class="form-control select-4" type="date" placeholder="Select date" name="date">

				</div>
				<div class="col-md-5 mt-3">
					  <label for="time">Time</label>
					  <select id="time" class="form-control select-5" name="time">
						<option disabled selected>select time</option>
						<option>10am-1pm</option>
						<option>2pm-6pm</option>
						</select>
				</div>
				<div class="col-md-10 mt-3">
				<label for="comments">Additional Comments</label>
				<input id="comments" class="form-control select-4" placeholder="Enter your comments here.." name="comments">

				</div>
				<div class="col-md-5 mt-4">
				<label for="total">Service Total</label>
				</div>
				<div class="col-md-5 mt-4">
				<h2>Rs. 1499</h2>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 text-center mt-4 dark-button p-2 mb-0">
				<input type="submit" class="book btn btn-primary" value="Book Service">
				</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="compare-box pt-5 pb-5">
<div class="container">
<div class="row">
					<div class="compare-text col-md-2 mb-4"><strong>Compare</strong> Service</div>
						<div class="col-md-10 line2"></div>
									
					</p>
	<div class="col-md-4">
					  <select id="home-celeaning" class="form-control select-1">
						<option selected>Basic Home Cleaning</option>
						<option>...</option>
						</select>
				</div>
				
				<div class="col-md-4">
					 
					  <select id="select-type" class="form-control select-2">
						<option disabled selected>Select Service to compare</option>
						<option>...</option>
						</select>
				</div>		
					<div class="col-md-4">
					  <button class="btn btn-warning yellow-btn"><strong>COMPARE SERVICES</strong></button>
						</select>
				</div>					
</div>			
</div>
</div>
<div class="people-box pt-5 pb-5">
<div class="container">
<div class="row justify-content-around">
					<div class="people-text col-md-6 mb-4">WHAT PEOPLE SAY ABOUT OUR <strong>HOME CLEANING SERVICE</strong></div>
						<div class="col-md-6 line2"></div>
						
					<div class="col-md-5 review"><p> I couldn't be happier Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					</p>
					<strong>Namrata Shirodkar</strong>
							<span class="fa fa-star checked ml-5"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
					</div>
					<div class="col-md-offset-2">
					</div>
					<div class="col-md-5 review"><p>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architect
					</p>
					<strong>Gautam Krishnan</strong>
							<span class="fa fa-star checked ml-5"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
					</div>
	</div>
</div>
</div>
<div class="people-box pt-5 pb-5">
	<div class="container">
	<div class="row"> 
	<div class="people-text col-md-6 mb-4">PEOPLE WHOS USED OUR <strong>HOME CLEANING SERVICE</strong></div>
						<div class="col-md-6 line2">
						</div>
						</div>
						
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
	<center>
      <img class="d-block w-50" src="img/sink.png" alt="First slide">
	  </center>
    </div>
    <div class="carousel-item">
	<center>
      <img class="d-block w-50" src="img/sink.png"  alt="Second slide">
    </center>
	</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
</div>

<div class="people-box pt-5 pb-5">
	<div class="container">
	<div class="row"> 
	<div class="people-text col-md-6 mb-4">ABOUT OUR <strong>CLEANING SERVICE</strong></div>
						<div class="col-md-6 line2">
	</div>
	</div>
		<div class="about-row">					
		<div class="col-md-4">
		CLEANING SERVICES
		<small>#save the day</small>
		</div>
		<div class="col-md-8">		
		But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, 
		the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure
		</div>									
</div>
</div>

	


						<div class="main-footer">
		<div class="footer-sections">
        
        
        <div class="container"><div class="row"><div class=" col-md-3">



        
        <div class="collapsible-menu">
  <h4 data-bind="toggle" class="collapsible-menu-header">TIME <br> SAVERZ</h4>
  <p>Timesaverz is in the business of getting curated home service providers for various services ranging from cleaning tasks, pest control, appliances
  repairs and handyman jobs. The Timesaverz App makes it convenient to book Home maintenance and repairs services directly from your mobile phone.
  </p>
  
</div>
</div><div class=" col-md-3">



        
         <div class="collapsible-menu">
    <h4 data-bind="toggle" class="collapsible-menu-header">Timesaverz</span></h4>
    <ul class="rlist collapsible-menu-body pr-5">
      <li><a href="#">About Us</a></li>
			Careers</a></li>
			<li><a>FAQs</a></li>
			<li><a>Press</a></li>
			<li><a>Trust & Safety</a></li>
			<li><a>Privacy Policy</a></li>
			<li><a>Terms of Use</a></li>
			<li><a>Blog</a></li>
			<li><a>Refer A Friend</a></li>
			<li><a>Support Center</a></li>
			C<li><a>ontact Us</a></li>
			<li><a>Sitemap</a></li>
			<li><a>B2B</a></li>
			<li><a>Minutes new</a></li>
			<li><a>How to Earn Minutes</a></li>
			<li><a>Gift Cards</a></li>
    </ul>
  </div>
</div><div class=" col-md-3">



        
         <div class="collapsible-menu">
    <h4 data-bind="toggle" class="collapsible-menu-header">Popular Services</h4>
    <ul class="rlist collapsible-menu-body pr-5">
      <li><a href="#">Water-Purifier Repairs</li></a>
				<li><a>Bed-Bugs Pest-Control</li></a>
				<li><a>Loft Cleaning</li></a>
				<li><a>Carpenter Handyman</li></a>
				<li><a>Kitchen Cleaning</li></a>
				<li><a>Chair Cleaning</li></a>
				<li><a>Mosquito Pest-Control</li></a>
				<li><a>Basic Car-Spa</li></a>
				<li><a>Repaint Painting</li></a>
				<li><a>Chimney Repairs</li></a>
				<li><a>More +</li></a>
      
    </ul>
  </div>
</div><div class=" col-md-3">



        
        <div class="collapsible-menu">
    <h4 data-bind="toggle" class="collapsible-menu-header">Cities</h4>
    <ul class="rlist collapsible-menu-body pr-5">
      <li><a href="#">Bangalore</a></li>
		<li><a>	Chennai</a></li>
			<li><a>	Delhi</a></li>
			<li><a>	Gurgaon</a></li>
			<li><a>	Hyderabad</a></li>
			<li><a>	Mumbai</a></li>
			<li><a>	Pune</a></li>
      
    </ul>
  </div>
</div></div></div>

        </div>
		<hr width="70%" color="white">
		<div class="col-md-12 text-center mt-5 mb-2" >
		Copyright ©2018 All rights reserved 
		</div>
						
						
						</body>
</html>