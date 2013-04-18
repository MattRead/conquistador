<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<span class="meta">By <?php echo $content->author->displayname; ?>,</span>
		<time datetime="<?php echo $content->pubdate->format('c'); ?>">
			<?php echo $content->pubdate_out; ?>
		</time>
	</p><p>&#x2766;</p>
</header>

<div class="rating"><span class="star-<?php echo $content->rating; ?>"></span></div>
<?php if ( $content->asin ) : ?>
<div class="asin meta">
	<a href="http://www.amazon.ca/dp/<?php echo $content->asin; ?>">
		<abbr title="Amazon Standard Identification Number">ASIN</abbr> <?php echo $content->asin; ?>
	</a>
</div>
<?php endif; ?>

