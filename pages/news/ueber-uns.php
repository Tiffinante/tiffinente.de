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
		<title>Über uns - Twenty by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?= $css_path ?>
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<?= $header ?>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-tablet-alt"></span>
						<h2><strong>Über uns</strong></h2>
						<p>Wir sind Spastenverein.net</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 container">

							<div class="row gtr-150">
								<div class="col-8 col-12-narrower">

									<!-- Content -->
										<div class="content">
											<section>
												<a href="#" class="image featured"><img src="<?= $imglink ?>ts/Ts3Banner.png" alt="" /></a>
												<header>
													<h3><b>Über uns</b></h3>
												</header>
												<p>	
													Auf den ersten Blick sind wir nur ein kleiner Teamspeak Server, <br>
													aber auf den zweiten Blick sind wir mehr als das! Wir sind eine Community mit Herz! <br>
													Wir stecken unsere volle Energie in diese Community uns sind immer für euch da! <br>
													Wir grenzen niemanden aus und sind für jeden von euch da, <br>
													auch bei Problemen helfen wir euch gerne oder wenn ihr einfach mal über ein Thema reden wollt welches euch belastet,
													wir sind für euch da! Natürlich erlebt ihr bei uns witzige und tolle Momente mit uns und unserer Community. <br>
													Wir sind ein Projekt mit Herz und Seele! <br>
													Wir sind Spastenverein.net deine Community, deine Ansprechpatner!
												</p>
												<p class="date-news">04.04.2021</p>
											</section>
										</div>

								</div>
								<div class="col-4 col-12-narrower">

									<!-- Sidebar -->
										<div class="sidebar">

											<br>

											<section>
												<header>
													<a href="<?= $link ?>teamspeak" class="image featured"><img src="<?= $imglink ?>images/teamspeak-banner.png" alt="" /></a>
													<h3><b>TeamSpeak</b></h3>
												</header>
												<p>
													Der Spastenverein.net TeamSpeak Server ist eine öffentliche Community, die offen für alle ist. Auf unserm TeamSpeak Server kannst du...
												</p>
												<footer>
													<ul class="buttons">
														<li><a href="<?= $link ?>teamspeak" class="button small">Mehr erfahren</a></li>
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