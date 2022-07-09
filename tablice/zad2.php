<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		$w["Polska"]="warszawa";
		$w["Włochy"]="Rzym";
		$w["USA"]="Waszyngton";
	
		while(list($kraj, $stolica)=each($w)){
			echo "Stolica $kraj jest $stolica <br>";	
		}
		echo "<br>";
		asort($w);
		while(list($kraj, $stolica)=each($w)){
			echo "$stolica<br>";	
		}
		echo "<br>";
		krsort($w);
		while(list($kraj, $stolica)=each($w)){
			echo "$kraj<br>";	
		}
	?>
</body>
</html>