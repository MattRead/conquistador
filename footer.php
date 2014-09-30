<?php //namespace Habari; ?>
<footer>
	<div id="totop"></div>
	<?php echo $theme->area('site_footer'); ?>
	<?php echo $theme->footer(); ?>
</footer>
<?php if (Session::has_messages()) Session::messages_out();?>
</div></body>
</html>
