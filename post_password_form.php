<p>
<?php _e('This post is password protected. Please enter the password to view the post.', 'postpass'); ?>
</p>

<form method="post" action="">
<p>
	<label>
	Password:
	<input type="text" name="post_password">
	</label>
</p>
<p>
	<input type="hidden" name="post_password_id" value="<?php echo $post->id; ?>">
	<input type="submit" value="submit">
</p>

</form>
