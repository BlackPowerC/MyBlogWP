<?php $comments = get_comments([
    'post_id' => get_the_ID(),
    'orderby' => 'comment_date_gmt',
    'order'   => 'ASC',
    'status'  => 'approve'
]) ;
$numOfComments = is_array($comments) ? count($comments) : 0 ;
?>
<div class="post-comments">
    <header>
        <h3 class="h6">
            Commentaire<?= $numOfComments > 1 ? 's' : '' ?><span class="no-of-comments">(<?= $numOfComments ?>)</span>
        </h3>
    </header>
    <?php if($numOfComments > 0): ?>
        <?php foreach($comments as $comment) : ?>
            <div class="comment">
                <div class="comment-header d-flex justify-content-between">
                    <div class="user d-flex align-items-center">
                        <div class="image">
                            <img src="<?= get_template_directory_uri() ?>/assets/img/user.svg" alt="..." class="img-fluid rounded-circle"/>
                        </div>
                        <div class="title">
                            <strong><?= $comment->comment_author ?></strong>
                            <span class="date">
                                <?php try {
                                        echo (new \DateTime($comment->comment_date_gmt))->format("\L\\e d-m-Y à H:i:s") ;
                                    }
                                    catch (Exception $e) {
                                        echo "Impossible d'afficher la date du commentaire" ;
                                    }
                                ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="comment-body">
                    <p>
                        <?= $comment->comment_content ; ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>