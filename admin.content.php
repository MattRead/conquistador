<?php //namespace Habari; ?>
<?php if ( User::identify()->loggedin ) : ?>
<div class="admin">
	<a class="editlink" href="<?php echo $content->editlink; ?>">Edit</a>
</div>
<?php endif; ?>

