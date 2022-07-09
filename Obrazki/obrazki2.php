<?php
header("Content-type: image/png");

$rysunek = imagecreate(200,200);
$kolorbialy = imagecolorallocate($rysunek, 255, 255, 255);
$kolorczarny = imagecolorallocate($rysunek, 0, 0, 0);
imagefill($rysunek, 0, 0,$kolorczarny);
		
for($i=1;$i<10;$i++){
	imageline($rysunek, 20*$i, 0, 20*$i, 200, $kolorbialy);
	imageline($rysunek, 0, 20*$i, 200, 20*$i, $kolorbialy);
}
for($x=0;$x<10;$x++){
	for($y=0;$y<10;$y++){
		$kolorlosowy = imagecolorallocate($rysunek,
		rand()%256, rand()%256, rand()%256);
	imagefill($rysunek, 5+$x*20, 5+$y*20, $kolorlosowy);
	}
}

imagepng($rysunek);
?>