<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 15:59
 */

require "Convert.php";
require "Utile.php";
require "Manage.php";

$m = new Manage();
echo $m -> change();
echo "<hr>";
$m->reset();
echo "</hr>";
echo $m->titre($m->data);