<?php namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<header id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->modified->format('c'); ?>">
			<?php echo $content->modified_out; ?>
		</time>
	</p>
</header>

<?php
echo $content->content_out;
echo $theme->area('split');
echo $theme->content($content, 'comments');
echo $theme->area('foot');
?>
