<?php //namespace Habari; ?>
	<article id="comment-<?php echo $content->id; ?>" class="comment type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?> <?php echo ($content->post->author->email == $content->email) ? 'author-comment' : ''; ?>">
		<?php echo $theme->content($content, 'admin'); ?>
		<header>
		<p>
			<img class="gravatar" src="http://www.gravatar.com/avatar/<?php echo md5(strtolower($content->email)); ?>?d=identicon&s=60&r=g" alt="Gravatar for <?php echo $content->name; ?>">
			<?php echo $theme->comment_author_link( $content ); ?>
				<small>(<a href="#comment-<?php echo $content->id; ?>" title="Permanent link to this comment">#<?php echo $content->id; ?></a>)</small><br>
			<time datetime="<?php echo $content->date->format('c'); ?>"><?php echo $content->date_out; ?></time>
		</p>
		</header>

		<?php if ( $content->status == Comment::STATUS_UNAPPROVED ) : ?>
			<p><em>This comment is awaiting moderation; a summary follows:</em></p>
			<?php echo Format::summarize($content->content_out, 20); ?>
		<?php else : ?>
			<?php echo $content->content_out; ?>
		<?php endif; ?>
	</article>
