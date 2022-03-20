<?php include 'view/include.header.html'; ?>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Hauptseite</h1>
							</header>
							<div class="content">
								<p>Einige Demos, eingebettet in eine vorbereitete responsive 
								   HTML5/CSS3-Vorlage aus  <a href="https://html5up.net" target="_blank">https://html5up.net</a></p>
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Get Started</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="view/images/pic05.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="contact.php" class="link">Kontakt</a></h3>
										<p>Kontaktformular und E-Mail Demo</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="view/images/pic06.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Einfaches Formular</h3>
										<p>Name eingeben:</p>
        								<form method="get" action="antwort.php">
        									<input type="text" name="inpTextfeld">
        									<button>OK (get)</button>        								
      									</form>										
        								<form method="post" action="antwort.php">
        									<input type="text" name="inpTextfeld">
        									<button>OK (post)</button>        								
      									</form>										
									</header>
								</article>
							
								<article>
									<span class="image">
										<img src="view/images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="demo_dbconnect_pers_liste.php?connDemo=MYSQLI" class="link">Datenbankverbindung</a></h3>
										<p>Eine MySQL-DB wird aufgerufen &uuml;ber "mySQLi"</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="view/images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="demo_dbconnect_pers_liste.php?connDemo=PDO" class="link">Datenbankverbindung</a></h3>
										<p>Eine MySQL-DB wird aufgerufen &uuml;ber über "PDO"</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="view/images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="demo_json_werk_liste.php" class="link">Datenhaltung mit JSON-File</a></h3>
										<p>&Uuml;ber Filesystem mit JSON (Werkeliste)</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="view/images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="sql/t_personen.sql" class="link">SQL Daten</a></h3>
										<p>Für die MySQL-Datenbank braucht es die Daten-Tabelle</p>
										<ul class="actions">
											<li><a href="sql/t_personen.sql" target="_blank">Personentabelle</a></li>
										</ul>										
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Massa libero</h2>
									</header>
									<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
									<ul class="actions">
										<li><a href="demo_json_liste.php" class="button next">Get Started</a></li>
									</ul>
								</div>
							</section>

					</div>
					
<?php 
include 'view/include.footer.php'; 
?>