<?php //namespace Habari; ?>
<?php if ( isset($content->next) || isset($content->previous) ) : ?>
<nav class="posts">
	<p class="meta">
		<?php if (isset($content->next) && $content->next) : ?>
			<a href="<?php echo $content->next->permalink; ?>"
			   title="<?php echo htmlentities($content->next->title); ?>"><i class="icon-arrow-left2"></i> Next Post</a> &nbsp;|&nbsp;
		<?php endif; ?>
		<?php if (isset($content->previous) && $content->previous) : ?>
			<a href="<?php echo $content->previous->permalink; ?>"
			   title="<?php echo htmlentities($content->previous->title); ?>">Previous Post <i
					class="icon-arrow-right2"></i></a>
		<?php endif; ?>
	</p>
</nav>
<?php endif; ?>
