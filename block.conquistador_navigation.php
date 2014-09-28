<?php //namespace Habari; ?>
<?php if (isset($content->next) || isset($content->previous) || isset($content->comments_disabled)) : ?>
	<nav class="posts">
		<p class="meta">
			<?php if ($content->comment_count): ?>
				<a href="#comments" title="Read Comments"><i class="icon-"></i> <?php echo $content->comment_count; ?>
					Comments</a> &nbsp;|&nbsp;
			<?php endif; ?>
			<?php if (isset($content->comments_disabled) && !$content->comments_disabled) : ?>
				<a href="#respond" title="Leave a Comment"><i class="icon-"></i> Leave a Comment</a>
			<?php endif; ?>
			<?php if ((isset($content->comments_disabled) && !$content->comments_disabled) || $content->comment_count) : ?>
				<br>
			<?php endif; ?>
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
