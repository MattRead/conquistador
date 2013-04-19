<?php //namespace Habari; ?>
<?php echo $theme->area('head'); ?>
<div itemscope itemtype="http://schema.org/BlogPosting">
<?php echo $theme->content($content, 'head'); ?>
<div itemprop="articleBody">
<?php echo $content->content_out; ?>
</div>
<?php echo $theme->area('split'); ?>
<?php echo $theme->content($content, 'comments'); ?>
</div>
<?php echo $theme->area('foot'); ?>

