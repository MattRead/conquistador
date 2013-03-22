<?php $theme->display('header'); ?>
<?php echo $theme->area('head'); ?>

<h1>
	Tagged "<?php echo htmlspecialchars( $tag ); ?>"<?php if ($page > 1) : ?>, Page <?php echo htmlspecialchars($page); ?><?php endif; ?>
</h1>

<?php echo $theme->content($posts, 'list'); ?>
<?php echo $theme->paged_nav(); ?>
<?php echo $theme->area('split'); ?>

<p class="meta" style="margin-top:4em;">
	You can also find additional Posts by browsing through all the tags used on this site:<br>
	<?php echo $tags; ?>
</p>

<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>

