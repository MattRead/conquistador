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
	</p><p>&#x2766;</p>
</header>
<div itemprop="articleBody">
<table class="center">
<tr><th>Date<td><?php echo $post->info->eventdate_out; ?> at <?php echo $post->info->eventtime_out; ?>
<tr><th>Location<td><?php echo $post->info->location; ?>
</table>

<?php echo $post->content_out; ?>

<h2>Map</h2>

<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="https://maps.google.com/maps?q=<?php echo $post->info->location; ?>&amp;source=embed&amp;output=svembed"></iframe>
<br>
<small><a href="https://maps.google.com/maps?q=<?php echo $post->info->location; ?>&amp;source=embed">View Larger Map</a></small>

</div>
<?php echo $theme->area('split'); ?>
<?php echo $theme->content($post, 'comments'); ?>
</div>
<?php echo $theme->area('foot'); ?>

<?php $theme->display('footer'); ?>
