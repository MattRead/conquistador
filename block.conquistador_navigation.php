<?php //namespace Habari; ?>
<nav>
	<p class="meta">
		<?php if ( isset($next) && $next ) : ?>
		<a href="<?php echo $next->permalink; ?>" title="<?php echo htmlentities($next->title); ?>">&larr; Next Post</a> &nbsp;|&nbsp;
		<?php endif; ?>
		<?php if ( isset($previous) && $previous ) : ?>
		<a href="<?php echo $previous->permalink; ?>" title="<?php echo htmlentities($previous->title); ?>">Previous Post &rarr;</a>
		<?php endif; ?>
	</p>
</nav>
