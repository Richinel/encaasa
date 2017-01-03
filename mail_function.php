<html>
<head><title>Mail</title><link rel="stylesheet" type="text/css" href="css/main.css"></head>
<body>
<?php

// mailfunction

$name 		= $_POST["name"];
$email 		= $_POST["email"];
$subject 	= $_POST["subject"];
$msg 		= $_POST["msg"];
$mymail 	= "rj_1993@live.nl";
$DATA 		= "$name | $email\r\n$msg";
mail($mymail, "Portfolio", $DATA);

// forward
echo "Wij hebben uw e-mail in goede orde ontvangen! We zullen zo gauw mogelijk contact met u opnemen! <br><br>Met vriendelijke groet,<br> Encaasa";
header('Refresh: 10; url=index.php'); 

?>

<a href="index.php">Direct terugkeren</a>

</body>
</html>