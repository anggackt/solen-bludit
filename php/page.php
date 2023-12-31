                <?php Theme::plugins('pageBegin'); ?>
                <article>
                    <h1 class="judul_artikel"><a href="<?php echo $page->permalink() ?>"><?php echo $page->title() ?></a></h1>
                    <?php if (!$page->isStatic() && !$url->notFound()) : ?>
                    <div class="meta_top">
                        <span class="meta_author"><img src="<?php echo Theme::src('img/user.svg'); ?>" alt="<?php echo $L->get('author') ?>" title="<?php echo $L->get('author') ?>" width="13" height="13">&nbsp;<?php echo $page->user('nickname'); ?></span>
                        <span class="meta_read"><img src="<?php echo Theme::src('img/clock.svg'); ?>" alt="<?php echo $L->get('read') ?>" title="<?php echo $L->get('read') ?>" width="13" height="13">&nbsp;<?php echo $page->readingTime() ?></span>
                        <time datetime="<?php echo $page->date('Y-m-d') ?>" class="meta_date"><img src="<?php echo Theme::src('img/calendar.svg'); ?>" alt="<?php echo $L->get('date') ?>" title="<?php echo $L->get('date') ?>" width="13" height="13">&nbsp;<?php echo $page->date() ?></time>
                    </div>
                    <div class="featured_image card"><a href="<?php echo $page->coverImage(); ?>" aria-label="<?php echo $page->title() ?>"><?php if ($page->coverImage()): ?><img src="<?php echo $page->coverImage(); ?>" alt="<?php echo $page->title(); ?>"><?php endif ?></a></div>
                    <?php endif ?>
                    <div class="isi_artikel">
                        <?php echo $page->content(); ?>    
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
                    <?php Theme::plugins('pageEnd'); ?>
                </article>
                <div class="article_spacer"></div>
            </div>
            <div class="section_wrapper">
                <div>
                    <div class="share_icons">
                        <img src="<?php echo Theme::src('img/share.svg'); ?>" alt="" class="icon-share ikon_berbagi" aria-hidden="true">
                        <a href="https://twitter.com/intent/tweet?source=<?php echo $page->permalink() ?>&text=<?php echo $page->title() ?>:%20<?php echo $page->permalink() ?>" target="_blank" title="Share on Twitter/X" data-tooltip="Bagikan ke Twitter" class="tooltip-bottom" aria-label="<?php echo $L->get('share-t') ?>"><img src="<?php echo Theme::src('img/twitter.svg'); ?>" alt="" aria-hidden="true"></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->permalink() ?>&quote=<?php echo $page->title() ?>" target="_blank" title="Share on Facebook" data-tooltip="Bagikan ke Facebook" class="tooltip-bottom" aria-label="<?php echo $L->get('share-f') ?>"><img src="<?php echo Theme::src('img/facebook.svg'); ?>" alt="" aria-hidden="true"></a>
                        <a href="mailto:?subject=<?php echo $page->title() ?>&body=<?php echo $page->description(); ?>:%20<?php echo $page->permalink() ?>" data-tooltip="Bagikan via surel" class="tooltip-bottom" aria-label="<?php echo $L->get('share-e') ?>"><img src="<?php echo Theme::src('img/mail.svg'); ?>" alt="" aria-hidden="true"></a>
                    </div>
                </div>
            </div>