<?php

	$id = $_GET["id"];
	
	$ip = "localhost";
	$user = "maszyna";
	$pass = "tgmraswsk";
	
	$conn = new mysqli($ip, $user, $pass, "maszyna");
	$sql = "DELETE FROM Zamowienia WHERE id='$id'";
	$conn->query($sql);

?>
