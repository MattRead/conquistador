<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<span class="meta">By <?php echo $content->author->displayname; ?>,</span>
		<time datetime="<?php echo $content->modified->format('c'); ?>">
			<?php echo $content->modified_out; ?>
		</time>
	</p><p>&#x2766;</p>
</header>
