    <?php wp_footer() ; ?>
    <!-- Page Footer-->
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="logo">
                        <h6 class="text-white">Le Blog De Jordy</h6>
                    </div>
                    <div class="contact-details">
                        <p>Lomé-Sanguéra, Togo</p>
                        <p>Phone: (+228) 99 47 07 78</p>
                        <p>Email: <a href="mailto:jordy.fatigba@theopentrade.com">jordy.fatigba@theopentrade.com</a></p>
                        <ul class="social-menu">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/jordy.fatigba"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/jordy_fatigba"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/jordy-fatigba-5028ba99/"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/BlackPowerC"><i class="fa fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
<!--                <div class="col-md-4">-->
<!--                    <div class="menus d-flex">-->
<!--                        <ul class="list-unstyled">-->
<!--                            <li> <a href="#">My Account</a></li>-->
<!--                            <li> <a href="#">Add Listing</a></li>-->
<!--                            <li> <a href="#">Pricing</a></li>-->
<!--                            <li> <a href="#">Privacy &amp; Policy</a></li>-->
<!--                        </ul>-->
<!--                        <ul class="list-unstyled">-->
<!--                            <li> <a href="#">Our Partners</a></li>-->
<!--                            <li> <a href="#">FAQ</a></li>-->
<!--                            <li> <a href="#">How It Works</a></li>-->
<!--                            <li> <a href="#">Contact</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="col-md-4">
                    <div class="latest-posts">
                        <?php
                            $numOfPosts = 3 ;
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
                                    <div class="post d-flex align-items-center">
                                        <div class="image">
                                            <img src="<?= get_the_post_thumbnail_url($postId) ?>" alt="..." class="img-fluid"/>
                                        </div>
                                        <div class="title">
                                            <strong><?= $post["post_title"] ; ?></strong>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; 2022. Tout droits réservés.</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>Modèle par <a href="https://bootstrapious.com/p/bootstrap-carousel" class="text-white">Bootstrapious</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>