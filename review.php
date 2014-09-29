<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<div itemscope itemtype="http://schema.org/Review">
	<header id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
		<h1 itemprop="itemreviewed"><?php echo $content->title_out; ?></h1>
		<meta content="<?php echo $content->permalink; ?>" itemprop="url">
		<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
		<p>
			<?php echo $theme->content($content, 'pubdate'); ?>
		</p>
		<p itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="rating">
			<meta itemprop="worstRating" content="1">
			<meta itemprop="bestRating" content="5">
			<meta itemprop="ratingValue" content="<?php echo $content->rating; ?>">
			<?php echo str_repeat('<i class="icon-star3"></i>', $content->rating);
			echo str_repeat('<i class="icon-star3 blank"></i>', 5 - $content->rating); ?>
		</p>
		<?php if ($content->asin) : ?>
		<p class="asin">
			<a href="http://www.amazon.ca/dp/<?php echo $content->asin; ?>">
				<abbr title="Amazon Standard Identification Number">ASIN</abbr> <?php echo $content->asin; ?>
			</a>
		</p>
		<?php endif; ?>
	</header>

	<div itemprop="reviewBody">
		<?php echo $content->content_out; ?>
	</div>

	<?php echo $theme->area('split', 'single'); ?>
	<?php echo $theme->content($content, 'comments'); ?>
</div>
<?php echo $theme->area('foot'); ?>

