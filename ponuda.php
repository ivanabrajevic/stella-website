<?php
 require "bazaPodataka.php";
 $stmt = $mysqli->prepare("SELECT * FROM ponuda");
 $stmt->execute();
 $result = $stmt->get_result();
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Ponuda</title>
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
						<h1>Naše ponude</h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
                            <?php 
                                $br=1;	
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
                                    <h3 style="font-weight: bold;"><?php echo $row["naslov"] ?></h3>
                                    <?php
                                    $slika = "slike/ponuda/".$br.".jpg";
                                    if($br%2 == 1) {?>
                                        <p><span class="image left"><img src="<?php echo $slika ?>" alt=""  height="200px" /></span><?php echo $row["opis"] ?></p><br><br>
                            <?php } else {?>
                                        <p><span class="image right"><img src="<?php echo $slika ?>" alt="" height="200px" /></span><?php echo $row["opis"] ?></p><br><br>
                                    <?php	}	
                                $br++; 
                                endwhile; ?>
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