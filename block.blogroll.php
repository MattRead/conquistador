<h2><?php echo $content->list_title; ?></h2>
<p class="meta">The opinions expressed in these site are entirely the responsibility of the various authors.
 While I will do everything within reason to ensure that they are not defamatory, I accept no liability for the content included in them.</p>
<ul class="posts">
	<?php foreach( $content->blogs as $blog ): ?>
		<?php echo $theme->content($blog, 'list'); ?>
	<?php endforeach; ?>
</ul>
