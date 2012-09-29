<?php echo $theme->content($content, 'admin'); ?>

<header id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->modified->format('c'); ?>">
			<?php echo $content->modified_out; ?> 
		</time>
	</p>
</header>

<?php echo $content->content_out; ?>

<?php echo $theme->area('post_footer'); ?>

<?php echo $theme->content($related_posts, 'related'); ?>

