<?php //namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>" itemscope
    itemtype="http://schema.org/Review">
	<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
	<?php echo $theme->content($content, 'pubdate'); ?>
	<span itemprop="itemreviewed">
		<a href="<?php echo $content->permalink; ?>" itemprop="url"
	        	title="Review: <?php echo $content->title_out; ?>"><?php echo $content->title_out; ?></a>
		<?php echo $theme->content($content, 'icon'); ?>
	</span>
	<?php if ( $content->comment_count ) : ?>
                <a class="comment-count" href="<?php echo $content->permalink; ?>#comments"
                        title="<?php echo $content->comment_count, ' ', _n('Comment', 'Comments', $content->comment_count, 'conquistador'); ?>">
                        <span class="icon-bubble"></span> <?php echo $content->comment_count; ?>
                </a>
        <?php endif; ?>
<span class="rating" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
	<meta itemprop="worstRating" content="1">
	<meta itemprop="bestRating" content="5">
	<meta itemprop="ratingValue" content="<?php echo $content->rating; ?>">
</span>
<span itemprop="author" itemscope itemtype="http://schema.org/Person">
	<meta itemprop="name" content="<?php echo $content->author->displayname; ?>">
</span>
</li>
