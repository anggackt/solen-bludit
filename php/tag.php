<?php
if ($WHERE_AM_I != 'tag')
    return;

$tagKey = $url->slug();
$tag = new Tag($tagKey);
?>

<div class="informasi_filter">
    <p><?php echo $L->get('tag-filter') ?>&nbsp;<?php echo $tag->name(); ?></p>
</div>

<?php include(THEME_DIR_PHP . 'home.php'); ?>