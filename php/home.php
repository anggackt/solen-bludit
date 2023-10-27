                <?php foreach ($content as $page) : ?>
                <article>
                    <h2 class="judul_artikel"><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h2>
                    <div class="meta_top">
                        <span class="meta_author"><img src="<?php echo Theme::src('img/user.svg'); ?>" alt="<?php echo $L->get('author') ?>" title="<?php echo $L->get('author') ?>" width="13" height="13">&nbsp;<?php echo $page->user('nickname'); ?></span>
                        <span class="meta_read"><img src="<?php echo Theme::src('img/clock.svg'); ?>" alt="<?php echo $L->get('read') ?>" title="<?php echo $L->get('read') ?>" width="13" height="13">&nbsp;<?php echo $page->readingTime() ?></span>
                        <time datetime="<?php echo $page->date('Y-m-d') ?>" class="meta_date"><img src="<?php echo Theme::src('img/calendar.svg'); ?>" alt="<?php echo $L->get('date') ?>" title="<?php echo $L->get('date') ?>" width="13" height="13">&nbsp;<?php echo $page->date() ?></time>
                    </div>
                    <div class="featured_image card"><?php if ($page->coverImage()): ?><img src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->title(); ?>"><?php endif ?></div>
                    <div class="pratinjau_artikel">
                        <?php if ($page->description()) : ?>
                            <p><?php echo $page->description(); ?></p>
                        <?php endif ?>
                    </div>
                    <?php if (!empty($page->tags(true))): ?>
                    <div class="meta_bottom">
                        <ul class="meta_tag">
                            <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
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
                        <a href="<?php echo Paginator::nextPageUrl() ?>" class="pseudo button" aria-label="<?php echo $L->get('previous'); ?>" title="<?php echo $L->get('previous'); ?>"><img src="<?php echo Theme::src('img/chevron-left.svg'); ?>" alt="" width="18" height="18" aria-hidden="true"></a>
                    <?php endif; ?>
                    <?php if (Paginator::showPrev()) : ?>
                        <a href="<?php echo Paginator::previousPageUrl() ?>" class="pseudo button" aria-label="<?php echo $L->get('next'); ?>" title="<?php echo $L->get('next'); ?>"><img src="<?php echo Theme::src('img/chevron-right.svg'); ?>" alt="" width="18" height="18" aria-hidden="true"></a>
                    <?php endif; ?>
                    </div>
                <?php endif ?>
            </div>