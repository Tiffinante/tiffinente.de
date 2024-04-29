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
		<title>Forum Regeln - Spastenverein.net</title>
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
								<a href="" class="button">Menu</a>
								<?= $menu ?>
							</li>
							<li class="current"><a class="button primary" href="https://forum.spastenverein.net">Forum</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon solid fa-book"></span>
						<h2>Die <b>Regeln</b> von Spastenverein.net</h2>
						<br>
						<br>
					</header>
					<div class="container">

					<!--One -->
						<section class="wrapper style3 container special">
						
						<!--regeln-->
							<p style="text-align: left; margin-left: 8em; margin-right: 8em;">
								<b>Folgt...</b>
							</p>
							
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