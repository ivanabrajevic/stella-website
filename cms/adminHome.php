<?php
   session_start();

   if (!(isset($_SESSION['korisnicko_ime']))){
	   header("Location: admin.php");
	   exit();
   }
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Admin home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
		
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner" style="background-color:#1a53ff">
					<nav>
						<ul>
							<li><a href="adminHome.php">Admin home</a></li>
							<li><a href="logout.php">Log out</a></li>
							
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
				

	
					<section id="intro" style="background-image: url(cms_images/adminHome.jpeg);   opacity: 0.7;" class="wrapper style1 fullscreen fade-up">
						
						<div class="inner">

							<h2 style="text-align: center; color: black;">Dobrodošli na stranicu za uređivanje!</h2>
							
						</div>
					</section>
				<br>
					
                <section style="background-color:#00a3cc;">
                    <div  style="text-align:center;">
                    <div  class= "form-group">
                    <label style="font-family:Times New Roman;">Uredi cjenik</label>
					<li><a href="cjenik.php" class="button" >Odaberi</a></li>
                    </div>
                    <br>
					<div  class= "form-group" >
                    <label style="font-family:Times New Roman;">Uredi ponudu</label>
					<li><a href="ponuda.php" class="button">Odaberi</a></li>
                    </div> 
					<br>
                    <div  class= "form-group" >
                    <label style="font-family:Times New Roman;">Uredi O nama</label>
					<li><a href="onama.php" class="button">Odaberi</a></li>
                    </div> <br>
					<div  class= "form-group" >
                    <label style="font-family:Times New Roman;">Uredi kontakt</label>
					<li><a href="kontakt.php" class="button">Odaberi</a></li>
                    </div> <br>

</div>

</section>
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>