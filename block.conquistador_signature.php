    <address>
        <?php echo $content->author_name; ?> &lt;<?php echo $content->author_email; ?>&gt;
    </address>
    <div class="social">
        <a href="<?php URL::out( 'atom_feed', array('index' => '1') ); ?>" title="RSS Feed" class="rss">r</a>
        <?php foreach( $content->social_media_icons as $name => $media) : list($key, $url, $label) = $media; ?>
            <a href="<?php echo $url; ?>" title="<?php echo $label; ?>"
            class="<?php echo $name; ?>"><?php echo $key; ?></a>
        <?php endforeach; ?>
    </div>

