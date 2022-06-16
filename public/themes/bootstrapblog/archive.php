<?php get_header() ; ?>

    <div class="container">
        <div class="row">
            <!-- Latest Posts -->
            <main class="posts-listing col-lg-8">
                <div class="container">
                    <div class="row">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post() ?>
                                <!-- post -->
                                <div class="post col-xl-6">
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink() ; ?>">
                                            <img src="<?php the_post_thumbnail_url("medium") ?>" alt="..." class="img-fluid"/>
                                        </a>
                                    </div>
                                    <div class="post-details">
                                        <div class="post-meta d-flex justify-content-between">
                                            <div class="date meta-last">
                                                <?php the_date("d M | Y") ?>
                                            </div>
                                            <div class="category">
                                                <?php foreach (get_the_category() as $postCategory): ?>
                                                    <a title="voir les articles de la catégorie <?= $postCategory->name ?>"
                                                       href="<?= get_category_link($postCategory) ; ?>">
                                                        <?= $postCategory->name ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <a href="<?php the_permalink() ; ?>" title="<?php the_title() ; ?>">
                                            <h3 class="h4"><?php the_title() ; ?></h3>
                                        </a>
                                        <p class="text-muted" style="text-align: justify;">
                                            <?= get_the_excerpt() ; ?>
                                            <br/><br/>
                                            <a href="<?php the_permalink() ; ?>"
                                               title="lire l'article <?php the_title() ; ?>">
                                                Voir plus
                                            </a>
                                        </p>
                                        <footer class="post-footer d-flex align-items-center">
                                            <a href="#" class="author d-flex align-items-center flex-wrap">
                                                <div class="avatar">
                                                    <img src="<?= get_template_directory_uri() ?>/assets/img/avatar-2.jpg" alt="..." class="img-fluid"/>
                                                </div>
                                                <div class="title">
                                                    <span><?php the_author(); ?></span>
                                                </div>
                                            </a>
                                            <div class="date"><i class="icon-clock"></i> 2 months ago</div>
                                            <div class="comments meta-last">
                                                <i class="icon-comment"></i> <?= get_comments_number() ?>
                                            </div>
                                        </footer>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        <?php else: ?>
                        <?php endif; ?>
                    </div>
                    <?php if(have_posts()): ?>
                        <!-- Pagination -->
                        <?= bootstrapblog_pagination_links() ; ?>
                    <?php endif; ?>
                </div>
            </main>
            <?php get_template_part("content", "sidebar") ; ?>
        </div>
    </div>

<?php get_footer()  ; ?>