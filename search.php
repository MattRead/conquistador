<?php $theme->display('header'); ?>

    <h1>
		 Search - <small>"<?php echo $criteria; ?>"</small><?php if ($page > 1) : ?>, Page <?php echo htmlspecialchars($page); ?><?php endif; ?>
    </h1>

	<form method="get" id="searchform" action="http://mattread.com/search">
		<p>
			<input type="text" id="s" name="criteria" value="<?php echo $criteria; ?>"><input type="submit" id="searchsubmit" value="Search">
		</p>
	</form>

	<?php if( count($posts) ) : ?>
	<ul class="posts">
		<?php 
		foreach ($posts as $post) {
			echo $theme->content($post, 'list');
		}
		?>
	</ul>
	<?php else : ?>
	<p>Your search - <b><?php echo $criteria; ?></b> - did not match any documents.
	<p>Suggestions:</p>
	<ul>
		<li>Make sure all words are spelled correctly.</li>
		<li>Try different keywords.</li>
		<li>Try more general keywords.</li>
	</ul>
	<?php endif; ?>

<?php echo $theme->paged_nav(); ?>

<?php $theme->display('footer'); ?>

