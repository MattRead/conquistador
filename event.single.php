<?php $theme->display('header'); ?>
<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<div itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
	<header id="post-<?php echo $post->id; ?>" class="<?php echo $post->css_class(); ?>">
		<h1 itemprop="name"><?php echo $post->title_out; ?></h1>
		<meta content="<?php echo $post->permalink; ?>" itemprop="url">
		<meta itemprop="interactionCount" content="UserComments:<?php echo $post->comments->moderated->count; ?>">
		<p>
			<?php echo $theme->content($post, 'pubdate'); ?>
		</p>

		<p>&#x2766;</p>
	</header>

	<div itemprop="articleBody">
		<?php echo $post->content_out; ?>

		<div class="bar darkblue">
			<div class="center">
				<h4><?php echo $post->info->eventdate_out; ?> at <?php echo $post->info->eventtime_out; ?></h4>

				<p>At <?php echo $post->info->location; ?></p>
			</div>
		</div>
		<div class="bar orange">
			<iframe height="300" style="width: 100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
			        src="https://maps.google.com/maps?q=<?php echo $post->info->location; ?>&amp;source=embed&amp;output=svembed"></iframe>
		</div>

	</div>
	<?php echo $theme->area('split'); ?>
	<?php echo $theme->content($post, 'comments'); ?>
</div>
<?php echo $theme->area('foot'); ?>

<?php $theme->display('footer'); ?>
