<?php
imagen=$_POST["imagen"];


$base64 = $imagen;

$binario = base64_decode(bese64);

$im = imageCreateFromString($binario);

if (!$im)
{
    die('No contains information');
}
$img_file = 'filename.jpg';
$img_file2 = 'filename2.jpg';
imagejpeg($im, $img_file, 25)
imagejpeg($im, $img_file2, 25)