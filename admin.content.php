<?php //namespace Habari; ?>
<?php if ( User::identify()->loggedin ) : ?>
<div class="admin">
	<a class="editlink" href="<?php echo $content->editlink; ?>"><i class="icon-pencil"></i><b>Edit</b></a>
</div>
<?php endif; ?>

