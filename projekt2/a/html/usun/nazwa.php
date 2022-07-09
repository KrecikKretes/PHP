<?php
	$zapytanie="DELETE FROM turnieje WHERE nazwa='$bbb'";
	$wynik=mysqli_query($polacz,$zapytanie)
	or die("Blad zapytania");
	echo "Usuwanie przebiegło pomyślnie";
?>