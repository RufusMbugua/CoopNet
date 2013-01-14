<html>
	<head>
		<link href="<?php echo base_url(); ?>css/layout.css" rel="stylesheet" type="text/css" />
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/layout.css"/>
		<!-- Attach JavaScript files -->
		<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="js/jquery.orbit.js" type="text/javascript"></script>
	</head>
	<body>

		<header>
			<section class="header-top">
				<section class="date">
					<?php echo date("l F d, Y"); ?>
				</section>
			</section>
			<section class="header-bottom">
				<nav>
					<ul>
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">Reports</a>
						</li>
					</ul>
					
				</nav>
				

				<section class="search">
					<form>
						<input type="search" placeholder="Search Here"/>

					</form>
				</section>
				<div class="user">
						Hi,User <a href="#">Logout</a>
					</div>
			</section>

		</header>
		<section class="content">
			<section class="left-sidebar">
				<section class="menu-container">
					<section class="menu">
						<ul>
							<li>
								<a href="">Farmers</a>
							</li>
							<ul>
								<li>
									<a href="">Registration</a>
								</li>
								<li>
									<a href="">Contracting</a>
								</li>
							</ul>
							<li>
								<a href="">Crops</a>
							</li>
							<ul>
								<li>
									<a href="">Coffee</a>
								</li>
								<ul>
									<li>
										<a href="">Buying</a>
									</li>
								</ul>
							</ul>
							<li>
								<a href="">Departments</a>
							</li>
							<ul>

							</ul>

						</ul>
					</section>
				</section>
			</section>

			<section class="tiles">
				<section class="one">
					<h3>Some Title</h3>
				</section>
				<section class="notifications">
					<h3>Notifications</h3>
				</section>

				<section class="two">
					<h3>Some Title</h3>
				</section>
			</section>

		</section>
		<footer>
			2012 Peace Kawomera
		</footer>
	</body>
</html>