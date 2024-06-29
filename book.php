<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>book</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<section class="header">
		<a href="home.php" class="logo">Ceylon Travel.</a>

		<nav class="navbar">
			<a href="home.php">Home</a>
			<a href="about.php">About</a>
			<a href="package.php">Package</a>
			<a href="book.php">Book</a>
			<a href="logout.php">Logout</a>
		</nav>

		<div id="menu-btn" class="fas fa-bars"></div>
	</section>

	<div class="heading" style="background: url(booknow.jpg) no-repeat;">
		<h1>Book Now</h1>
	</div>

	<section class="booking">
		<h2><center>Welcome <?php echo $_SESSION['username'];?></center></h2>
		<h1 class="heading-title">Book your trip!</h1>
		<form action="book_form.php" method="post" class="book-form">
			<div class="flex">
				<div class="inputBox">
					<span>Name:</span>
					<input type="text" name="name" placeholder="Enter your name">
				</div>
				<div class="inputBox">
					<span>Email:</span>
					<input type="email" name="email" placeholder="Enter your Email">
				</div>
				<div class="inputBox">
					<span>Phone:</span>
					<input type="number" name="phone" placeholder="Enter your Phone number">
				</div>
				<div class="inputBox">
					<span>Address:</span>
					<input type="text" name="address" placeholder="Enter your Address">
				</div>
				<div class="inputBox">
					<span>Where to:</span>
					<input type="text" name="location" placeholder="Place you want to visit">
				</div>
				<div class="inputBox">
					<span>How many:</span>
					<input type="number" name="guests" placeholder="Number of guests">
				</div>
				<div class="inputBox">
					<span>Arrivals:</span>
					<input type="date" name="arrivals">
				</div>
				<div class="inputBox">
					<span>Leaving:</span>
					<input type="date" name="leaving">
				</div>
			</div>
			<input type="submit" name="send" value="Submit" class="btn">
		</form>
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
				<a href="#"> <i class="fas fa-map"></i> Ambalangoda, Sri Lanka.</a>
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