<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
	<h1 itemprop="name"><?php echo $content->title_out; ?></h1>
	<meta content="<?php echo $content->permalink; ?>" itemprop="url">
	<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
	<p>
		<span class="meta">By
			<span itemprop="author" itemscope itemtype="http://schema.org/Person"><span itemprop="name"><?php echo $content->author->displayname; ?></span></span>,
		</span>
		<?php echo $theme->content($content, 'pubdate'); ?>
	</p><p>&#x2766;</p>
</header>
<div itemprop="articleBody">
<?php echo $content->content_out; ?>
</div>
<?php echo $theme->area('split'); ?>
<?php echo $theme->content($content, 'comments'); ?>
</div>
<?php echo $theme->area('foot'); ?>

