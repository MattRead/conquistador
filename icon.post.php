<?php
switch ($content->typename) {
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
		$icon = 'star3';
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
	default:
		$icon = false;
		break;
}
?>

<?php if ( $content->typename == 'review' ) : ?>
	<?php echo str_repeat('<i class="icon-'. $icon .'"></i>', $content->rating); ?>
<?php elseif ( $icon ) : ?>
	<i class="icon-<?php echo $icon; ?>"></i>
<?php endif; ?>
