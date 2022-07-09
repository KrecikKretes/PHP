<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$tekst=$_POST['tekst'];
		if (preg_match('/ma/', $tekst)){
			echo "Wzorzec pasuje do tekstu, ktory wpisales";
		}else{
			echo "Błąd: Wzorzec nie pasuje do tekstu";
		}
	?>

</body>
</html>