<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
	<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
		<h1 itemprop="name"><?php echo $content->title_out; ?></h1>
		<meta content="<?php echo $content->permalink; ?>" itemprop="url">
		<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
		<p>
			<?php echo $theme->content($content, 'pubdate'); ?>
		</p>
		<p>&#x2766;</p>
	</header>
	<div itemprop="articleBody">
		<?php echo $content->content_out; ?>
	</div>

	<?php echo $theme->area('split', 'single'); ?>
	<?php echo $theme->content($content, 'comments'); ?>
</div>
<?php echo $theme->area('foot', 'single'); ?>

