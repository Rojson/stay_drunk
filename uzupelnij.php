<?php

	$ip = "localhost";
	$username = "maszyna";
	$password = "tgmraswsk";

	$Napoj = $_POST["Napoj"];

	$Ilosc = $_POST["Ilosc"];

	$conn = new mysqli($ip, $username, $password, "maszyna");
	$sql = "UPDATE listanapojow SET Ilosc = '$Ilosc' WHERE Napoj = '$Napoj'";
	$wynik = $conn->query($sql);
?>
