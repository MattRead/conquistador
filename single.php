<?php
$theme->display('header');
echo $theme->content($post, 'admin');
echo $theme->content($post);
$theme->display('footer');
?>
