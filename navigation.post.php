<nav>
<?php if ( isset($next) && $next ) : ?>
<a href="<?php echo $next->permalink; ?>" title="<?php echo $next->title; ?>">&larr; Next Post</a> &nbsp;|&nbsp;
<?php endif; ?>
<?php if ( isset($previous) && $previous ) : ?>
<a href="<?php echo $previous->permalink; ?>" title="<?php echo $previous->title; ?>"">Previous Post &rarr;</a>
<?php endif; ?>
</nav>
