<!doctype html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		clearstatcache();
		$sciezka=@$_POST["aaa"];
		if($deskr=opendir($sciezka)){
			while(($plik=readdir($deskr))!==false){
				echo "$plik<br>";
				if(is_file($plik)){
					$pliki[]=$plik;
				}else{
					$katalog[]=$plik;
				}
			}
			closedir($deskr);
		}
		echo "<h1>Wszystkie katalogi: </h1>";
		foreach ($katalog as $a){
			echo "$a <br>";
		}
		echo "<br>";
		echo "<h1>Wszystkie pliki: </h1>";
		foreach ($pliki as $a){
			echo "$a <br>";
		}
		
	?>
	
</body>
</html>