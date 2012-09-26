<?php echo $theme->content($content, 'admin'); ?>

<header id="post-<?php echo $content->id; ?>" class="post type-<?php echo $content->typename; ?> status-<?php echo $content->statusname; ?>">
	<h1><?php echo $content->title_out; ?></h1>
	<p>
		<time datetime="<?php echo $content->pubdate->format('c'); ?>">
			<?php echo $content->pubdate_out; ?> 
		</time>
	</p>
</header>

<?php echo $content->content_out; ?>

<?php echo $theme->content($content, 'navigation'); ?>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-5873102452276594";
/* Homepage 468x60 */
google_ad_slot = "3997496189";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

<?php echo $theme->content($content, 'comments'); ?>

<?php echo $theme->content($related_posts, 'related'); ?>

