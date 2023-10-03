<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
    <?php include(THEME_DIR_PHP . 'header-library.php'); ?>
</head>

<!-- Start Body! -->
<body>
    <?php Theme::plugins('siteBodyBegin'); ?>

    <!-- Navigation -->
    <?php include(THEME_DIR_PHP . 'header.php'); ?>

    <?php if ($WHERE_AM_I == 'home'): ?>
    <!-- Mini Hero -->
    <?php include(THEME_DIR_PHP . 'mini-hero.php'); ?>
    <?php elseif ($WHERE_AM_I != 'home'): ?>
    <div class="page_spacer"></div>
    <?php endif; ?>

    <!-- Main Content -->
    <div class="flex one two-1000 limit_width bottom_foot">
        <div class="full three-fourth-1000">
            <div class="section_wrapper <?php if ($WHERE_AM_I != 'home'): ?>single_page<?php endif; ?>">
                <?php include(THEME_DIR_PHP . $WHERE_AM_I . '.php'); ?>
            
        </div>
        <div class="full fourth-1000">
            <div class="section_wrapper <?php if ($WHERE_AM_I != 'home'): ?>sidebar_page<?php elseif ($WHERE_AM_I == 'home'): ?>sidebar_home<?php endif; ?>">
                <aside class="author_thumb">
                    <img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimg.svg')) ?>" alt="<?php echo $L->get('avatar'); ?>">
                </aside>
                <aside class="plugin plugin-about">
                    <h2 class="plugin-label"><?php echo $page->user('nickname') ?></h2>
                    <div class="plugin-content">
                        <?php echo $site->description(); ?>  
                    </div>
                </aside>
                <?php include(THEME_DIR_PHP . 'sidebar.php'); ?>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="flex one footer">
        <?php include(THEME_DIR_PHP . 'footer.php'); ?>
    </footer>
    <?php Theme::plugins('siteBodyEnd'); ?>
</body>
<!-- End Body! -->
</html>