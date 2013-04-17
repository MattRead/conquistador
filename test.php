<pre>

<?php

$data = file_get_contents('https://api.github.com/repos/subtlepatterns/SubtlePatterns/contents/');
$json = json_decode($data);
foreach ( $json as $pattern ) {
	if ( strpos($pattern->name, '.png') !== false ) {
		$arr[$pattern->name] = $pattern->_links->self;
		$dat = json_decode(file_get_contents($pattern->_links->self));
		$image = $dat->content;
		if ($dat->encoding == 'base64') {
			$image_raw = base64_decode($image);
		}
		echo $pattern->name, ': <img src="data:image/png;base64,', $image, '" />', "\n";
	}
}
