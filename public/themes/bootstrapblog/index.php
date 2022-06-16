<?php get_header() ; ?>

    <!-- Hero Section-->
    <section style="background-size: cover; background: url('<?php echo get_template_directory_uri() . "/assets/img/hero.jpg " ?>') center center;"
             class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1>Le blog de Jordy - Fièrement propulsé par Wordpress et Bootstrap</h1>
                </div>
            </div>
            <a href=".intro" class="continue link-scroll">
                <i class="fa fa-long-arrow-down"></i> Défiler vers le bas
            </a>
        </div>
    </section>
    <!-- Intro Section-->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="h3">Des choses intéressantes ici</h2>
                    <p class="text-big" style="text-align: justify;">
                        Une belle <strong>introduction</strong> ici <strong>pour capturer votre attention</strong>.<br/>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam, quis nostrud nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Divider Section-->
    <section style="background-size: cover; background: url('<?php echo get_template_directory_uri() . "/assets/img/divider-bg.jpg" ?>') center bottom;" class="divider">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</h2>
                    <a href="#" class="hero-link">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Posts -->
    <section class="latest-posts">
        <div class="container">
            <header>
                <h2>Derniers articles</h2>
                <p class="text-big">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </header>
            <div class="row">
                <?php if(have_posts()) : ?>

                    <?php while(have_posts()): the_post() ?>
                        <div class="post col-md-4">
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink() ?>">
                                    <img src="<?php the_post_thumbnail_url('medium') ?>"
                                         alt="..."
                                         class="img-fluid"/>
                                </a>
                            </div>
                            <div class="post-details">
                                <div class="post-meta d-flex justify-content-between">
                                    <div class="date"><?php the_date("d M | Y") ; ?></div>
                                    <div class="category">
                                        <?php the_category() ; ?>
                                    </div>
                                </div>
                                <a href="<?php the_permalink() ; ?>">
                                    <h3 class="h4"><?php the_title() ; ?></h3>
                                </a>
                                <p class="text-muted">
                                    <?php the_excerpt() ; ?>
                                    <a href="<?php the_permalink() ; ?>" title="lire l'article <?php the_title() ; ?>">
                                        Voir plus
                                    </a>
                                </p>
                            </div>
                        </div>
                    <?php endwhile ?>
                <?php else: ?>
                    <h2>Auncun article n'est disponible sur votre blog</h2>
                <?php endif ?>
            </div>
        </div>
    </section>

<?php get_footer() ?>