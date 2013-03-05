<?php namespace Habari; ?>
<?php $theme->set_title('Page Not Found'); echo $theme->display('header'); ?>

<article>
    <header>
	<h1>Page Not Found</h1>
    <p class="meta">Status 404</p>
    </header>
	<p style="text-align:center">
		<q cite="http://en.wikipedia.org/wiki/Marvin_the_Paranoid_Android">Funny, how just when you think life can't possibly get any worse it suddenly does.</q><br>
		<img style="border:none; box-shadow:none;" src="<?php Site::out_url('theme') ?>/images/marvin.jpg">
	</p>
</article>

<?php echo $theme->display('footer'); ?>
