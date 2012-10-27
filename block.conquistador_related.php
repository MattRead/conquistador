<?php if (count($related_posts)) : ?>
    <section>
        <h2>Related Posts</h2>

        <ul class="posts">
            <?php
            foreach ($related_posts as $post) {
                echo $theme->content($post, 'list');
            }
            ?>
        </ul>
    </section>
<?php endif; ?>
