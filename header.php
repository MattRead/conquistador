<!DOCTYPE html>
<html lang="en-ca">

<head>
	<title><?php echo $title; ?></title>

	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="generator" content="Habari <?php echo Version::get_habariversion() ?>" />
	<meta name="description" content="<?php echo $tagline; ?>" />
	<meta name="keywords" content="habari wordpress technology tech css design website php plugin matt" />
	<meta name="verify-v1" content="xSimSi8n9M7MqFEaRhgNt3smByGje0Iki3S45666/jQ=" />

	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="Shortcut Icon" href="/favicon.ico" />

    <link rel="license" title="license" href="http://creativecommons.org/licenses/by-sa/2.5/ca/" />

	<!--[if lte IE 8]>
	<script src="<?php Site::out_url('theme') ?>/js/ie.js"></script>
	<![endif]-->
    <link type="text/css" media="print" rel="stylesheet" href="<?php Site::out_url('theme') ?>/css/print.css">
    <?php echo $theme->header(); ?>
</head>
<body>

<nav class="site" id="top" style="position:relative">
    &#x26B6; <a class="home" href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/blogroll">Blogroll</a> :
    /<?php echo Controller::get_stub(); ?>

</nav>
   
