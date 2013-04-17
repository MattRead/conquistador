<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<?php echo $theme->content($content, 'head'); ?>
<?php echo $content->content_out; ?>
<div><p class="author meta">&mdash; By <a href="https://plus.google.com/108587268856593448663?rel=author">Matt Read</a></p></div>
<?php echo $theme->area('split'); ?>
<?php echo $theme->content($content, 'comments'); ?>
<?php echo $theme->area('foot'); ?>

