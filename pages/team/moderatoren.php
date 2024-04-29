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
		<title>Moderatoren? - Spastenverein.net</title>
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
						<h2><b>Bereich - </b><b style="color: #E40000;">Moderatoren</b></h2>
						<br>
					</header>
					<!--One -->
						<section class="wrapper style4 special container medium">

							<header class="major">
								<h2 style="font-size: 1.8em" id="Administratoren">Was haben <b style="color: #E40000;">Moderatoren</b> auf dem Netzwerk eigentlich zutun?</h2>
								<div id="Team" class="imp-dat">
									<hr>
								</div>
							</header>

							<div style="text-align: left;">
								<p>
									Die Hauptaufgabe eines Moderators besteht darin, das Netzwerk mit seinen Beiträgen zu unterstützen, den Mitgliedern Hilfestellung zu bieten und auf die Einhaltung der Richtlinien zu achten. Dabei ist es immer wichtig zu beachten, dass man als gutes Vorbild voran geht und stets die Interessen der Community wahrt. Muss man wirklich mal einen Beitrag löschen oder editieren, sollte man auf keinen Fall persönlichen Gefühlen den Vorrang geben. Sicherlich wird man nicht jedes Mitglied gleich gut leiden können, aber alles beruht auf Gegenseitigkeit. Jeder ist gleich zu behandeln. Wenn man sich daran hält, wird man mit den Mitgliedern auch weniger Probleme haben. Keiner fühlt sich benachteiligt und man vermeidet Streitigkeiten innerhalb des Moderatorenteams.
									<br><br>
									Nochmal in Kürze: Auch wenn Du auf freiwilliger Basis eine Moderatorentätigkeit übernimmst besteht Dein Job darin, regelmäßig am Community-Leben teil zu haben. Du bist teilweise dafür verantwortlich das Netzerk am Leben zu erhalten, indem Du Mitglieder zum posten und Reden animierst. Darüber hinaus ist es auch Deine Aufgabe Streitigkeiten zu schlichten und auf die Einhaltung der Richtlinien zu achten.
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