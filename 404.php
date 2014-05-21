<?php //namespace Habari; ?>
<?php $theme->set_title('Page Not Found');
echo $theme->display('header'); ?>

<article>
	<header>
		<h1>Page Not Found</h1>
	</header>
	<p style="text-align:center">Something has gone <b>horribly</b> wrong!</p>
</article>

<?php echo $theme->display('footer'); ?>
