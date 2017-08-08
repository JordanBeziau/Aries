<table class="table table-striped">
<td><a class="btn btn-success" href="<?php echo BASE_URL ?>/admin/create">Create a new post</a></td>
<?php foreach($articles as $a): ?>
 <tr>
     <td><?= $a->titre ?></td>
     <td><a class="btn btn-info" href="<?php echo BASE_URL ?>/admin/edit/<?php echo $a->id ?>">Edit</a></td>
     <td><a class="btn btn-danger" href="<?php echo BASE_URL."/admin/delete/".$a->id ?>">Delete</a></td>
 </tr>
<?php endforeach; ?>
</table>