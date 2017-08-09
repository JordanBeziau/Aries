<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 09/08/2017
 * Time: 15:01
 */

header("Content-Type: image/png");
$image = imagecreate(200, 200);
$lightseagreen = imagecolorallocate($image, 32, 178, 170);
imagepng($image);