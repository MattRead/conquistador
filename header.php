<!DOCTYPE html>
<html lang="en-ca">

<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="generator" content="Habari <?php echo Version::get_habariversion() ?>">
	<meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">

	<!--[if lte IE 8]>
	<script src="<?php Site::out_url('theme') ?>/js/ie.js"></script>
	<![endif]-->
	<?php echo $theme->header(); ?>
	<?php echo $custom_headers; ?>
</head>
<body>

<nav class="site" id="top" style="position:relative">
	<?php echo $theme->area('site_navigation'); ?>
	<!--<span class="stub"> : /<?php echo Controller::get_stub(); ?></span>-->
</nav>

