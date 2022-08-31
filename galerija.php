<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Galerija</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Galerija</h1>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
                            <div class="popup-gallery">
                                <a href="slike/dep.jpg" title=""><img src="slike/dep.jpg" width="150" height="150"></a>
                                <a href="slike/frizura.jpg" title=""><img src="slike/frizura.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika.jpg" title=""><img src="slike/kozmetika.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika1.jpg" title=""><img src="slike/kozmetika1.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika2.jpg" title=""><img src="slike/kozmetika2.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika3.jpg" title=""><img src="slike/kozmetika3.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika4.jpg" title=""><img src="slike/kozmetika4.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika5.jpg" title=""><img src="slike/kozmetika5.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika6.jpg" title=""><img src="slike/kozmetika6.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika7.jpg" title=""><img src="slike/kozmetika7.jpg" width="150" height="150"></a>
                                <a href="slike/kozmetika8.webp" title=""><img src="slike/kozmetika.webp" width="150" height="150"></a>
                                <a href="slike/kozmetika9.png" title=""><img src="slike/kozmetika9.png" width="150" height="150"></a>
                                <a href="slike/make.jpg" title=""><img src="slike/make.jpg" width="150" height="150"></a>
                                <a href="slike/man.jpg" title=""><img src="slike/man.jpg" width="150" height="150"></a>
                                <a href="slike/manikura.jpg" title=""><img src="slike/manikura.jpg" width="150" height="150"></a>
                                <a href="slike/ped.jpg" title=""><img src="slike/ped.jpg" width="150" height="150"></a>
                                <a href="slike/make.jpg" title=""><img src="slike/make.jpg" width="150" height="150"></a>
                                <a href="slike/slika1.jpg" title=""><img src="slike/slika1.jpg" width="150" height="150"></a>
                                <a href="slike/slika2.jpg" title=""><img src="slike/slika2.jpg" width="150" height="150"></a>
                                <a href="slike/slika3.jpg" title=""><img src="slike/slika3.jpg" width="150" height="150"></a>
                                <a href="slike/slika4.jpg" title=""><img src="slike/slika4.jpg" width="150" height="150"></a>
                                <a href="slike/slika5.jpg" title=""><img src="slike/slika5.jpg" width="150" height="150"></a>
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
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="assets/js/jquery.magnific-popup.js"></script>

        <script>var $ = jQuery.noConflict();
            $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return item.el.attr('title');
                }
            }
        });
    });
        </script>

	</body>
</html>