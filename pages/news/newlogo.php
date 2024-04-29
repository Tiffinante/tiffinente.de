<?php 

require 'builder.php';

?>

<!DOCTYPE HTML>
<!--
	Twenty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Logo - Spastenverein.net</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?= $css_path ?>

	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<?= $header ?>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-mobile-alt"></span>
						<h2><strong>Spastenverein.net - News</strong></h2>
						<p>Hier Ist einer der <strong>Aktuellste News</strong> über Spastenverein.net</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<!-- Content -->
								<div class="content">
									<section>

										<div style="margin-left: 35%;" >
											<img height="400" width="400" src="<?= $imglink ?>images/logo_d.png" alt="" />
										</div>

										<header>
											<h3><b>Unser Neues LOGO!</b></h3>
										</header>
										<p>
											Naa ihr,
										</p>
										<p>
											ab dem heutigen Tage werdet ihr mit diesem Brandneuen Update von SPASTENVEREIN.NET ein komplett überarbeitetes Logo auf unserem Discord, Teamspeak und auf unserer Webseite wiederfinden. Zudem dürfen wir euch ab heute unsere komplett neue und richtig coole Webseite vorstellen.
											Viel Spaß euch beim Erkunden und durchstöbern!
										</p>
										<p>
											Die Ankündigung findet ihr außerdem auf unserem Discord.
										</p>
										<p class="date-news">04.04.2021</p>

									</section>
								</div>

						</section>

					<!-- Two -->
						<?= $vorschläge_news?>

				</article>

			<!-- Footer -->
				<?= $footer ?>
		</div>

		<!-- Scripts -->
			<?= $script_path ?>
            <script src="//code.tidio.co/g4qckblgnxpdbhmzxcthwisur06fzx2o.js"></script>
	</body>
</html>