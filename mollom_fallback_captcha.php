<?php $theme->display('header'); ?>
	<header>
		<h1>OOPS! That looks like Spam.</h1>
		<p><span class="meta">We need to verify you're human</span></p>
	</header>

	<p>Your comment did not pass our spam filter. Please enter the text you see in the image below to verify you are human and your comment is valid.</p>

	<?php  if ( Session::has_messages() ) { Session::messages_out(); } ?>
	<form method="post" action="<?php URL::out( 'mollom_fallback', array( 'fallback' => 'captcha' ) ); ?>">
		<p>
			<?php echo $theme->captcha['html']; ?><br>
			<label>Type the Letter Above
			<input type="text" name="mollom_captcha" id="mollom_captcha" /></label>
		</p>
		<p><input type="submit" value="Submit" /></p>
	</form>
<?php $theme->display('footer'); ?>
