<?php
header("Content-type: image/png");

$rysunek = imagecreate(200,200);
$kolorbialy = imagecolorallocate($rysunek, 255, 255, 255);
$kolorczarny = imagecolorallocate($rysunek, 0, 0, 0);
$kolorczerwony = imagecolorallocate($rysunek, 255, 0, 0);
imagefill($rysunek, 0, 0,$kolorczarny);
		

for($x=1;$x<30;$x++){
	imagearc($rysunek, rand()%200-1, rand()%200-1, 20, 20, 0, 360, $kolorczerwony);
	imagearc($rysunek, rand()%200-1, rand()%200-1, 20, 20, 0, 360, $kolorczarny);
}

imagepng($rysunek);
?>