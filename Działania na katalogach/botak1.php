<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$katalog="./";
		if($deskr=opendir($katalog)){
			while(($plik=readdir($deskr))!==false)
				echo "<a href='$plik'> $plik <br></a>";
			closedir($deskr);
		}else{
			echo "nie można utworzyć katalogu";
		}
		
		echo "<br><br><br><br>";
		
		
		$tablica=scandir($katalog);
		foreach($tablica as $plik){
			echo "$plik <br>";
		}
		
		echo "<br><br><br><br>";
		echo "<br><br><br><br>";
		echo "<br><br><br><br>";
		
	?>
	<form method="POST" action="botak2.php">
		<input type="text" name="aaa" placeholder="Podaj ścieżkę">
		<input type="submit"> 
	</form>
</body>
</html>