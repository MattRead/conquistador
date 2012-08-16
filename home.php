<?php $theme->display('header'); ?>

	<h1>
		Weblog Entries<?php if (isset($tag)) : ?> Tagged As "<?php echo htmlspecialchars( $tag ); ?>"<?php endif; ?><?php if ($page > 1) : ?>, Page <?php echo htmlspecialchars($page); ?><?php endif; ?>
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

