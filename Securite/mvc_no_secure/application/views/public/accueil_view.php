<div class="row ">
    <div class="col-sm-12">
        <?php foreach($articles as $article): ?>
        
        <h3><?php echo $article->titre ?></h3>
        <p><?php echo $article->contenu ?>
        <br><em class="meta-data">Par <?php echo $article->pseudo ?> | <?php echo $article->createdAt ?></em>
        </p>
        
        <?php endforeach; ?>
    </div>
  <div class="row text-center">
    <nav aria-label="page Navigation">
      <ul class="pagination">
        <?php
          for ($i = 0; $i < $links; $i++) :
            echo "<li><a href='".BASE_URL."/accueil/index/".$show * $i."'>".($i + 1)."</a></li>";
          endfor;
        ?>
      </ul>
    </nav>
  </div>
</div>
