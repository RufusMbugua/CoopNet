<html>
	<head>
		<?php
		$this -> load -> view('section/head');
		?>
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
<?php

$this->load->view($contentView);
?>
	
<footer>
	2012 Peace Kawomera
</footer>
</body>
</html>