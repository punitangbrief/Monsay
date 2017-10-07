<!DOCTYPE html>
<html>

<head>
	<!-- required tag for responsiveness -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<!-- jquery and popper JS CDN bootstrap -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

	<!-- css bootstrap -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css');?>">
		

	<!-- js bootstrap -->
		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	
	<!-- start of css for header -->	
	<style>
	
		#rmhsimg{
			cursor:pointer;
			height:125px; 
			width:125px;
			float:left;
			margin:0px 25px 0px 0px;
		}
		
		#rmhstitle{
			font-size:28px;
			font-family:helvetica;
			float:left;
			font-weight:bold;
			margin:25px 0px 0px 0px;
		}
		
		#rmhstitle2{
			font-size:28px;
			font-family:helvetica;
			float:left;
			margin:0px 0px 0px 0px;
		}
		
		.allbtn{
			background-color:#3366ff;
			border: none;
			color: white;
			border-radius:4px;
			padding: 5px 10px;
			text-align: center;
			text-decoration: bold;
			display: inline-block;
			font-size: 15px;
			margin: 2px 1px;
			cursor: pointer;
		}
		
		.brandy{
			font-weight:bold
			font-family:helvetica;
		}
		
		body{
			margin:0;
			padding:0;
		}
		
		.nav{
			margin:0;
			padding:0;
		}
		
		#asd2{
			margin:-2px 0px 0px 0px;
		}
		
		
		#asd3{
			color:white;
			padding:12px 30px 10px;
		}
		
		#asd3:hover{
			color:white;
			background-color:#3366ff;
		}
		
	</style>	
	<!--end of css for header-->
	
	<!-- start of css for layer1(carousel) -->
	<style>
		.car{
			margin:0;
			padding:0;
		}
	</style>
	<!-- end of css for layer1(carousel) -->
	
	<title> RMHS </title>

</head>


<body>
	<!--start of header-->
		<div class="container-fluid"> 
			<div class="row">
			
				<div class="col-md-1">
				</div>
				
				<div class="col-md-5">
					<div>	
							<img id="rmhsimg" src="images/Rmhslogo.jpg">	
						<p> 
							<span id="rmhstitle">RAMON MAGSAYSAY</span> <br>
							<span id="rmhstitle2">High School</span>
						</p>
					</div>	
				</div>
				
				<div class="col-md-5">
				</div>
				
				<div class="col-md-1">
				</div>
			
			</div>
		</div>
		
		</br>
			
		<nav class="nav navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#misnavbar" aria-controls="misnavbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
					<a class="navbar-brand brandy" href="#">RMHS</a>
						<div class="collapse navbar-collapse" id="misnavbar">
							<ul class="nav navbar-nav nav-fill mr-auto" id="asd2">
								<li class="nav-item">
									<a class="nav-link" id="asd3" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="asd3" href="#">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="asd3" href="#">Academics</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="asd3" href="#">News</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="asd3" href="#">Students</a>
								</li>
							</ul>
						</div>
			</div>
		</nav>
	<!--end of header-->
	
	<!--start of layer 1(carousel)-->	
		<div class="car container-fluid">
			<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block img-fluid" src="images/pubg1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/pubg1.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block img-fluid" src="images/pubg1.jpg" alt="Third slide">
					</div>
				</div>
					<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
			</div>
		</div>	
	<!--end of layer 1(carousel)-->	
</body>

</html>