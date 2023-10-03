        <div class="footer_entry limit_width">
            <?php echo $site->title(); ?> - <?php echo $L->get('powered'); ?> <a href="https://www.bludit.com/">Bludit</a>&nbsp;<img class="logo_cc" src="<?php echo Theme::src('img/by-sa.svg'); ?>" alt="<?php echo $L->get('license'); ?>">&nbsp;<?php
        $copyYear = 2023;
        $curYear = date('Y');
        echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
        ?><br>
            <img class="logo_rss" src="<?php echo Theme::src('img/rss.svg'); ?>" alt="" aria-hidden="true">&nbsp;<a href="<?php echo $site->url() ?>/rss.xml">RSS</a>&nbsp;&#8226;&nbsp;<?php echo $L->get('credits'); ?> <a href="https://angga.win">Angga</a>
        </div>