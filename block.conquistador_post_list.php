<?php if ($content->_show_title) : ?>
<h1>
	<?php echo $content->title ?>
</h1>
<?php endif; ?>
<?php echo $theme->content($posts, 'list'); ?>
