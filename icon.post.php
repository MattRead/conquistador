<?php
switch ( $content->typename ) {
	case 'blogroll':
	case 'link':
		$icon = 'bookmark';
		break;
	case 'project':
		$icon = 'stack';
		break;
	case 'event':
		$icon = 'calendar';
		break;
	case 'example':
		$icon = 'info';
		break;
	case 'code':
		$icon = 'code';
		break;
	case 'review':
		$icon = 'star';
		break;
	case 'book':
		$icon = 'book';
		break;
	case 'audio':
	case 'music':
		$icon = 'music';
		break;
	case 'image':
	case 'picture':
		$icon = 'camera';
		break;
	case 'video':
	case 'movie':
		$icon = 'camera-2';
		break;
	case 'product':
		$icon = 'cart';
		break;
	case 'recipe':
		$icon = 'food';
		break;
	case 'podcast':
		$icon = 'podcast';
		break;
	case 'download':
		$icon = 'box-add';
		break;
	case 'person':
		$icon = 'user';
		break;
	case 'page':
		$icon = 'file2';
		break;
	case 'comment':
	case 'pingback':
		$icon = 'bubble';
		break;
	case 'entry':
	default:
		$icon = 'blog';
		break;
}
?>

<?php if ( $icon ) : ?>
	<i class="icon-<?php echo $icon; ?>" title="Type: <?php echo ucwords($content->typename); ?>"></i>
<?php endif; ?>
