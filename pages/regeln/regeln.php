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
		<title>Regeln - Spastenverein.net</title>
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
						<span class="icon solid fa-book"></span>
						<h2>Die <b>Regeln</b> von Spastenverein.net</h2>
						<br>
						<br>
					</header>
					<div class="container">
						
						<!--Verteilung-->
							<footer class="major" style="text-align: center; margin-bottom: 14em;">
								<ul class="buttons">
									<li><p style="padding: 0; margin: -1;"><b>↓ zu den Regeln für ↓</b></p><a class="button" style="background-color: #4a68b5; font-size: 1em; margin-bottom: 1.5em; color: white; :hover {background-color: rgb(0.0.0);}" href="<?= $link ?>regeln/teamspeak">TeamSpeak</a></li>
									<li><p style="padding: 0; margin: -1;"><b>↓ zu den Regeln für ↓</b></p><a class="button" style="background-color: #7289da; font-size: 1em; margin-bottom: 1.5em; color: white; :hover {background-color: rgb(0.0.0);}" href="<?= $link ?>regeln/discord">Discord</a></li>
									<li><p style="padding: 0; margin: -1;"><b>↓ zu den Regeln für ↓</b></p><a class="button" style="background-color: #FFA500; font-size: 1em; margin-bottom: 1.5em; color: white; :hover {background-color: rgb(0.0.0);}" href="<?= $link ?>regeln/forum">Forum</a></li>
								</ul>
							</footer>

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