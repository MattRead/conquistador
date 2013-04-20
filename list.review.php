<?php namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
<time datetime="<?php echo $content->pubdate_short; ?>">
    <?php echo $content->pubdate_short; ?>
</time>
<a href="<?php echo $content->permalink; ?>"><?php echo $content->title_out; ?></a><br>
<span class="rating"><?php echo str_repeat( '&#9733;', $content->rating ); echo str_repeat( '&#9734;', 5 - $content->rating ); ?></span>
</li>
