<?php $filter = ($theme->has_context('list')) ? 'short' : 'out'; ?>
<meta itemprop="datePublished" content="<?php echo $content->pubdate_iso; ?>">
<time itemprop="dateModified" datetime="<?php echo $content->modified_iso; ?>">
	<?php echo ($filter == 'out') ? 'Updated ' : '', $content->{"modified_$filter"}; ?>
</time>
