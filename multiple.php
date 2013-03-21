
<?php //namespace Habari; ?>
<?php $theme->display('header'); ?>
<?php echo $theme->area('head'); ?>
<h1>
	<?php Options::out('title'); ?><?php if ($page > 1) : ?>, Page <?php echo htmlspecialchars($page); ?><?php endif; ?>
</h1>

<?php echo $theme->content($posts, 'list'); ?>
<?php echo $theme->area('split'); ?>
<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>
