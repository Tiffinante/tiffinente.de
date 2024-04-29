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
		<title>Kontakt - Spastenverein.net</title>
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
						<span class="icon solid fa-envelope"></span>
						<h2>Nimm kontakt mit uns auf</h2>
						<p>Wir werden dir per <b>E-Mail</b> eine Antwort auf dein Anliegen schicken.</p>
						<br>
						
					</header>
					<div class="container">


					<!--One -->
						<section class="wrapper style4 special container medium">
							
							<?php
						    if (!$_POST['submit'] && !$_POST['name']) {
							?>
							<!--Content-->
								<div class="content">

									<!--Formular-->
									<form id="meinFormular" method="post" action="<?php $_SERVER['$SCRIPT_NAME'] ?>">
										<div class="row gtr-50">
										<!--Name-->
									    	<div class="col-6 col-12-mobile">
												<input type="text" required name="name" placeholder="*Name" />
											</div>
										<!--e-mail-->
									    	<div class="col-6 col-12-mobile">
												<input type="email" required name="email" placeholder="*E-mail" />
											</div>
										<!--betreff-->
									    	<div class="col-12">
												<input type="text" required name="subject" placeholder="*Betreff" />
											</div>
										<!--message-->
											<div class="col-12">
												<textarea name="message" required style="resize: none;" placeholder="*Nachricht" rows="7"></textarea>
											</div>
										<!--send-->
											<div class="col-12">
												<ul class="buttons">
													<li><input type="submit" name="submit" class="special" value="Senden" /></li>
												</ul>
											</div>

										</div>
									</form>

								</div>
								
									<?php
									        }
									    else {
									        /* Übergibt den Inhalt der Formularfelder an Variablen */
									        $absender_name = $_POST['name'];
									        $absender_mail = $_POST['email'];
									        $betreff = $_POST['subject'];
									        $nachricht = $_POST['message'];
									        /* Legt den Emfänger fest */
									        $empfaenger = 'support@spastenverein.net';
									        /* Baut die Mail zusammen*/
									        $message .= 'Liebes Teammitglied,' . "\n";
									        $message .= 'du hast folgende Nachricht von '.$absender_name.' mit der E-Mail Adresse '.$absender_mail.' erhalten:' . "\n";
									        $message .= 'Diese Nachricht wurde über das Kontakt-Formular verfasst.' . "\n\n";
									        $message .= $nachricht . "\n\n";
									        /* Baut Header der Mail zusammen */
									        $header .= 'From:' . $absender_mail . "\n";
									        $header .= 'Reply-To:' . $absender_mail . "\n"; 
									        $header .= "Content-type: text/plain; charset=UTF-8 \r\n";
									        /* Verschicken der Mail */
									        mail($empfaenger, $betreff, $message, $header);

									        echo "<p><b>Ihre Nachricht wurde &uuml;bermittelt. Vielen Dank! 🎉</b></p>"; 
									        echo "<p>Das Bearbeiten ihrer Nachricht kann etwas Zeit in Anspruch nehmen.<br> Sie können jeder Zeit auf unserem Teamspeak im Support nach dem Status ihrer Nachricht fragen.<br><br>ts.spastenverein.net</p>";
									    }
									?>
						</section>

				</article>

			<!-- Footer -->
				<?= $footer ?>

		</div>

		<!-- Scripts -->
			<?= $script_path ?>
            <script src="//code.tidio.co/g4qckblgnxpdbhmzxcthwisur06fzx2o.js"></script>
	</body>
</html>