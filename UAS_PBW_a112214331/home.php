<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap');
	</style>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Home</title>
	<link rel="stylesheet" href="index.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background:linear-gradient(#ffffff,#ffffff) ;">
	<div class="content d-flex">
		<div class="sidebar">
			<h1 >Main Menu</h1>
			<nav style="background-color: #b8b8b8;border-radius: 30px;" class="navbar navbar-expand-lg  m-4 ">
				<div class="container-fluid ">
	  				<h2 style="font-size:16px">Hay,Omar </h2>
	   				<object class="rounded-circle"  data="gambar/y.jfif" height="50px" width="50px"></object>
				</div>
			</nav>
			<br><br><br><br>
			<ul class="nav">
				<a href="index.php">
					<button>Index</button>
				</a>
				<a href="home.php">
					<button>Home</button>
				</a>
				<a href="form.php">
					<button>pembelian</button>
				</a>
				
				<a href="kontak.php">
					<button>Kontak</button>
				</a>
				

			</ul>
	
			<a class="me-3" href="index.php">
				<button type="button" class="btn" style="margin-top: 50%;margin-left:20%">Kembali</button>
			</a>
		</div>
		<div class="main" style="width:90%;margin-left:5%">
			<nav style="background-color: #5d5d5e" class="navbar navbar-expand-lg  ">
				<div class="container-fluid f">
		  			<h2 id="atas" style="font-family: 'Roboto Mono', monospace;color: whitesmoke;">Selamat Datang</h2>
		  
				</div>
 			</nav>
			
					
			<br><br>	
				<div class="container">
					<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
							<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner "style="border-radius:30px">
							<div class="carousel-item active">
								<img src="gambar/g1.jpg" class="d-block w-100" alt="...">
							</div>

							<div class="carousel-item">
								<img src="gambar/g2.jpg" class="d-block w-100" alt="...">
							</div>

							<div class="carousel-item">
								<img src="gambar/g3.jpg" class="d-block w-100" alt="...">
							</div>
							<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
							</button>
							<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>	
					</div>
		
					<div id="menu" class="container" style="background-color:#696969;padding-top: 30px;padding-bottom: 30px;border-radius: 20px;margin-top: 50px;padding-left: 20px;padding-right: 20px;">
						<p style="color:#000000">Kategori : </p>
						
						<div class="button">
							<a href="#SUV">
								<button style="color:#ebecf1 ; background-color:#000000;height: 30px;width: 115px;border-radius: 20px;">SUV</button>
							</a>
							<a href="#MPV">
								<button style="color:#ebecf1 ; background-color:#000000; margin-left: 30px; height: 30px;width: 115px;border-radius: 20px;">MPV</button>
							</a>	
						</div>
					</div>
			
				
				<hr size="3px">		
				<div style="background:linear-gradient( #696969,#696969) ;border-radius: 30px;" class="container"> 
								<div   class="row m-lg-4  ">
									<h3 id="SUV" class="mt-3" style="color:#696969 ;color: rgb(255, 255, 255);">SUV</h3>
									<a  class="m-lg-4"  href="#menu">
										<button style=" background-color: #ffffff; border-radius: 10px;  border: 0;height: 40px;width: 150px;margin-top: 20px;">Atas</button>
									</a>
									<hr size="3px">
										<div class="card m-lg-3  " style="width: 18rem;">
											<img id="anim" src="gambar/LC.png" class="card-img-top" alt="LC">
											<div style="background-color:#ffffff" class="card-body">
												<h5 class="card-title">LAND CRUISER</h5>
												<p class="card-text"></p>
											</div>
											<div  style="background-color: #ffffff" class="card-body">
												<a href="land cruiser.php">
													<button style="background-color: #696969" >SeeMore</button>
												</a>
											</div>
										</div>
										<div class="card m-lg-3 " style="width: 18rem;">
											<img id="anim" src="gambar/fortuner.png" class="card-img-top" alt="fortuner">
											<div style="background-color: #ffffff" class="card-body">
												<h5 class="card-title">FORTUNER</h5>
												<p class="card-text"></p>
											</div>
											<div  style="background-color: #ffffff" class="card-body">
												<a href="fortuner.php">
													<button style="background-color: #696969" >SeeMore</button>
												</a>
											</div>
										</div>
									</div>
										
									<div  class="row m-lg-4 ">
										<h3 id="MPV" style="color:#696969 ;margin-top: 50px;color: white;">MPV</h3>
										<a class="m-lg-4"  href="#menu">
											<button style="align-items:right; background-color: #ffffff; border-radius: 10px;  border: 0;height: 40px;width: 150px;margin-top: 20px;">Atas</button>
										</a>
										<hr size="3px">
										<div class="card m-lg-3 m- " style="width: 18rem;">
											<img id="anim" src="gambar/Innova.png" class="card-img-top" alt="lumpia">
											<div style="background-color: #ffffff" class="card-body">
												<h5 class="card-title">INNOVA ZENIX</h5>
												<p class="card-text"></p>
											</div>
											<div  style="background-color: #ffffff" class="card-body">
												<a href="innova.php">
													<button style="background-color: #696969" >SeeMore</button>
												</a>
											</div>
											</div>
											<div class="card m-lg-3 " style="width: 18rem;">
												<img id="anim" src="gambar/alphard.png" class="card-img-top" alt="wingko">
												<div style="background-color: #ffffff" class="card-body">
													<h5 class="card-title">ALPHARD</h5>
													<p class="card-text"></p>
												</div>
												<div  style="background-color: #ffffff" class="card-body">
													<a href="alphard.php">
														<button style="background-color: #696969" >SeeMore</button>
													</a>
												</div>
											</div>
						
									</div>	
					</div>
			
				</div>
		</div>
		
</body>


</html>