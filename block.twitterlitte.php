<?php if ( count( $content->tweets ) ): ?>
<ul id="twitter_litte">
	<?php foreach ( $content->tweets as $tweet ): ?>
	<li class="twitter-message">
	<time datetime="<?php echo $tweet->created_at; ?>">
		<a href="<?php echo $tweet->url; ?>" class="meta"><?php echo HabariDateTime::date_create($tweet->created_at)->format('l, F jS Y'); ?></a>
	</time><br>
	<?php echo $tweet->message_out; ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>
