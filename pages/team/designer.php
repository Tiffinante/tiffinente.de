<?php 

require 'builder.php';

?>

<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="de">
	<head>
		<title>Designer? - Spastenverein.net</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?= $css_path ?>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<?= $header ?>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-mobile-alt"></span>
						<h2><b>Bereich - </b><b style="color: #CC00CC;">Designer</b></h2>
						<br>
					</header>
					<!--One -->
						<section class="wrapper style4 special container medium">

							<header class="major">
								<h2 style="font-size: 1.8em" id="Administratoren">Was haben <b style="color: #CC00CC;">Designer</b> auf dem Netzwerk eigentlich zutun?</h2>
								<div id="Team" class="imp-dat">
									<hr>
								</div>
							</header>

							<div style="text-align: left;">
								<p>
									Designer sind toll für die Augen:)
								</p>
								<br>
								<div id="Team" class="imp-dat">
									<hr>
								</div>
							</div>

							<footer class="major">
								<ul class="buttons">
									<li><a class="button" style="background-color: #af0202; color: white;" href="<?= $link ?>team/admins">Admins</a></li>
									<li><a class="button" style="background-color: #00CCCC; color: white;" href="<?= $link ?>team/developer">Developer</a></li>
								</ul>
								<ul class="buttons">
									<li><a class="button" style="background-color: #bdb821; color: white;" href="<?= $link ?>team/contents">Contents</a></li>
									<li><a class="button" style="background-color: #E40000; color: white;" href="<?= $link ?>team/moderatoren">Moderatoren</a></li>
								</ul>
							</footer>

						</section>
					<!-- Two -->
						<?= $vorschläge_news ?>	

				</article>

			<!-- Footer -->
				<?= $footer ?>

		</div>

		<!-- Scripts -->
			<?= $script_path ?>
            <script src="//code.tidio.co/g4qckblgnxpdbhmzxcthwisur06fzx2o.js"></script>
	</body>
</html>