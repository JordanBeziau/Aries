<?php
$message = \core\Session::getflash("success");
if ($message !== false) :
  echo "<div class='alert alert-success' role='alert' id='alert'>".$message."</div>";
endif;
?>
<table class="table table-striped">
<td><a class="btn btn-success" href="<?php echo BASE_URL ?>/admin/create">Create a new post</a></td>
<?php foreach($articles as $a): ?>
 <tr>
     <td><?= $a->titre ?></td>
   <td><?php echo $a->pseudo; ?></td>
   <td><a class="btn btn-info" href="<?php echo BASE_URL."/admin/show/".$a->id ?>">Show</a></td>
   <?php if ($profil == 1) : ?>
     <td><a class="btn btn-info" href="<?php echo BASE_URL."/admin/edit/".$a->id ?>">Edit</a></td>
     <td><a class="btn btn-danger" href="<?php echo BASE_URL."/admin/delete/".$a->id."/".$_SESSION["auth"]["token"]; ?>">Delete</a></td>
   <?php endif; ?>
 </tr>
<?php endforeach; ?>
</table>