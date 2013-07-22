<html>
	<head>
		<?php
		$this -> load -> view('sections/head');
		?>
	</head>
	<body>
		<header>
			<section class="header-top">
				
			</section>
			<section class="header-bottom">
				<div class="navbar">
					<div class="navbar-inner">
						<a class="brand" href="#">CoopNet</a>
						<ul class="nav">
							<li class="active">
								<a href="#">Home</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
							<li>
								<a href="#">Link</a>
							</li>
						</ul>
						<div class="pull-right">
							Hi,User <a href="#">Logout</a>
						</div>

					</div>

			</section>

		</header>
		<?php

		$this -> load -> view($contentView);
		?>

		<footer class="well">
			2012 Peace Kawomera
		</footer>
	</body>
</html>