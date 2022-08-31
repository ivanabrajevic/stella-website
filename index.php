 <?php
 require "bazaPodataka.php";
 $id = 1;
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Stella</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="slike/logo.jpg" alt="" /></span>
						<h1>Stella</h1>
						<p>kozmetički salon</p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">O nama</a></li>
							<li><a href="#first">Ponuda</a></li>
							<li><a href="#second">Cjenik</a></li>
							<li><a href="#third">Galerija</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
						<?php
							$stmt = $mysqli->prepare("SELECT * FROM o_nama WHERE id = ? ");
							$stmt->bind_param("i", $id);
							$stmt->execute();
							$result = $stmt->get_result();
							$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							?>
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>O nama</h2>
										</header>
										<p><?php echo $row["radno_vrijeme"] ?></p>
										<ul class="actions">
											<li><a href="onama.php" class="button">Odaberi</a></li>
										</ul>
									</div>
									<span class="image"><img src="slike/slika1.jpg" alt="" /></span>
								</div>
							</section>

						<!-- First Section -->
						<?php $stmt2 = $mysqli->prepare("SELECT * FROM ponuda");
									$stmt2->execute();
									$result2 = $stmt2->get_result();
									?>
							<section id="first" class="main special">
								<header class="major">
									<h2>Naše ponude</h2>
								</header>
								<ul class="features">
							<?php $br=1;	while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) : 
								?>
									<li>
										<?php if($br==1) {?>
										<img src="slike/kozmetika.jpg" alt="" style = "border-radius:50%" height="200px" width="200px" />
									<?php	}					
									 elseif($br==2) {?>
										<img src="slike/dep.jpg" alt="" style = "border-radius:50%" height="200px" width="200px" />
									<?php	}						
									 elseif($br==3) {?>
										<img src="slike/slika2.jpg" alt="" style = "border-radius:50%" height="200px" width="200px" />
									<?php	}?>							
										<h3><?php echo $row2["naslov"];?></h3>
										
									</li>
									
									<?php 	$br++; endwhile; ?>

								</ul>
								<footer class="major">
									<ul class="actions special">
										<li><a href="ponuda.php" class="button">Odaberi</a></li>
									</ul>
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Cjenik</h2>
									<p>Saznajte više o našim cijenama i što sve imamo u ponudi</p>
								</header>
								
								<footer class="major">
									<ul class="actions special">
										<li><a href="cjenik.php" class="button">Odaberi</a></li>
									</ul>
								</footer>
							</section>

						<!-- Galery -->
						<section id="third" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
											<h2>Galerija</h2>
										</header>
										<p>Pogledajte galeriju naših slika</p>
										<ul class="actions">
											<li><a href="galerija.php" class="button">Odaberi</a></li>
										</ul>
									</div>
									<span class="image"><img src="slike/slika5.jpg" alt="" /></span>
								</div>
							</section>

					</div>

				<!-- Footer -->
				<?php require "footer.php"; ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>