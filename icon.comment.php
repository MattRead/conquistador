<?php
switch ( $content->typename ) {
	case 'comment':
	case 'pingback':
	default:
		$icon = 'bubble2';
		break;
}
?>

<?php if ( $icon ) : ?>
	<i class="icon-<?php echo $icon; ?>" title="Type: <?php echo ucwords($content->typename); ?>"></i>
<?php endif; ?>
