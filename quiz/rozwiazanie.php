<!doctype html>
<head>
	<meta charset="UTF-8">
	<style>
		#good{
				color:green;
				margin-left:10px;
		}
		#bad{
				color:red;
				margin-left:10px;
		}
		#gooda{
				color:green;
		}
		#bada{
				color:red;
		}
	</style>
</head>
<body>
	<?php
		require ('pytania.php');
		$odp_jeden=@$_POST['jeden'];
		$odp_dwa=@$_POST['dwa'];
		$odp_trzy=@$_POST['trzy'];
		$poprawne=0;
		if($odp_jeden==$pytania[0][4]){
			$poprawne++;
		}
		if($odp_dwa==$pytania[1][4]){
			$poprawne++;
		}
		if($odp_trzy==$pytania[2][4]){
			$poprawne++;
		}
		echo "Liczba poprawnych odpowiedzi : ".$poprawne;
	?>
	<br><br>
	<h1>Pytanie 1:</h1>
		<?php
			require('pytania.php');
			echo $pytania[0][0]."<br>";
			for($i=1;$i<4;$i++){
				if($pytania[0][$i]==$pytania[0][4]){
					echo '<p id="good">'.$pytania[0][$i]."</p>";
				}else{
					echo '<p id="bad">'.$pytania[0][$i]."</p>";
				}
			}
			if($odp_jeden==$pytania[0][4])
				echo '<p id="gooda">Twoja odpowiedź to :'.$odp_jeden."</p>";
			else
				echo '<p id="bada">Twoja odpowiedź to :'.$odp_jeden."</p>";
		?>
		<h1>Pytanie 2:</h1>
		<?php
			require('pytania.php');
			echo $pytania[1][0]."<br>";
			for($i=1;$i<4;$i++){
				if($pytania[1][$i]==$pytania[1][4]){
					echo '<p id="good">'.$pytania[1][$i]."</p>";
				}else{
					echo '<p id="bad">'.$pytania[1][$i]."</p>";
				}
			}
			if($odp_dwa==$pytania[1][4])
				echo '<p id="gooda">Twoja odpowiedź to :'.$odp_dwa."</p>";
			else
				echo '<p id="bada">Twoja odpowiedź to :'.$odp_dwa."</p>";
		?>
		<h1>Pytanie 3:</h1>
		<?php
			require('pytania.php');
			echo $pytania[2][0]."<br>";
			for($i=1;$i<4;$i++){
				if($pytania[2][$i]==$pytania[2][4]){
					echo '<p id="good">'.$pytania[2][$i]."</p>";
				}else{
					echo '<p id="bad">'.$pytania[2][$i]."</p>";
				}
			}
			if($odp_trzy==$pytania[2][4])
				echo '<p id="gooda">Twoja odpowiedź to :'.$odp_trzy."</p>";
			else
				echo '<p id="bada">Twoja odpowiedź to :'.$odp_trzy."</p>";
		?>
	
	
	
</body>
</html>