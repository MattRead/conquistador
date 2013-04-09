<?php namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
<time datetime="<?php echo $content->modified->format('c'); ?>">
	&harr; <?php echo $content->modified_out_short; ?>
</time>
<span><a href="<?php echo $content->permalink; ?>" rel="<?php echo $content->realtionship; ?>"><?php echo $content->title_out; ?></a>
<span class="meta"><?php echo $content->xfn_relationships; ?></span></span>
</li>
