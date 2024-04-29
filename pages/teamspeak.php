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
		<title>TeamSpeak - Spastenverein.net</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<?= $css_path ?>
	</head>
	<body class="left-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<?= $header ?>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-laptop"></span>
						<h2>Komm jetzt auf <strong>ts.spastenverein.net</strong></h2>
						<p>ts.spastenverein.net | spastenverein.net</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">
											<section>
												<a href="#" style="margin-bottom: 0;" class="image featured"><img src="<?= $imglink ?>images/teamspeak-banner.png" alt="" /></a>
												<a href="#" style="margin-bottom: 0;" class="image featured"><img style="height: 5em; width: 5em; margin-left: 10em;" src="<?= $imglink ?>images/arrow_red.png" alt="" /></a>
												<header>
													<h3><b>Discord</b></h3>
												</header>
												<p>Der Spastenverein.net Discord ist ein vielseitiger Descort Server, auf dem über verschiedene Spiele geschrieben werden kann. Du kannst aber auch deine eigenen Memes hochladen und sehen wie die Community drauf Reagiert. </p>
												<footer>
													<ul class="buttons">
														<li><a href="https://discord.gg/4aWKGDRfGF" target="_blank" class="button small">Discord beitreten</a></li>
													</ul>
												</footer>
											</section>
										</div>

								</div>
								<div class="col-8 col-12-narrower imp-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												<header>
													<h3><b>Unser TeamSpeak 3 Server</b></h3>
												</header>
												<br>
												<p>Der Spastenverein.net TeamSpeak Server ist eine öffentliche Community, die offen für alle ist. Auf unserem TeamSpeak Server kannst du neue und tolle Leute kennenlernen und mit ihnen die verschiedensten Spiele, Spielen.</p>
												<p>Erreichen kannst du unseren TeamSpeak Server über <b><a target="blank" href="ts3server://ts.spastenverein.net">ts.spastenverein.net</a></b> oder noch einfacher über <b><a target="blank" href="ts3server://spastenverein.net">spastenverein.net</a></b>.</p>
												<p>Wir legen besonders Wert darauf, dass keine Menschen auf unseren Plattformen beleidigt oder diskriminiert werden! Wenn wir so etwas mitbekommen, werden diese Leute mit einer Auszeit oder sogar Ausschluss der Community bestraft!</p>
												<footer>
													<ul class="buttons">
														<li><a target="blank" href="ts3server://ts.spastenverein.net" class="button primary">Zum TeamSpeak³ Server</a></li>
													</ul>
												</footer>
											</section>
										</div>

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