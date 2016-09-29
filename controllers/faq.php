<?php
	include('dbconnect.php');

	$sql = "SELECT vraag, antwoord FROM faq";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "	<h5>".$row['vraag']. "</h5>
		  		<div>
		    		<p>"
		    			.$row['antwoord'].	
		    		"</p>
		  		</div>";
		}
		echo '</div>';
	} 
	else {
		echo "0 results";
	}
?>