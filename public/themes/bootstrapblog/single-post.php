<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()): the_post() ?>
    <div class="container">
        <div class="row">
            <main class="post blog-post col-lg-8">
                <div class="container">
                    <div class="post-single">
                        <div class="post-thumbnail">
                            <img src="<?php the_post_thumbnail_url('medium') ; ?>" alt="..." class="img-fluid"/>
                        </div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="category">
                                    <?php foreach (get_the_category() as $postCategory): ?>
                                        <a title="voir les articles de la catégorie <?= $postCategory->name ?>"
                                           href="<?= get_category_link($postCategory) ; ?>">
                                            <?= $postCategory->name ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <h1><?php the_title() ; ?></h1>
                            <div class="post-footer d-flex align-items-center flex-column flex-sm-row">
                                <a href="" class="author d-flex align-items-center flex-wrap">
                                    <div class="avatar">
                                        <img src="<?php echo get_template_directory_uri() . "/assets/img/avatar-1.jpg" ?>" alt="" class="img-fluid"/>
                                    </div>
                                    <div class="title">
                                        <span><?php the_author() ; ?></span>
                                    </div>
                                </a>
                                <div class="d-flex align-items-center flex-wrap">
                                    <div class="date">
                                        <i class="icon-clock"></i> <?php the_modified_date("d M, Y") ; ?>
                                    </div>
                                    <div class="views">
                                        <i class="icon-eye"></i> 500
                                    </div>
                                    <div class="comments meta-last"><i class="icon-comment"></i>
                                        <?= get_comments_number() ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Le contenu de l'article -->
                            <div class="post-body" style="text-align: justify;">
                                <?php the_content() ; ?>
                            </div>
                            <!-- Les étiquettes -->
                            <div class="post-tags">
                                <?php $tags = get_tags(); ?>
                                <div class="tags">
                                    <?php foreach ( $tags as $tag ) { ?>
                                        <a href="<?php echo get_tag_link($tag->term_id) ; ?>" class="tag" rel="tag">
                                            #<?php echo $tag->name ; ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Les commentaires -->
                            <?php comments_template("/comments.php", true) ; ?>
                            <?php
                                comment_form([
                                    "title_reply" => "Laisser un commentaire",
                                    "label_submit" => "Poster le commentaire",
                            ]) ; ?>
                        </div>
                    </div>
                </div>
            </main>
            <?php get_template_part("content", "sidebar") ; ?>
        </div>
    </div>
<?php endwhile; endif ?>

<?php get_footer() ?>