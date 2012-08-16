<li id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?> <?php echo implode(' ', array_map(function($a){return 'tag-'.$a->term;}, $content->tags->getArrayCopy())); ?>">
<time datetime="<?php echo $content->pubdate->format('c'); ?>">
    <?php echo $content->pubdate_out_short; ?>
</time>
<a href="<?php echo $content->permalink; ?>"><?php echo $content->title_out; ?></a>
</li>
