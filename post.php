<header id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->pubdate->format('c'); ?>">
			<?php echo $content->pubdate_out; ?>
		</time>
	</p>
</header>

<?php
echo $theme->area('post_header');
echo $content->content_out;
echo $theme->area('post_comments_header');
echo $theme->content($content, 'comments');
echo $theme->area('post_footer');
?>

