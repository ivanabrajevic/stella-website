<?php
require "bazaPodataka.php";
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Cjenik</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Cjenik</h1>
						<blockquote>Kako bi bila nezamjenjiva, žena mora uvijek biti malo drugačija.</blockquote>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<h3>Njega lica</h3>
									<ul>
									<?php 
									$stmt = $mysqli->prepare("SELECT * FROM cjenik where tip = 'lice' ");
									$stmt->execute();
									$result = $stmt->get_result();
											while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
											<li><?php echo $row['naziv'] ?> - <?php echo $row['cijena'] ?></li>
											<?php endwhile; ?>
									</ul>			
									<h3>Tretmani tijela</h3>
									<ul>
									<?php 
										$stmt2 = $mysqli->prepare("SELECT * FROM cjenik where tip = 'tijelo' ");
										$stmt2->execute();
										$result2 = $stmt2->get_result();
											while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) : ?>
											<li><?php echo $row2['naziv'] ?> - <?php echo $row2['cijena'] ?></li>
											<?php endwhile; ?>
									</ul>	
									<h3>Masaže</h3>
									<ul>
									<?php 
										$stmt3 = $mysqli->prepare("SELECT * FROM cjenik where tip = 'masaža' ");
										$stmt3->execute();
										$result3 = $stmt3->get_result();
											while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) : ?>
											<li><?php echo $row3['naziv'] ?> - <?php echo $row3['cijena'] ?></li>
											<?php endwhile; ?>
									</ul>					
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