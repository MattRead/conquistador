<?php if ( !defined( 'HABARI_PATH' ) ) { die( 'No direct access' ); } ?>
<?php if ($content->_show_title) : ?>
<h2>
	<?php echo $content->title ?>
</h2>
<?php endif; ?>
<ul id="recent_comments">
	<?php $comments = $content->recent_comments; foreach( $comments as $comment): ?>
	<li>
		<a href="<?php echo $comment->url ?>">
			<?php echo $comment->name; ?>
		</a> on
		<a href="<?php echo $comment->post->permalink; ?>">
			<?php echo $comment->post->title; ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
