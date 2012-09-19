<?php include 'header.php'; ?>

	<header>
        <h1>The Archives</h1>
    <nav class="paged-nav" style="clear:left;">
        <ul class="nav">
        <?php foreach ( $collection_years as $collection_year ) : ?>
            <?php if ($year == $collection_year->year): ?>
                <?php echo $collection_year->year; ?> &nbsp;
            <?php else: ?>
                <a href="/archives/<?php echo $collection_year->year; ?>"><?php echo $collection_year->year; ?></a> &nbsp;
            <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </nav>

	</header>

	<?php foreach ( $collections as $collection ) : ?>

	<?php if ( $collection->start_month->int > time() || !$collection->posts ) continue; ?>
	<section>
	<h2>The <?php echo $collection->name; ?> Collection</h2>
	<p class="meta">Posts made from <?php echo $collection->description; ?><img src="/user/themes/greeny/images/archives/<?php echo $collection->image; ?>" class="right"></p>

	<ul class="posts">
		<?php if ( $collection->posts ) { foreach ( $collection->posts as $post ) { ?>
		<?php echo $theme->content($post, 'list'); ?>
		<?php } } else { echo '<li>No entries made during this period.</li>'; } ?>
	</ul>
	
	</section>

	<hr style="clear:both;" />

	<?php endforeach; ?>
	
	<nav class="paged-nav" style="clear:left;">
		<ul class="nav">
		<?php foreach ( $collection_years as $collection_year ) : ?>
			<?php if ($year == $collection_year->year): ?>
				<?php echo $collection_year->year; ?> &nbsp;
			<?php else: ?>
				<a href="/archives/<?php echo $collection_year->year; ?>"><?php echo $collection_year->year; ?></a> &nbsp;
			<?php endif; ?>
		<?php endforeach; ?>
		</ul>
	</nav>
	
	<footer class="meta" style="margin-top:2em;">inspired by the archives at <a href="http://www.mezzoblue.com/" title="mezzoblue: the home of Dave Shea.">mezzoblue</a></footer>


<?php include 'footer.php'; ?>
