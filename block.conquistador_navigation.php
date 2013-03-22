<?php //namespace Habari; ?>
<?php if ( isset($content->next) || isset($content->previous) ) : ?>
<nav>
	<p class="meta">
		<?php if ( isset($content->next) && $content->next ) : ?>
		<a href="<?php echo $content->next->permalink; ?>" title="<?php echo htmlentities($content->next->title); ?>">&larr; Next Post</a> &nbsp;|&nbsp;
		<?php endif; ?>
		<?php if ( isset($content->previous) && $content->previous ) : ?>
		<a href="<?php echo $content->previous->permalink; ?>" title="<?php echo htmlentities($content->previous->title); ?>">Previous Post &rarr;</a>
		<?php endif; ?>
	</p>
</nav>
<?php endif; ?>
