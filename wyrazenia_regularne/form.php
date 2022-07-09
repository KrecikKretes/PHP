<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form action="kalkulator.php" method="post">
		<p>Liczba egzemplarzy: <input type="text" name="quantity" size="5" maxlength="10"/></p>
		<p>Cena: <input type="text" name="price" size="5" maxlength="10" /></p>
		<p>Podatek (%): <input type="text" name="tax" size="5" maxlength="10" /></p>
		<p><input type="submit" name="submit" value="Oblicz!"/></p>
		<input type="hidden" name="submitted" value="TRUE" />
	</form>
</body>
</html>