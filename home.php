<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>home</title>

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
			<a href="login.php">Book</a>
		</nav>

		<div id="menu-btn" class="fas fa-bars"></div>
	</section>

	<section class="home">
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background: url(train.jpg) no-repeat;">
					<div class="content">
						<span>Explore, Discover, Travel</span>
						<h3>Travel around the World</h3>
						<a href="package.php" class="btn">Discover more</a>
					</div>
				</div>

				<div class="swiper-slide" style="background: url(leopard.jpg) no-repeat;">
					<div class="content">
						<span>Explore, Discover, Travel</span>
						<h3>Discover the new Places</h3>
						<a href="package.php" class="btn">Discover more</a>
					</div>
				</div>

				<div class="swiper-slide" style="background: url(bali.jpg) no-repeat;">
					<div class="content">
						<span>Explore, Discover, Travel</span>
						<h3>Make your tour worthwhile</h3>
						<a href="package.php" class="btn">Discover more</a>
					</div>
				</div>
			</div>
			<div class="swiper-button-next"></div>
      		<div class="swiper-button-prev"></div>
		</div>
	</section>

	<section class="services">
		<h1 class="heading-title"> Our Services</h1>
		<div class="box-container">
			<div class="box">
				<img src="icon 1.png" width="100%">
				<h3>Adventure</h3>
			</div>

			<div class="box">
				<img src="icon 2.png" width="100%">
				<h3>Tour Guide</h3>
			</div>

			<div class="box">
				<img src="icon 3.png" width="100%">
				<h3>Trekking</h3>
			</div>

			<div class="box">
				<img src="icon 4.png" width="100%">
				<h3>Camp Fire</h3>
			</div>

			<div class="box">
				<img src="icon 5.png" width="100%">
				<h3>Off Road</h3>
			</div>

			<div class="box">
				<img src="icon 6.png" width="100%">
				<h3>Camping</h3>
			</div>
		</div>
	</section>

	<section class="home-about">
		<div class="image">
			<img src="sigiriya.jpg">
		</div>
		<div class="content">
			<h3>About Us</h3>
			<p>Ceylon Travels offers exciting and affordable Sri Lanka tour packages, Our  Sri Lanka Tour Packages Includes Family Tours & Budget Tour. Through this website, we invite you to take a glimpse of Sri Lanka, which is not only the lustrous Pearl of the Indian Ocean but one of the most exciting locations for your next tour or vacation. You will be enticed by the rich diversity of sights and sensations that this little island has to offer.</p>
			<a href="about.php" class="btn">Read more..</a>
		</div>
	</section>

	<section class="home-packages">
		<h1 class="heading-title">Our Packages</h1>
		<div class="box-container">
			<div class="box">
				<div class="image">
					<img src="pinnawala.jpg">
				</div>
				<div class="content">
					<h3>Pinnawala</h3>
					<p>Pinnawala Elephant Orphanage, is an orphanage, nursery and captive breeding ground for wild Asian elephants located at Pinnawala village, 13 km northeast of Kegalle town in Sabaragamuwa Province of Sri Lanka. The orphanage was founded to care and protect the many orphaned unweaned wild elephants found wandering in and near the forests of Sri Lanka.</p>
					<a href="login.php" class="btn">Book Now</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="thalpe beach.jpg">
				</div>
				<div class="content">
					<h3>Thalpe Beach</h3>
					<p>Thalpe Beach is one of the most popular beaches on Sri Lanka’s south coast and unlike any beach we’ve ever visited before. What makes Thalpe Beach so unique are the rectangular rock pools carved into the long-dead coral reef at the shoreline.</p>
					<a href="login.php" class="btn">Book Now</a>
				</div>
			</div>

			<div class="box">
				<div class="image">
					<img src="galle fort.jpg">
				</div>
				<div class="content">
					<h3>Galle Dutch Fort</h3>
					<p>TThe story of the Galle Dutch Fort; a UNESCO World Heritage Site reverberates through every traveller’s photos and captions. Initially built by the Portuguese in the 16th century during their conquests, the fort was later fortified and conquered by the Dutch in the 17th century, until it later fell to the might of the British.</p>
					<a href="login.php" class="btn">Book Now</a>
				</div>
			</div>
		</div>
		<div class="load-more"><a href="package.php" class="btn">Load More</a></div>
	</section>

	<section class="home-offer">
		<div class="content">
			<h3>Upto 50% off</h3>
			<p>Have fun and enjoy your life by travelling and exploring the world. Book now from us and get upto 50% for your adventures and tours.</p>
			<a href="login.php" class="btn">Book Now</a>
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