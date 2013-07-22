<html>
	<head>
		<?php $this -> load -> view('sections/head'); ?>
	</head>
	<body>
		<header>
			<section class="header-top">
				<section class="date">
					<?php echo date("l F d, Y"); ?>
				</section>
			</section>
			<section class="header-bottom">
				<div class="navbar">
					<div class="navbar-inner">
						<a class="brand" href="#">CoopNet</a>
						<ul class="nav">
							<li class="active">
								<a href="<?php echo base_url(); ?>c_front/index">Home</a>
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
		<section class="content">
			<section class="left-sidebar well">
				<section class="menu-container">
					<section class="menu">
						<ul class="nav nav-list">
							<li>
								<a href="">Farmers</a>
								<ul>
									<li>
										<a href="<?php echo base_url(); ?>c_front/Contract">Contact Signing</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/crop">Crop</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/excess">Excess Delivery</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/transfer">Farmer Transfer</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/ftype">Farming Type</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="">Users</a>
								<ul>
									<li>
										<a href="<?php echo base_url(); ?>c_front/agronomist">Agronomists</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/cofficer">Certification Officers</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/officer"> Officers</a>
									</li>
								</ul>
							</li>

							<li>
								<a href="">Registration</a>
								<ul>
									<li>
										<a href="<?php echo base_url(); ?>c_front/facility_r">Facility Registration</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/farmer_r">Farmer Registration</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/parish">Parish</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/subcounty">Sub County</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/transport">Transport Declaration</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/village">Villages</a>
									</li>
									<li>
										<a href="<?php echo base_url(); ?>c_front/violation">Violation</a>
									</li>
								</ul>

							</li>

							<li>
								<a href="">Actions</a>
								<ul>
									<li>
										<a href="<?php echo base_url(); ?>c_front/purchment">Purchment Inspection</a>
									</li>
								</ul>
							</li>
							
							
							

						</ul>
					</section>
				</section>
			</section>
			<?php

			$this -> load -> view($contentView);
			?>
		</section>
		<footer>
			2012 Peace Kawomera
		</footer>
	</body>
</html>