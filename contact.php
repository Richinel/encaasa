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
				Mijnsherenaan 216<br>
				3083 BZ Rotterdam<br>
				 <br>
				 
				KVK : 58872566<br>
				<br>
				 
				Ook kunt u ons via onderstaand formulier mailen u kunt hier een dag en tijd opgeven waarop wij u kunnen bellen (terug bellen kan tot 20:00 uur)
			</p>

			<form action="./mail_function.php" id="c_form">
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
				<button type="submit" name="submit" value="Verzenden"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Verzenden</button>
			</form>
		</div>

		<?php include("includes/direct_help.php");?>
		
		<?php include("includes/dh_panel.php");?>

	</div>	

<?php include("includes/footer.php");?>