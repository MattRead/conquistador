<?php //namespace Habari; ?>
<li id="post-<?php echo $content->id; ?>" class="<?php echo $content->css_class(); ?>" itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting">
<meta itemprop="interactionCount" content="UserComments:<?php echo $content->comments->moderated->count; ?>">
<?php echo $theme->content( $content, 'pubdate' ); ?>
<span itemprop="name"><a href="<?php echo $content->permalink; ?>" itemprop="url" title="Post: <?php echo $content->title_out; ?>"><?php echo $content->title_out; ?></a></span>
<span itemprop="author" itemscope itemtype="http://schema.org/Person">
	<meta itemprop="name" content="<?php echo $content->author->displayname; ?>">
</span>
</li>
