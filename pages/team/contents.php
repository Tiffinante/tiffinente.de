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
		<title>Contents? - Spastenverein.net</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?= $css_path ?>
	</head>
	<body class="contact is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="<?= $link ?>">Spastenverein <span>.net</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="<?= $link ?>">Home</a></li>
							<li class="submenu">
								<a href="#" class="button">Menu</a>
								<?= $menu ?>
							</li>
							<li class="current"><a class="button primary" href="https://forum.spastenverein.net">Forum</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-mobile-alt"></span>
						<h2><b>Bereich - </b><b style="color: #bdb821;">Contents</b></h2>
						<br>
					</header>
					<!--One -->
						<section class="wrapper style4 special container medium">

							<header class="major">
								<h2 style="font-size: 1.8em" id="Administratoren">Was haben <b style="color: #bdb821;">Contents</b> auf dem Netzwerk eigentlich zutun?</h2>
								<div id="Team" class="imp-dat">
									<hr>
								</div>
							</header>

							<div style="text-align: left;">
								<p>
									Der Content ist bei der Planung neuer Projekte und ihrer Umsetzung stark eingebunden. Bei bestehenden Angeboten betreut er die Plattform und verantwortet ihre ständige Optimierung. Zu seinen Aufgaben gehört das Erstellen von Inhalten, vor allem aber plant und betreut er die Bild-, Text- und Multimediainhalte, die auf dem Netzwerk stattfinden sollen und bindet sie ein. Er erarbeitet Workflows für die Contentplanung- und erstellung und koordiniert Teammitglieder und Externe.
									<br><br>
									Wie breit sein Aufgabengebiet ausfällt und wie stark er in die Contenterstellung eingebunden ist, hängt im Wesentlichen von der Größe des Netzwerkes und dem Bereich ab. Während ein Content im PR viel mit Social Media zu tun hat, ist ein Content in der Qualitätssicherung mehr mit bug meldungen beschäftigt. 
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