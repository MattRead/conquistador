<?php //namespace Habari; ?>
<?php if ( isset($post) && $post->content_type == Post::type('entry') ) : ?>
<nav>
	<p class="meta tags">
		<?php if ( count((array)$post->tags) ) : ?>
		Tags: <?php echo $post->tags_out; ?>
		<?php endif; ?>
	</p>
</nav>
<?php endif; ?>
