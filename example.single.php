<!DOCTYPE html> 
<html> 
<title><?php echo $post->title; ?></title> 
<link type="text/css" media="screen" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,300italic,400italic,600italic|Source+Code+Pro">
<style>
body {
    margin: 0;
    padding: 1em 5em;
    font: 300 20px/1.5 'Source Sans Pro', sans-serif;
    word-spacing: 0.1em;
    color: #222;
    word-wrap: break-word;
    background: #fcfcfc url('<?php Site::out_url('theme'); ?>/images/back.png') repeat;
}
h1,h2,h3,h4,h5 { font-family: 'Source Sans Pro', sans-serif; font-weight: normal; }
</style>

<?php echo $post->content; ?>

</html>
