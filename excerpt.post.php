<?php //namespace Habari; ?>
<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
	<h2 id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>" itemprop="name">
		<a itemprop="url" href="<?php echo $content->permalink; ?>"><?php echo $content->title_out; ?></a>
	</h2>
	<p class="meta">
		By <span itemprop="author" itemscope itemtype="http://schema.org/Person"><span
				itemprop="name"><?php echo $content->author->displayname; ?></span></span>,
		<?php echo $theme->content($content, 'pubdate'); ?>
		<?php if ($content->comments->moderated->count) : ?>
			<a itemprop="interactionCount" class="comment-count" href="<?php echo $content->permalink; ?>#comments"
			   title="<?php echo $content->comments->moderated->count, ' ', _n('Comment', 'Comments', $content->comments->moderated->count, 'conquistador'); ?>">
				<span class="icon-bubble"></span> <?php echo $content->comment_count; ?>
			</a>
		<?php endif; ?>
	</p>
	</header>
	<div itemprop="articleBody">
		<?php echo $content->excerpt; ?>
	</div>
</article>

