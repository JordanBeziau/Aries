<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 13:47
 */

require "assets/class/Musicien.php";

DB::connexion();
$all = Musicien::all();

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cats accordion</title>
</head>
<body>

</body>
</html>
