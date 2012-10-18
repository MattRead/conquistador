<!DOCTYPE html>
<html lang="en-ca">

<head>
	<title><?php echo $title; ?></title>
	<meta http-equiv="PICS-Label" content="(PICS-1.1 'http://www.classify.org/safesurf/' L gen true for 'http://mattread.com/' r (SS~~000 5 SS~~001 6 SS~~002 5 SS~~005 4 SS~~008 6 SS~~009 2))">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="generator" content="Habari <?php echo Version::get_habariversion() ?>">
	<meta name="description" content="<?php echo $tagline; ?>">
	<meta name="keywords" content="habari wordpress technology tech css design website php plugin matt">
	<meta name="verify-v1" content="xSimSi8n9M7MqFEaRhgNt3smByGje0Iki3S45666/jQ=">

    <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0">

	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="Shortcut Icon" href="/favicon.ico">

    <link rel="license" title="license" href="http://creativecommons.org/licenses/by-sa/2.5/ca/">

	<!--[if lte IE 8]>
	<script src="<?php Site::out_url('theme') ?>/js/ie.js"></script>
	<![endif]-->
    <?php echo $theme->header(); ?>
</head>
<body>

<nav class="site" id="top" style="position:relative">
    &#x26B6; <a class="home" href="<?php Site::out_url('habari'); ?>/">Home</a> |
    <a href="<?php Site::out_url('habari'); ?>/about">About</a> |
    <a href="<?php Site::out_url('habari'); ?>/blogroll">Blogroll</a>
    <span class="stub"> : /<?php echo Controller::get_stub(); ?></span>

</nav>

