<!doctype html>
<head>
	<meta charset="UTF=8">
</head>
<body>
	<form action="rozwiazanie.php" method="POST">
		<h1>Pytanie 1:</h1>
		<?php
			require('pytania.php');
			echo $pytania[0][0]."<br>";
			for($i=1;$i<4;$i++){
					echo '<input type="radio" name="jeden" value='.$pytania[0][$i].'>'.$pytania[0][$i]."<br>";
			}
		?>
		<h1>Pytanie 2:</h1>
		<?php
			require('pytania.php');
			echo $pytania[1][0]."<br>";
			for($i=1;$i<4;$i++){
					echo '<input type="radio" name="dwa" value='.$pytania[1][$i].'>'.$pytania[1][$i]."<br>";
			}
		?>
		<h1>Pytanie 3:</h1>
		<?php
			require('pytania.php');
			echo $pytania[2][0]."<br>";
			for($i=1;$i<4;$i++){
					echo '<input type="radio" name="trzy" value='.$pytania[2][$i].'>'.$pytania[2][$i]."<br>";
			}
		?>
		<button type="submit">Wyślij</button>
	</form>
</body>
</html>