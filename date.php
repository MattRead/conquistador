<?php $theme->display('header'); ?>

    <h1>
		 Posts From <?php echo $date; ?><?php if ($page > 1) : ?>, Page <?php echo htmlspecialchars($page); ?><?php endif; ?>
    </h1>

	<ul class="posts">
		<?php 
		foreach ($posts as $post) {
			echo $theme->content($post, 'list');
		}
		?>
	</ul>

<?php echo $theme->paged_nav(); ?>
<?php $theme->display('footer'); ?>

