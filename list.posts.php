<?php //namespace Habari; ?>
<ul class="posts" id="post-list">
	<?php
	foreach ($content as $post) {
		echo $theme->content($post, 'list');
	}
	?>
</ul>

<?php echo $theme->paged_nav(); ?>
