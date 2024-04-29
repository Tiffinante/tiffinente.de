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
		<title>Team - Spastenverein.net</title>
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

					<!--<header class="special container">
						<span class="icon solid fa-mobile-alt"></span>
						<h2>Das <b>Team</b> von Spastenverein.net</h2>
						<br>
						<br>
					</header>
					<div class="container">-->

					<!--One -->
						<section class="wrapper style3 container special">

						<!--Admins-->
							<header class="major">
								<h2 style="font-size: 1.8em" id="Administratoren"><b style="color: #af0202;">Administrator</b></h2>
							</header>
								
								<div class="col-6 col-12-narrower">

									<section>
										<a href="https://youtu.be/dQw4w9WgXcQ" class="image featured"><img src="<?= $imglink ?>images/1c6f0256-a869-438f-90ce-f537dbdae856.png" alt="Jxn" /></a>
										<header>
											<h3 style="color: #ff3b3b;"><b>Jxn</b> | Jan</h3>
											<p style="color: #af006c; margin: 0;">
												<b style="font-size: 1.3em">Allgemeine Teamleitung</b>
											</p>
											<p style="margin: 0;">
												13
											</p>
											<br><br>
										</header>
									</section>

								</div>
							</div>
							

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