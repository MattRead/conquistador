<div class="social">
	<a href="<?php URL::out('atom_feed', array('index' => '1')); ?>" title="RSS Feed" class="feed"><i
			class="icon-feed3"></i><b>RSS Feed</b></a>
	<?php foreach ($content->social_media_icons as $name => $media) : list($key, $url, $label) = $media; ?>
		<a href="<?php echo $url; ?>" title="<?php echo $label; ?>" class="<?php echo $name; ?>">
			<i class="icon-<?php echo $key; ?>"></i><b><?php echo $name; ?></b></a>
	<?php endforeach; ?>
</div>

