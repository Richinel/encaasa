<?php
	$title = "Contact";  
	include("includes/header.php");
?>

	<div class="contact">

		<?php include("includes/maps.php");?>
		
		<div class="contact_wrapper">
			<h2>Contact</h2>

			<p>
				<strong>Encaasa BV</strong><br>
				Mijnsherenlaan 216<br>
				3083 BZ Rotterdam<br>
				 <br>
				 
				KVK : 58872566<br>
				<br>
				 
				Ook kunt u ons via onderstaand formulier mailen. U kunt hier een dag en tijd opgeven waarop wij u kunnen bellen (Terug bellen kan tot 20:00 uur).
			</p>

			<form action="./mail_function.php" id="c_form">

				<!-- <?php if(isset($_GET['CaptchaFail'])){ ?>
					<div>Verifieer alstublieft de ReCaptcha!</div>
				<?php } ?> -->

				<input type="text" name="name" placeholder="Voornaam + Achternaam" required>
					<br>
					<br>
				<input type="text" name="email" placeholder="E-mailadres" required>
					<br>
					<br>
				<input type="text" name="subject" placeholder="Onderwerp" required>
					<br>
					<br>
				<textarea name="msg" placeholder="Uw bericht" required></textarea>
					<br>
					<br>
				<div class="g-recaptcha" data-sitekey="6LcKhBAUAAAAAPwH5jso0Ujzx-UmmxutRvgetQmE"></div>
					<br>
				<button type="submit" name="submit" value="Verzenden"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Verzenden</button>
			</form>

			<script src='https://www.google.com/recaptcha/api.js'></script>

		</div>

		<?php include("includes/direct_help.php");?>
		
		<?php include("includes/dh_panel.php");?>

	</div>	

<?php include("includes/footer.php");?>