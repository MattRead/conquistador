<?php //namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>">
<?php echo $theme->content( $content, 'pubdate' ); ?>
<a href="<?php echo $content->permalink; ?>" title="Example: <?php echo $content->title_out; ?>"><?php echo $content->title_out; ?></a>
<i class="icon-file"></i>
</li>
