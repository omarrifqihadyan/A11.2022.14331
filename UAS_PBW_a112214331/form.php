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
			<h1>Main Menu</h1>
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
				<hr size="3px">	
				<div style="background:linear-gradient( #696969,#696969) ;border-radius: 30px;margin-top:3%" class="container"> 
								
					<form style="margin: 5%;padding-bottom:5%;padding-top:3%" method="post" action="post.php">
							<legend>Formulir Pembelian</legend>
							<div class="mb-3">
								<label  class="form-label">Nama Depan</label>
								<input type="text" name="fname" class="form-control" placeholder=".......">
							</div>
							<div class="mb-3">
								<label  class="form-label">Nama Belakang</label>
								<input type="text" name="lname" class="form-control" placeholder=".......">
							</div>
							<div class="mb-3">
								<label  class="form-label">Alamat</label>
								<input type="alamat" name="alt" id="alt" class="form-control" placeholder=".......">
							</div>
							
							<label  class="form-label">Pilih :</label>
							<div class="chekbok">
                   				 <p> <input type="checkbox" name="pilih1" id=""> LAND CRUISER</p>
                			</div>
							<div class="chekbok2">
								<p><input type="checkbox" name="pilih2" id=""> FORTUNER</p>
							</div>
							<div class="chekbok3">
								<p><input type="checkbox" name="pilih3" id=""> INNOVA ZENIX</p>
							</div>
							<div class="button">
								<p><input type="checkbox" name="pilih4" id=""> ALPHARD</p>
							</div>	
							<button type="submit" name="smt" class="btn btn-primary">Submit</button>
					</form>
				</div>
		</div>
		
</body>


</html>