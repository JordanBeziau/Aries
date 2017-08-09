<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 09/08/2017
 * Time: 15:01
 */

header("Content-Type: images/jpeg");
$image = imagecreatefromjpeg("images-source/gilbert.jpeg");
imagejpeg($image);