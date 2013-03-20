<?php //namespace Habari; ?>
<?php if ( $post->content_type == Post::type('entry') ) : ?>
<nav>
	<p class="meta tags">
		<?php if ( isset($post) && count((array)$post->tags) ) : ?>
		Tags: <?php echo $post->tags_out; ?>
		<?php endif; ?>
	</p>
</nav>
<?php endif; ?>
