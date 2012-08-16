<ul class="posts">
	<?php if ( ! empty( $blogs ) ) { foreach( $blogs as $blog ) { ?>
    <?php
    $rel = '';
    if ($blog->info->relationship || $blog->xfn_relationships) {
        $rel = ' rel="' . $blog->info->relationship . ' ' . $blog->xfn_relationships . '"';
    }
    ?>
		<li class="vcard">
            <a href="<?php echo $blog->info->url; ?>" class="url" title="<?php echo $blog->content; ?>"<?php echo $rel; ?>>
                <?php echo $blog->title; ?>
            </a>
        </li>
	<?php } } ?>
</ul>
