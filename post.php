<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<header id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->pubdate->format('c'); ?>">
			<?php echo $content->pubdate_out; ?>
		</time>
	</p>
</header>

<?php
echo $content->cached_content ? $content->cached_content : $content->content_out;
echo $theme->area('split');
echo $theme->content($content, 'comments');
echo $theme->area('foot');
?>

