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
		<title>Spastenverein.net</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?= $css_path ?>
	</head>
	<body class="index is-preload">
		<div id="page-wrapper">
			
			<!-- Header -->
				<?= $header2 ?>

			<!-- Banner -->
				<section id="banner">

					<!--
						".inner" is set up as an inline-block so it automatically expands
						in both directions to fit whatever's inside it. This means it won't
						automatically wrap lines, so be sure to use line breaks where
						appropriate (<br />).
					-->
					<div class="inner">

						<header>
							<h2>Spastenverein</h2>
						</header>
						<p>Wir sind <strong>Spastenverein.net</strong>.
						<br />
						Ein Community Netzwerk.
						<br />
						Sponsored by <a target="_blank" href="https://medplex.wtf/">MedPlex.wtf</a>.</p>
						<footer>
							<ul class="buttons stacked">
								<li><a href="#top-goal" class="button fit scrolly">Los geht's</a></li>
							</ul>
						</footer>

					</div>

				</section>

			<!-- Main -->

				<article id="main">

					<header class="special container">
						<span class="icon solid fa-chart-bar"></span>
						<h2 id="top-goal">Spastenverein.net</h2>
					</header>

					<!-- One -->
						<section class="wrapper style2 container special-alt">
							<div class="row gtr-50">
								<div class="col-8 col-12-narrower">

									<header>
										<h2><strong>Das Spastenforum</strong><br></h2>
									</header>
										<p>
											Das Spastenverein-Forum, auch Spastenforum genannt, wird ein Ort sein, wo du mit unserer Community interagieren kannst, Forumspiele spielen kannst und/oder Vorschläge für das gesamte Netzwerk machen kannst.
										</p>
										<p>
											Du musst dir nur einen Account erstellen und los schreiben. Wir versuchen, dass kein Beitrag übersehen oder ignoriert wird! Aber leider ist das Forum noch im Aufbau, also hast du noch Zeit.
										</p>
									<br>

									<footer>
										<ul class="buttons">
											<li><a href="https://forum.spastenverein.net" class="button">zum Forum</a></li>
										</ul>
									</footer>

								</div>
								<div class="col-4 col-12-narrower imp-narrower">
									<!--
									<ul class="featured-icons">
										<li><span class="icon fa-pinterest-p"><span class="label">Feature 1</span></span></li>
										<li><span class="icon solid fa-volume-up"><span class="label">Feature 2</span></span></li>
										<li><span class="icon solid fa-laptop"><span class="label">Feature 3</span></span></li>
										<li><span class="icon solid fa-inbox"><span class="label">Feature 4</span></span></li>
										<li><span class="icon solid fa-lock"><span class="label">Feature 5</span></span></li>
										<li><span class="icon solid fa-cog"><span class="label">Feature 6</span></span></li>
									</ul>
									-->
								</div>
							</div>
						</section>

					<!-- Two -->
						<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<span style="color: rgb(15, 182, 15);" class="icon solid featured fa-check"></span>
										<header>
											<h3><b>Discord</b></h3>
										</header>
										<p>Unser <a href="<?= $link ?>discord">Discord</a> ist ein vielfältiger Server, auf welchem sich die Mitglieder unserer Community über aktuelle Themen wie Games, News und Memes austauschen können. Durch eine gute <a href="<?= $link ?>team/moderatoren">Moderation</a> sorgen wir dauerhaft für ein angenehme Atmosphäre.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span style="color: rgb(15, 182, 15);" class="icon solid featured fa-check"></span>
										<header>
											<h3><b style="font-size: 1.5em;">Teamspeak</b></h3>
										</header>
										<p>Der Spastenverein.net TeamSpeak Server ist eine öffentliche Community, die offen für alle ist. Auf unserm <a href="<?= $link ?>teamspeak">TeamSpeak Server</a> kannst du neue und tolle Leute kennenlernen und mit ihnen die verschiedensten Spiele, Spielen.</p>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<span style="color: rgb(15, 182, 15);" class="icon solid featured fa-check"></span>
										<header>
											<h3><b>Webseite</b></h3>
										</header>
										<p>Auf unserer Website findest du alle Informationen in einer ausführlichen Form. Hier findest du eine stets aktuelle <a href="<?= $link ?>team">Teamliste</a>, <a href="<?= $link ?>news">Neuigkeiten</a> rund um die Community sowie den Zugang zu unserem <a href="https://forum.spastenverein.net">Forum</a> und <a href="https://panel.spastenverein.net">TS Statistiken</a>.</p>
									</section>

								</div>
							</div>
						</section>

					<!-- Three -->
						<section class="wrapper style3 container special">

							<header class="major">
								<h2 style="font-size: 1.8em" id="Administratoren">Die <b style="color: #af0202;">Administratoren</b></h2>
							</header>

							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="<?= $link ?>team/adriande" class="image featured"><img src="<?= $imglink ?>images/adriankuntnerbg.png" alt="AdrianDE" /></a>
										<header>
											<h3 style="color: #ff3b3b;"><b>AdrianDE</b> | Adrian</h3>
											<p style="color: #af006c; margin: 0;">
												<b style="font-size: 1.3em">Contentleitung</b>
											</p>
											<p style="margin: 0;">
												20
											</p>
											<br>
										</header>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="<?= $link ?>team/tiffinante" class="image featured"><img src="<?= $imglink ?>images/mika_tiffinante_bg.png" alt="Tiffinante" /></a>
										<header>
											<h3 style="color: #ff3b3b;"><b>Tiffinante</b> | Mika</h3>
											<p style="color: #00CCCC; margin: 0;">
												<b style="font-size: 1.3em">Allgemeine Serververwaltung</b>
											</p>
											<p style="margin: 0;">
												18
											</p>
											<br><br>
										</header>
									</section>

								</div>
							</div>
							<div class="row">
								<div class="col-6 col-12-narrower">

									<section>
										<a href="<?= $link ?>team/leflurex" class="image featured"><img src="<?= $imglink ?>images/leflurexbg.png" alt="LeFlurex" /></a>
										<header>
											<h3 style="color: #ff3b3b;"><b>LeFlurex</b> | Jarne</h3>
											<p style="color: #E40000; margin: 0;">
												<b style="font-size: 1.3em">Moderationsleitung</b>
											</p>
											<p style="margin: 0;">
												16
											</p>
											<br><br>
										</header>
									</section>

								</div>
								<div class="col-6 col-12-narrower">

									<section>
										<a href="<?= $link ?>team/jxn" class="image featured"><img src="<?= $imglink ?>images/1c6f0256-a869-438f-90ce-f537dbdae856.png" alt="Jxn" /></a>
										<header>
											<h3 style="color: #ff3b3b;"><b>Jxn</b> | Jan</h3>
											<p style="color: #af006c; margin: 0;">
												<b style="font-size: 1.3em">Allgemeine Teamleitung</b>
											</p>
											<p style="margin: 0;">
												14
											</p>
											<br><br>
										</header>
									</section>

								</div>
							</div>

							<ul class="buttons">
								<li><a href="<?= $link ?>team" class="button">Das Team</a></li>
							</ul>

						</section>
				</article>

			<!-- CTA -->
				<section id="cta">

					<header>
						<h2><strong>BIST DU BEREIT?</strong></h2>
						<p>
							Ja? Dann mal los! <br>
							Werde jetzt Teil unserer Community, indem du unserem Discord <br>oder unserem TeamSpeak beitrittst und neue Leute kennen lernst!
						</p>
					</header>
					<footer>
						<ul class="buttons">
							<li><a target="blank" href="ts3server://ts.spastenverein.net" class="button primary">TeamSpeak</a></li>
							<li><a href="https://discord.gg/4aWKGDRfGF" target="_blank" class="button">Discord</a></li>
						</ul>
					</footer>

				</section>

			<!-- Footer -->
				<?= $footer ?>

		</div>

		<!-- Script -->
			<?= $script_path ?>

            <script src="//code.tidio.co/g4qckblgnxpdbhmzxcthwisur06fzx2o.js"></script>
	</body>
</html>