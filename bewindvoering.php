<?php
	$title = "Bewindvoering"; 
	include("includes/header.php");
?>

	<div class="content">
		<div class="bw">
			<div class="bw_wrapper">

				<h2>Beschermingsbewind</h2>

				<p>
					Soms kunnen mensen niet goed meer voor zichzelf zorgen of hun financiën niet meer zelf regelen. Dit kan het gevolg zijn van lichamelijke of psychische klachten. Er kan ook sprake zijn van problematische schulden, verkwisting of een verslaving. De wet geeft de rechter dan de mogelijkheid om een beschermingsmaatregel op te leggen: curatele, bewind of mentorschap.<br>
					<br>
					Bewindvoering schept een overzicht in financiële situaties die problematisch zijn. Op deze manier zorgt de bewindvoerder er mede voor dat er een positieve bijdrage wordt geleverd aan het bieden van rust aan de cliënt. Hierdoor kan de cliënt zich weer concentreren op andere zaken die belangrijk zijn in zijn/haar leven.
					<br>
					<br>
					Bewindvoering is bedoeld om een stabiele financiële situatie te verkrijgen, dit kan voor u de oplossing zijn wanneer er schulden zijn die niet in 36 maanden betaald kunnen worden.
				</p>

				<hr>

				<h3><center>FAQ</center></h3>
				<div id="accordion" class="bw_box">

					<?php include("../encaasa_git/controllers/faq.php");?>
				</div>
				
			</div>
		</div>
		<?php include("includes/direct_help.php");?>
		<?php include("includes/dh_panel.php");?>
	</div>

<?php include("includes/footer.php");?>