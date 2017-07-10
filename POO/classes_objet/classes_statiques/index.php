<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 11:52
 */

require "class/session.php";
# Les classes statiques ne sont pas instanciées...
Session::start();
Session::set("auth", [ "pseudo" => "Jack", "profil" => "admin" ]);
if (isset($_GET["destroy"])) {
  if (Session::destroy("auth")) {
    $message = "La session a été détruite";
  }
}

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php if (Session::exist("auth")) : ?>
    <h1>Hello <?= Session::get("auth", "pseudo"); ?></h1>
    <a href="?destroy=true">Destroy Session</a>
  <?php else : ?>
    <p><?= $message ?></p>
  <?php endif; ?>

</body>
</html>
