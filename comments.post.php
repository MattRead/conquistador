<?php //namespace Habari; ?>
<?php if( $content->comments->moderated->count ) : ?>
<section id="comments">
	<h3 id="comments">Comments</h3>
	<p class="meta">The opinions expressed in comments are entirely the responsibility of the various contributors. While I will do everything within reason to ensure that they are not defamatory, I accept no liability for them or the content of links included in them.</p>

	<?php
	foreach ( $content->comments->moderated as $comment ) {
		echo $theme->content($comment);
	}
	?>
</section>
<?php endif; ?>

<?php if ( !$content->info->comments_disabled ) : ?>

<section id="respond" class="comments-form">
	<h3>Leave a Comment</h3>
	<p class="meta">Before leaving a comment, please ensure you have read and understand my <a href="/comments-policy">comments policy</a> and my <a href="/privacy">privacy policy</a>. Any comment that does not abide by the comment policy will be deleted immediately.</p>

	<?php
		//if ( Session::has_messages() ) { Session::messages_out(); }
		$content->comment_form()->out();
	?>
</section>

<?php endif; ?>
