<?php include 'view/include.header.html'; ?>

<div id="main" class="alt">

	<!-- One -->
		<section id="one">
			<div class="inner">

	<h2>Verbindungstyp mySQLi</h2>
    	<div class="table-wrapper">
    		<table class="alt">
    			<thead>
    				<tr>
    					<th>Vorname</th>
    					<th>Nachname</th>
    					<th>Email</th>
    					<th> </th>
    					<th> </th>
    				</tr>
    			</thead>
    			<tbody>

<?php include 'control/db_connect_mysqli.php'; ?>

    			</tbody>
    			<tfoot>
    				<tr>
    					<td colspan="5"></td>
    				</tr>
    			</tfoot>
    		</table>
    	</div>

	<hr>

    <h2>Verbindungstyp PDO</h2>
    	<div class="table-wrapper">
    		<table class="alt">
    			<thead>
    				<tr>
    					<th>Vorname</th>
    					<th>Nachname</th>
    					<th>Email</th>
    					<th> </th>
    					<th> </th>
    				</tr>
    			</thead>
    			<tbody>

<?php include 'control/db_connect_pdo.php'; ?>

    			</tbody>
    			<tfoot>
    				<tr>
    					<td colspan="5">Es wurden <?= $anzahl_user ?> Datensaetze gefunden.</td>
    				</tr>
    			</tfoot>
    		</table>
    	</div>
    
    <hr>

    <h2>SQL-Statements</h2>

    <pre><code>
    DROP TABLE IF EXISTS `t_personen`;
    CREATE TABLE IF NOT EXISTS `t_personen` (
      `p_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
      `p_vorname` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
      `p_nachname` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
      `p_email` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
      `p_loginpasswort` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
      PRIMARY KEY (`p_id`),
      UNIQUE KEY `p_id` (`p_id`)
    ) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=9 ;
    
    INSERT INTO `t_personen` (`p_id`, `p_vorname`, `p_nachname`, `p_email`, `p_loginpasswort`) VALUES
    (1, 'Harald', 'Müller', 'harald.mueller@tbz.ch', 'keinpasswort'),
    (2, 'Vorname', 'Nachname', 'vorname.nachname@domain.ch', 'keinpasswort'),
    (3, 'Hansi', 'Hinterseher', 'hansi.hinterseher@tbz.ch', 'keinpasswort'),
    (4, 'Florian', 'Silbereisen', 'florian.silbereisen@tbz.ch', 'keinpasswort'),
    (5, 'Helene', 'Fischer', 'helene.fischer@tbz.ch', 'keinpasswort'),
    (6, 'Beatrice', 'Egli', 'beatrice.egli@tbz.ch', 'keinpasswort'),
    (7, 'Nemo', 'Mettler', 'nemo.mettler@tbz.ch', 'keinpasswort'),
    (8, 'Andrea', 'Berg', 'andrea.berg@tbz.ch', 'keinpasswort');
    </code></pre>

			</div>
		</section>
</div>


<?php include 'view/include.footer.php'; ?>