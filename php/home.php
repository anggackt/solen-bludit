                <?php foreach ($content as $pageTmp) : ?>
                <article>
                    <h2 class="judul_artikel"><a href="<?php echo $pageTmp->permalink() ?>"><?php echo $pageTmp->title() ?></a></h2>
                    <div class="meta_top">
                        <span class="meta_author"><i class="icon-user" aria-hidden="true" title="<?php echo $L->get('author') ?>"></i><span class="sr-only"><?php echo $L->get('author') ?></span>&nbsp;<?php echo $pageTmp->user('nickname'); ?></span>
                        <span class="meta_read"><i class="icon-clock" aria-hidden="true" title="<?php echo $L->get('read') ?>"></i><span class="sr-only"><?php echo $L->get('read') ?></span>&nbsp;<?php echo $pageTmp->readingTime() ?></span>
                        <time datetime="<?php echo $pageTmp->date('Y-m-d') ?>" class="meta_date"><i class="icon-calendar" aria-hidden="true" title="<?php echo $L->get('date') ?>"></i><span class="sr-only"><?php echo $L->get('date') ?></span>&nbsp;<?php echo $pageTmp->date() ?></time>
                    </div>
                    <div class="featured_image card"><?php if ($pageTmp->coverImage()): ?><img src="<?php echo $pageTmp->coverImage(); ?>" alt="<?php echo $pageTmp->title(); ?>"><?php endif ?></div>
                    <div class="pratinjau_artikel">
                        <?php if ($pageTmp->description()) : ?>
                            <p><?php echo $pageTmp->description(); ?></p>
                        <?php endif ?>
                    </div>
                    <?php if (!empty($pageTmp->tags(true))): ?>
                    <div class="meta_bottom">
                        <ul class="meta_tag">
                            <?php foreach ($pageTmp->tags(true) as $tagKey=>$tagName): ?>
								<li><a class="pseudo button" href="<?php echo DOMAIN_TAGS.$tagKey ?>"><?php echo $tagName; ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </article>
                <div class="article_spacer"><span class="inside_spacer"></span></div>
                <?php endforeach ?>
            </div>
            <div class="section_wrapper">
                <?php if (Paginator::numberOfPages() > 1) : ?>
                    <div class="pagination">
                    <?php if (Paginator::showNext()) : ?>
                        <a href="<?php echo Paginator::nextPageUrl() ?>" class="pseudo button" aria-label="<?php echo $L->get('previous'); ?>" title="<?php echo $L->get('previous'); ?>"><i class="icon-arrow-left" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php if (Paginator::showPrev()) : ?>
                        <a href="<?php echo Paginator::previousPageUrl() ?>" class="pseudo button" aria-label="<?php echo $L->get('next'); ?>" title="<?php echo $L->get('next'); ?>"><i class="icon-arrow-right" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    </div>
                <?php endif ?>
            </div>