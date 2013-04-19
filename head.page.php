<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
	<h1 itemprop="name"><?php echo $content->title_out; ?></h1>
	<meta content="<?php echo $content->permalink; ?>" itemprop="url">
	<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
	<p>
		<span class="meta">By
			<span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $content->author->displayname; ?></span></span>,
		</span>
		<meta itemprop="datePublished" content="<?php echo $content->pubdate_iso; ?>">
		<time itemprop="dateModified" datetime="<?php echo $content->modified_iso; ?>">
			<?php echo $content->modified_out; ?>
		</time>
	</p><p>&#x2766;</p>
</header>
