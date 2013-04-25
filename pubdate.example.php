<?php $filter = ( $theme->has_context('list') ) ? 'short' : 'out'; ?>
<time itemprop="dateModified" datetime="<?php echo $content->modified_iso; ?>">
<?php echo $content->{"modified_$filter"}; ?>
</time>
