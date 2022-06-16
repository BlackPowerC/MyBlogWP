<aside class="col-lg-4">
    <!-- Widget [Search Bar Widget]-->
    <div class="widget search">
        <header>
            <h3 class="h6">Rechercher des articles ici</h3>
        </header>
        <form action="<?php esc_url(home_url('/')) ?>" class="search-form">
            <div class="form-group">
                <input name="s"
                       type="search"
                       value="<?php get_search_query(true) ; ?>"
                       placeholder="Que cherchez-vous ?"/>
                <button type="submit" class="submit"><i class="icon-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Widget [Latest Posts Widget]        -->
    <div class="widget latest-posts">
        <header>
            <h3 class="h6">Les derniers articles</h3>
        </header>
        <div class="blog-posts">
            <?php
            $numOfPosts = 6 ;
            $latests = wp_get_recent_posts([
                'numberposts'      => $numOfPosts,
                'orderby'          => 'post_date',
                'order'            => 'DESC',
                'post_type'        => 'post',
                'post_status'      => 'publish'
            ]) ;?>
            <?php if($latests === false): ?>
                Aucune article n'est disponible sur votre blog.
            <?php else: ?>
                <?php foreach ($latests as $post): ?>
                    <?php $postId = $post["ID"] ; ?>
                    <a href="<?php the_permalink($postId) ; ?>" title="<?= $post["post_title"] ; ?>">
                        <div class="item d-flex align-items-center">
                            <div class="image">
                                <img src="<?= get_the_post_thumbnail_url($postId) ?>" alt="..." class="img-fluid"/>
                            </div>
                            <div class="title">
                                <strong><?= $post["post_title"] ; ?></strong>
                                <div class="d-flex align-items-center">
                                    <div class="views"><i class="icon-eye"></i> 500</div>
                                    <div class="comments">
                                        <i class="icon-comment"></i> <?= get_comments_number($postId) ; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Widget [Categories Widget]-->
    <div class="widget categories">
        <header><h3 class="h6">Catégories</h3></header>
        <?php foreach (get_categories() as $postCategory): ?>
            <div class="item d-flex justify-content-between">
                <a title="<?= $postCategory->name ?>" href="<?= get_category_link($postCategory) ; ?>">
                    <?= $postCategory->name ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Widget [Tags Cloud Widget]-->
    <div class="widget tags">
        <header>
            <h3 class="h6">Étiquettes</h3>
        </header>
        <ul class="list-inline">
            <?php foreach (get_tags() as $postTag): ?>
                <li class="list-inline-item">
                    <a class="tag" title="<?= $postTag->name ?>" href="<?= get_tag_link($postTag) ; ?>">
                        #<?= $postTag->name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</aside>