<?php
header("Content-type: image/jpeg");

$rysunek = imagecreate(200,200);

$kolorbialy = imagecolorallocate($rysunek, 255, 255, 255);
$kolorczarny = imagecolorallocate($rysunek, 0, 0, 0);

imagefill($rysunek, 0,0,$kolorczarny);

for($i=1;$i<10;$i++){
	imageline($rysunek, 20*$i, 0, 20*$i, 200, $kolorbialy);
	imageline($rysunek, 0, 20*$i, 200, 20*$i, $kolorbialy);
}

imagejpeg($rysunek);


?>