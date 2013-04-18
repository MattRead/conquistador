<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<?php echo $theme->content($content, 'head'); ?>
<?php echo $content->content_out; ?>
<?php echo $theme->area('split'); ?>
<?php echo $theme->content($content, 'comments'); ?>
<?php echo $theme->area('foot'); ?>

