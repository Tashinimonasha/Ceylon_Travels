<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<titel> User And Registration</titel>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	
	</head>
<body>
	<section class="header">
	<a href="home.php" class="logo">Ceylon Travel.</a>
		<nav class="navbar">
			<a href="home.php">Home</a>
			<a href="about.php">About</a>
			<a href="package.php">Package</a>
			<a href="book.php">Book</a>
		</nav>

		<div id="menu-btn" class="fas fa-bars"></div>
	</section>
	<section class="login-body" style="background: url(image.jpg) no-repeat;">
		<div class="container">
			<div class="login-box"></div>
			<div class="row">
				<div class="col-md-6 login-left"><br>
					<h2>Login Here</h2>
					<form action="validation.php"method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user"class="form-control"required></div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password"class="form-control" required></div><br>
								<button type="submit" class="btn btn-primary">Login</button>
							</form>
						</div>
						<div class="col-md-6 login-right">
							<br>
					<h2>Register Here</h2>
					<form action="registration.php"method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user"class="form-control"required></div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" name="password"class="form-control" required></div><br>
								<button type="submit" class="btn btn-primary">Register</button>
							</form>
						</div>
					</div>

	</div>
	</section>
	<section class="footer">
		<div class="box-container">
			<div class="box">
				<h3>Quick Links</h3>
				<a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
				<a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
				<a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
				<a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
			</div>

			<div class="box">
				<h3>Extra Links</h3>
				<a href="#"> <i class="fas fa-angle-right"></i> Ask Questions</a>
				<a href="#"> <i class="fas fa-angle-right"></i> About us</a>
				<a href="#"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
				<a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
			</div>

			<div class="box">
				<h3>Contact info</h3>
				<a href="#"> <i class="fas fa-phone"></i> +94-772642987</a>
				<a href="#"> <i class="fas fa-phone"></i> +94-912258629</a>
				<a href="#"> <i class="fas fa-envelope"></i> ceylontravel5@gmail.com</a>
				<a href="#"> <i class="fas fa-map"></i>Ambalangoda, Sri Lanka.</a>
			</div>

			<div class="box">
				<h3>Follow us</h3>
				<a href="#"> <i class="fab fa-facebook-f"></i> Facebook  </a>
				<a href="#"> <i class="fab fa-twitter"></i> Twitter  </a>
				<a href="#"> <i class="fab fa-instagram"></i> Instagram  </a>
				<a href="#"> <i class="fab fa-linkedin"></i> Linkedin  </a>
			</div>
		</div>
		<div class="credit"> Created by <span>Dinal, Maduka, Thanushka, Tashmi & Tharindu</span> | all rights reserved! </div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script src="script.js"></script>
</body>
</html>