<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->pubdate->format('c'); ?>">
			<?php echo $content->pubdate_out; ?>
		</time>
	</p>
</header>