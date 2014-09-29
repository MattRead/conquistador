<?php if ( isset($post) && $post->content_type != Post::type('page') ) : ?>
<p class="meta"><?php echo $post->title_out; ?> was written by
	<span itemprop="author" itemscope itemtype="http://schema.org/Person">
	    <span itemprop="name">
	    <?php if ( $post->author->permalink ) : ?>
	            <a href="<?php echo $post->author->permalink; ?>"><?php echo $post->author->displayname; ?></a>.
	    <?php else : ?>
	            <?php echo $post->author->displayname; ?>.
	    <?php endif; ?>
	    </span>
		<img itemprop="image"
			alt="Gravatar for <?php echo htmlentities($post->author->displayname); ?>"
			src="//www.gravatar.com/avatar/<?php echo md5(strtolower($post->author->email)); ?>?d=mm&amp;s=60&amp;r=g"
			class="gravatar">
		<?php echo $post->author->info->description; ?>
	</span>
</p>

<?php endif; ?>
