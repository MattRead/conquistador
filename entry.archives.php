<?php //namespace Habari; ?>
<?php $theme->display('header'); ?>
<?php echo $theme->area('head'); ?>
<header>
	<h1>The Archives</h1>
    <p><time>Posts made from <?php echo $min_year; ?> to <?php echo $max_year; ?></time></p>
</header>

<?php foreach ( $collections as $collection ) : ?>

<section>
<h2>The <?php echo $collection->name; ?> Collection</h2>

<ul class="posts">
	<?php foreach ( $collection->posts as $post ) : ?>
	<?php echo $theme->content($post, 'list'); ?>
	<?php endforeach; ?>
</ul>
</section>

<?php endforeach; ?>

<footer class="meta" style="margin-top:3em; clear: both;">inspired by the archives at <a href="http://www.mezzoblue.com/" title="mezzoblue: the home of Dave Shea.">mezzoblue</a></footer>
<?php echo $theme->area('split'); ?>
<?php echo $theme->area('foot'); ?>
<?php $theme->display('footer'); ?>
