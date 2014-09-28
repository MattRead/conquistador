<?php //namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>" itemprop="blogPost" itemscope
    itemtype="http://schema.org/BlogPosting">
	<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
	<?php echo $theme->content($content, 'pubdate'); ?>
	<span itemprop="name"><a href="<?php echo $content->permalink; ?>" itemprop="url"
	                         title="<?php echo ucwords($content->typename); ?>: <?php echo $content->title_out; ?>">
			<?php echo $content->title_out; ?></a>
		<?php echo $theme->content($content, 'icon'); ?>
	</span>
	<?php if ($content->comments->moderated->count) : ?>
		<a class="comment-count" href="<?php echo $content->permalink; ?>#comments"
		   title="<?php echo $content->comments->moderated->count, ' ', _n('Comment', 'Comments', $content->comments->moderated->count, 'conquistador'); ?>">
			<span class="icon-bubble"></span> <?php echo $content->comment_count; ?>
		</a>
	<?php endif; ?>
	<span itemprop="author" itemscope itemtype="http://schema.org/Person">
	<meta itemprop="name" content="<?php echo $content->author->displayname; ?>">
</span>
</li>
