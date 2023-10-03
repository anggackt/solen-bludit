<?php
if ($WHERE_AM_I != 'category')
    return;

$categoryKey = $url->slug();
$category = new Category($categoryKey);
?>

<div class="informasi_filter">
    <p><?php echo $L->get('category-filter') ?>&nbsp;<?php echo $category->name(); ?></p>
    <p><?php echo $category->description(); ?></p>
</div>

<?php include(THEME_DIR_PHP . 'home.php'); ?>