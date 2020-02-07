<?php if ( !defined( 'HABARI_PATH' ) ) { die( 'No direct access' ); } ?>
<?php if ($content->_show_title) : ?>
<h2>
	<?php echo $content->title ?>
</h2>
<?php endif; ?>
<ul class="posts left" id="recent_comments">
	<?php $comments = $content->recent_comments; foreach( $comments as $comment): ?>
	<li>
		<?php echo $theme->content($comment, 'icon'); ?>
		<?php echo $theme->comment_author_link($comment); ?>
		on
		<a href="<?php echo $comment->post->permalink; ?>">
			<?php echo $comment->post->title; ?>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
