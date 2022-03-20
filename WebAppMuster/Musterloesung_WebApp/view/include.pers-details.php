<section id="detailsStart">
	<div class="inner">
		<header class="major">
			<h1>Person-Details</h1>
		</header>

		<div class="row">
            <section> 
            	<form method="post" action="#detailsStart" id="details">
            		<div class="field half first">
            			<label for="detailVorname">Vorname</label>
            			<input type="text" name="detailVorname" id="detailVorname" class="detailWerte" value="<?= $detailVorname ?>" />
            		</div>
            		<div class="field half">
            			<label for="detailNachname">Nachname</label>
            			<input type="text" name="detailNachname" id="detailNachname" class="detailWerte" value="<?= $detailNachname ?>" />
            		</div>
            		<div class="field half first">
            			<label for="detailEmail">EMail</label>
            			<input type="text" name="detailEmail" id="detailEmail" class="detailWerte" value="<?= $detailEmail ?>" />
            		</div>
             		<div class="field half">
             		
             		</div>
            		<ul class="actions pull-right">
            			<li><input type="submit" name="btn_cancel" value="Abbrechen" /></li>
            			<li><input type="submit" name="btn_save"   value="Speichern" class="special" /></li>
            		</ul>
            	</form>
            </section>
        </div>
        <header class="major"><h1></h1></header>
    </div>
</section>

			</div>

		<!-- Scripts -->
			<script src="../../control/js/jquery.min.js"></script>
			<script src="../../control/js/jquery.scrolly.min.js"></script>
			<script src="../../control/js/jquery.scrollex.min.js"></script>
			<script src="../../control/js/skel.min.js"></script>
			<script src="../../control/js/util.js"></script>
			<script src="../../control/js/main.js"></script>

	</body>
</html>