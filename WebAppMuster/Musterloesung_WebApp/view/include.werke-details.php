<section id="detailsStart">
	<div class="inner">
		<header class="major">
			<h1>Werk-Details</h1>
		</header>

		<div class="row">
            <section> 
            	<form method="post" action="#detailsStart" id="details">
            		<div class="field half first">
            			<label for="detailTitl">Titel</label>
            			<input type="text" name="detailTitl" id="detailTitl" class="detailWerte" value="<?= $detailTitl ?>" />
            		</div>
            		<div class="field half">
            			<label for="detailType">Typ</label>
            			<input type="text" name="detailType" id="detailType" class="detailWerte" value="<?= $detailType ?>" />
            		</div>
            		<div class="field half first">
            			<label for="detailMArt">Machart</label>
            			<input type="text" name="detailMArt" id="detailMArt" class="detailWerte" value="<?= $detailMArt ?>" />
            		</div>
            		<div class="field half">
            			<label for="detailJahr">Jahr</label>
            			<input type="text" name="detailJahr" id="detailJahr" class="detailWerte" value="<?= $detailJahr ?>" />
            		</div>
            		<div class="field half first">
            			<label for="detailDime">Dimension (cm)</label>
            			<input type="text" name="detailDime" id="detailDime" class="detailWerte" value="<?= $detailDime ?>" />
            		</div>
<!--             		<div class="field half"> -->
<!--             			<label for="detailFoto">Foto (später)</label> -->
            			<input type="hidden" name="detailFoto" id="detailFoto" value="<?= $detailFoto ?>" disabled="disabled" /> 
<!--             		</div> -->
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