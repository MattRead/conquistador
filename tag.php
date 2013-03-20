<?php $theme->display('header'); ?>

    <h1>
		 Posts Tagged As "<?php echo htmlspecialchars( $tag ); ?>"<?php if ($page > 1) : ?>, Page <?php echo htmlspecialchars($page); ?><?php endif; ?>
    </h1>

	<ul class="posts">
		<?php 
		foreach ($posts as $post) {
			echo $theme->content($post, 'list');
		}
		?>
	</ul>

<?php echo $theme->paged_nav(); ?>

	<?php $tags = Tags::get_by_frequency(null, Post::type('entry'));?>
	<p class="meta" style="margin-top:4em;">
		You can also find additional Posts by browsing through all the tags used on this site:<br>
		<?php echo Format::tag_and_list($tags); ?>
	</p>

<?php $theme->display('footer'); ?>

