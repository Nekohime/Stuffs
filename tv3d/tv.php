<?php
$interval = "10"; #when the script will update with a new image in seconds.
$images = file("images.txt");
$i = (time()/$interval)%sizeof($images);
header("Content-type: image/jpeg");
readfile(trim(preg_replace('/\s+/', '',$images[$i])))or die ('Can\'t find image '.$images[$i].'  '); //readfile(eregi_replace("\n","",$images[$i]))or die ('Can\'t find image '.$images[$i].'  '); //Leaving this here for historical value.
die("\nThis image is from the XYZ TV.")
?>