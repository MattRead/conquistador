<?php namespace Habari; ?>
<footer>
	<address>
		<?php echo $author_name; ?> &lt;<?php echo $author_email; ?>&gt;
	</address>
	<div class="social">
		<a href="/atom.xml" title="RSS Feed" class="rss">r</a>
		<?php foreach( $social_media_icons as $name => $media) : list($key, $url, $label) = $media; ?>
			<a href="<?php echo $url; ?>" title="<?php echo $label; ?>"
			class="<?php echo $name; ?>"><?php echo $key; ?></a>
		<?php endforeach; ?>
	</div>
	<p>
		<a href="#top">&uarr; Back to top</a><br>
		Copyright &copy; <?php echo $copy_year; ?> <?php echo $author_name; ?>
	</p>

	<?php echo $theme->footer(); ?>
</footer>
</body>
</html>
