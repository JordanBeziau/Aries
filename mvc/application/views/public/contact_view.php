<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 09:39
 */
?>

<h1><?php echo $titre; ?></h1>

<hr>

<ul class="contact-list">
  <h3>Liste des contacts</h3>
  <?php foreach ($contacts as $contact) : ?>
    <li>Pseudo : <?php echo $contact->pseudo ?>, Mail : <?php echo $contact->email ?></li>
  <?php endforeach; ?>
</ul>
