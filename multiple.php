
<?php //namespace Habari; ?>
<?php $theme->display('header'); ?>

<h1>
	<?php Options::out('title'); ?><?php if ($page > 1) : ?>, Page <?php echo htmlspecialchars($page); ?><?php endif; ?>
</h1>

<?php echo $theme->content($posts, 'list'); ?>
<?php $theme->display('footer'); ?>

