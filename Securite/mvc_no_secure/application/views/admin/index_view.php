<table class="table table-striped">
<td><a class="btn btn-success" href="<?php ?>">Create a new post</a></td>
<?php foreach($articles as $a): ?>
 <tr>
     <td><?= $a->titre ?></td>
     <td><a class="btn btn-info" href="<?php ?>">Edit</a></td>
     <td><a class="btn btn-danger" href="<?php ?>">Delete</a></td>
 </tr>
<?php endforeach; ?>
</table>