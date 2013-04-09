<?php namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
<time datetime="<?php echo $content->modified->format('c'); ?>">
    <?php echo $content->modified_out_short; ?>
</time>
<span><a href="<?php echo $content->permalink; ?>"><?php echo $content->title_out; ?></a></span>
</li>
