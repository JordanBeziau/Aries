<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 08/08/2017
 * Time: 14:43
 */
?>

<div class="row ">
  <div class="col-sm-12">
    <h3><?php echo $article->titre ?></h3>
    <p><?php echo $article->contenu ?>
      <br><em class="meta-data">Par <?php echo $article->pseudo ?> | <?php echo $article->createdAt ?></em>
    </p>
  </div>
</div>