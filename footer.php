<?php //namespace Habari; ?>
<footer>
	<div id="totop"></div>
	<?php echo $theme->area('site_footer'); ?>
	<?php echo $theme->footer(); ?>
	<?php if (Session::has_messages()) Session::messages_out();?>
</footer>
</div></body>
</html>
