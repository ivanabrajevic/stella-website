<?php
require "bazaPodataka.php";
$id = 1;
$stmt = $mysqli->prepare("SELECT * FROM kontakt WHERE id = ? ");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kontakt</title>
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
						<h1>Kontakt</h1>
					</header>

				<!-- Main -->
					<div id="main">
                    <!-- Form --> 

                    <style>
                        .row {
                            padding: 1rem;
                        }

                        @media screen and (max-width: 980px){
                            .row.gtr-uniform {
                                padding: 1rem;
                            }
                        }

                        @media screen and (max-width: 1280){
                            .row.gtr-uniform {
                                padding: 1rem;
                            }
                        }

                        @media screen and (max-width: 1680){
                            .row.gtr-uniform {
                                padding: 1rem;
                            }
                        }

                        .forma {
                            width: 100%; 
                            border-radius: 50px;
                            padding: 20px;
                        }

                        

                        .responsive-iframe {
                            margin-left: 3%;
                            margin-right: 3%;
                        }

                      
                    </style>

                        <section>
                            <div class = "forma">
                            <h2 style = "text-align: center">Kontaktirajte nas</h2>
                            <form method="post" action="mail.php"">
                                <div class="row gtr-uniform">
                                    <div class="col-6 col-12-xsmall">
                                        <input type="text" name="name" id="name" value="" placeholder="Name" />
                                    </div>
                                    <div class="col-6 col-12-xsmall">
                                        <input type="email" name="email" id="email" value="" placeholder="Email" />
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" value="Send Message" class="primary" /></li>
                                            <li><input type="reset" value="Reset" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                            </div>
                            <div class = "karta">
                                <iframe class="responsive-iframe" width="94%" height="540" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $row['karta'] ?>"></a></iframe>
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

