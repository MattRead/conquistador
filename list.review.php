<?php //namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>" itemscope itemtype="http://schema.org/Review">
<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
<?php echo $theme->content( $content, 'pubdate' ); ?>
<span itemprop="itemreviewed"><a href="<?php echo $content->permalink; ?>" itemprop="url"><?php echo $content->title_out; ?></a></span><br>
<span class="meta">Rating:</span>
<span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="rating">
	<meta itemprop="worstRating" content = "1">
	<meta itemprop="bestRating" content="5">
	<meta itemprop="ratingValue" content="<?php echo $content->rating; ?>">
	<?php echo str_repeat( '&#9733;', $content->rating ); echo str_repeat( '&#9734;', 5 - $content->rating ); ?>
</span>
<span itemprop="author" itemscope itemtype="http://schema.org/Person">
	<meta itemprop="name" content="<?php echo $content->author->displayname; ?>">
</span>
</li>
