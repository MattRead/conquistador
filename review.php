<?php echo $theme->content($content, 'admin'); ?>

<header id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->pubdate->format('c'); ?>">
			<?php echo $content->pubdate_out; ?>
		</time>
	</p>
</header>

<div class="rating"><span class="star-<?php echo $content->rating; ?>"></span></div>
<?php if ( $content->asin ) : ?>
<div class="asin meta">
	<a href="http://www.amazon.ca/dp/<?php echo $content->asin; ?>">
		<abbr title="Amazon Standard Identification Number">ASIN</abbr> <?php echo $content->asin; ?>
	</a>
</div>
<?php endif; ?>

<?php
echo $theme->area('post_header');
echo $content->content_out;
echo $theme->area('post_comments_header');
echo $theme->content($content, 'comments');
echo $theme->area('post_footer');
?>

