        <article id="comment-<?php echo $content->id; ?>" class="comment type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
            <p>
                <a href="<?php echo $content->url; ?>" rel="external">
                    <?php echo $content->name != NULL ? $content->name : $content->url; ?>
                </a>,
                <time class="meta" datetime="<?php echo $content->date->format('c'); ?>"><?php echo $content->date_out; ?></time>
            </p>
        </article>


