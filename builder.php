<?php
	
	$link = 'https://spastenverein.net/';
	
	$imglink = 'https://i.spastenverein.net/';




	$version = 'Made with <font color="red">❤</font> in Germany - Version 1.1';


	$css_path = '<link rel="stylesheet" href="'.$link.'assets/css/main.css" />
				 <noscript><link rel="stylesheet" href="'.$link.'assets/css/noscript.css" /></noscript>
				 <link rel="shortcut icon" href="'.$imglink.'images/logo_t.png" type="image/x-icon">';


	$script_path = '<script src="'.$link.'assets/js/jquery.min.js"></script>
					<script src="'.$link.'assets/js/jquery.dropotron.min.js"></script>
					<script src="'.$link.'assets/js/jquery.scrolly.min.js"></script>
					<script src="'.$link.'assets/js/jquery.scrollex.min.js"></script>
					<script src="'.$link.'assets/js/browser.min.js"></script>
					<script src="'.$link.'assets/js/breakpoints.min.js"></script>
					<script src="'.$link.'assets/js/util.js"></script>
					<script src="'.$link.'assets/js/main.js"></script>';

	$header = '<header id="header">
					<h1 id="logo"><a href="'.$link.'">Spastenverein <span>.net</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="'.$link.'">Home</a></li>
							<li class="submenu">
								<a href="" class="button">Menu</a>
								<ul>
									<li><a href="https://panel.spastenverein.net">TS³ Statistiken</a></li>
									<li><a href="'.$link.'news">News</a></li>
									<li><a href="'.$link.'news/ueber-uns">Über uns</a></li>
									<li><a href="'.$link.'team">Team</a></li>
									<li><a href="'.$link.'partner">Partner</a></li>
									<li><a href="'.$link.'kontakt">Kontakt</a></li>
									<li><a href="'.$link.'regeln">Regeln</a></li>
									<li><a href="'.$link.'impressum">Impressum</a></li>
								</ul>
							</li>
							<li class="current"><a class="button primary" href="https://forum.spastenverein.net">Forum</a></li>
						</ul>
					</nav>
				</header>';

 	$header2 = '<header id="header" class="alt">
					<h1 id="logo"><a href="'.$link.'">Spastenverein <span>.net</span></a></h1>
					<nav id="nav">
						<ul>
							<li class="current"><a href="'.$link.'">Home</a></li>
							<li class="submenu">
								<a href="" class="button">Menu</a>
								<ul>
									<li><a href="https://panel.spastenverein.net">TS³ Statistiken</a></li>
									<li><a href="'.$link.'news">News</a></li>
									<li><a href="'.$link.'news/ueber-uns">Über uns</a></li>
									<li><a href="'.$link.'team">Team</a></li>
									<li><a href="'.$link.'partner">Partner</a></li>
									<li><a href="'.$link.'kontakt">Kontakt</a></li>
									<li><a href="'.$link.'regeln">Regeln</a></li>
									<li><a href="'.$link.'impressum">Impressum</a></li>
								</ul>
							</li>
							<li class="current"><a class="button primary" href="https://forum.spastenverein.net">Forum</a></li>
						</ul>
					</nav>
				</header>';


	$menu = '<ul>
				<li><a href="https://panel.spastenverein.net">TS³ Statistiken</a></li>
				<li><a href="'.$link.'news">News</a></li>
				<li><a href="'.$link.'news/ueber-uns">Über uns</a></li>
				<li><a href="'.$link.'team">Team</a></li>
				<li><a href="'.$link.'partner">Partner</a></li>
				<li><a href="https://www.patreon.com/spastenverein">Patreon</a></li>
				<li><a href="'.$link.'kontakt">Kontakt</a></li>
				<li><a href="'.$link.'regeln">Regeln</a></li>
				<li><a href="'.$link.'impressum">Impressum</a></li>
			</ul>';


	$footer = '<footer id="footer">
						<ul class="icons">
							<li><a href="https://twitter.com/spastenverein" class="icon brands circle fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="ts3server://ts.spastenverein.net" target="blank" class="icon brands circle fa-teamspeak"><span class="label">TeamSpeak</span></a></li>
							<li><a href="https://discord.gg/4aWKGDRfGF" target="_blank" class="icon brands circle fa-discord"><span class="label">Discord</span></a></li>
							<li><a href="https://www.youtube.com/channel/UCApr97tI6K9Q-osgeTFKkow" class="icon brands circle fa-youtube"><span class="label">YouTube</span></a></li>
						</ul>
						<ul class="icons">
							<li><a href="https://pornhub.com/users/spastenverein" class="icon brands circle fab fa-pinterest-p"><span class="label">PornHUB</span></a></li>
							<li><a href="https://www.patreon.com/spastenverein" class="icon brands circle fab fa-patreon"><span class="label">Patreon</span></a></li>
							<li><a href="https://www.instagram.com/spastenvereinnet" class="icon brands circle fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="https://www.facebook.com/spastenverein.net" class="icon brands circle fab fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.reddit.com/user/spastenvereinnet" class="icon brands circle fab fa-reddit-alien"><span class="label">Reddit</span></a></li>
							<li><a href="https://www.twitch.tv/spastenvereinnet" class="icon brands circle fab fa-twitch"><span class="label">Twitch</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; 2021 Spastenverein.net</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
						<ul class="copyright">
							<li><a href="'.$link.'impressum">Impressum</a></li>	<li><a href="'.$link.'datenschutz#Datenschutz">Datenschutz</a></li>
						</ul>
						<br />
						<div align="center"> '.$version.'</div>
				</footer>';



			
	$vorschläge_news = '<section class="wrapper style1 container special">
							<div class="row">
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Über uns</h3>
										</header>
										<p>
											Auf den ersten Blick sind wir nur ein kleiner Teamspeak Server, aber auf den zweiten Blick sind wir mehr als das! Wir sind eine Community mit Herz! Wir stecken unsere...
										</p>
										<footer>
											<ul class="buttons">
												<li><a href="'.$link.'news/ueber-uns" class="button small">Mehr erfahren</a></li>
												<p style="font-size: 0.5em">05.04.2021</p>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Unser neues Logo!</h3>
										</header>
										<p>
											Ab dem heutigen Tage werdet ihr mit diesem Brandneuen Update von SPASTENVEREIN.NET ein komplett überarbeitetes Logo auf unserem Discord, Teamspeak und auf unserer...
										</p>
										<footer>
											<ul class="buttons">
												<li><a href="'.$link.'news/newlogo" class="button small">Mehr erfahren</a></li>
												<p style="font-size: 0.5em">04.04.2021</p>
											</ul>
										</footer>
									</section>

								</div>
								<div class="col-4 col-12-narrower">

									<section>
										<header>
											<h3>Inhalt folgt...</h3>
										</header>
										<p>
											Sed tristique purus vitae volutpat ultrices. Aliquam eu elit eget arcu commodo suscipit dolor nec nibh. Proin a ullamcorper elit, et sagittis turpis. Integer ut fermentum.
										</p>
										<footer>
											<ul class="buttons">
												<li><a href="" class="button small">Mehr erfahren</a></li>
												<p style="font-size: 0.5em">00.00.2021</p>
											</ul>
										</footer>
									</section>

								</div>
							</div>
						</section>';

?>
