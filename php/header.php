    <div class="main_menu white_bg fixed_top">
        <nav class="header limit_width" role="navigation" aria-label="<?php echo $L->get('navi'); ?>">
            <a href="<?php echo $site->url() ?>" class="brand"><img src="<?php echo Theme::src('img/logo.svg'); ?>" alt="<?php echo $L->get('logox'); ?>" width="21" height="22"></a>
      
            <!-- responsive-->
            <input id="bmenub" type="checkbox" class="show" tabIndex="-1" aria-label="dummy button">
            <label for="bmenub" class="burger toggle pseudo button">Menu &#9776;</label>
      
            <div class="menu">
            <?php foreach ($staticContent as $tmp) : ?>
                <a href="<?php echo $tmp->permalink(); ?>" class="pseudo button"><?php echo $tmp->title(); ?></a>
            <?php endforeach ?>
            </div>
        </nav>
    </div>