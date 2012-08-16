<section id="jambo">
<form method="post" action="<?php echo $jambo->form_action; ?>" id="comment-public">
	
	<?php if ( $jambo->success ) { ?>
		<ul class="messages success">
			<li><?php echo $jambo->success_msg; ?></li>
		</ul>
	<?php } ?>
	
	<?php if ( $jambo->error ) { ?>
			<ul class="messages error">
				<li><?php echo $jambo->error_msg; ?></li>
			<?php foreach ( $jambo->errors as $jambo_error ) { ?>
				<li><?php echo $jambo_error; ?></li>
			<?php } ?>
			</ul>
	<?php } ?>
	
	<?php if ( $jambo->show_form ) { ?>
		<label>
			Your Name: (required)
			<?php echo $jambo->name; ?>
		</label>
		<label>
			Your Email: (required)
			<?php echo $jambo->email; ?>
		</label>
		<label>
			Subject: (optional)
			<?php echo $jambo->subject; ?>
		</label>
		<label>
			Your Remarks: (required)
			<?php echo $jambo->message; ?>
		</label>
		<?php echo $jambo->osa; ?>
		<input type="submit" value="Send It!" name="submit" class="button" />
	<?php } ?>
	
	</form>
</section>
