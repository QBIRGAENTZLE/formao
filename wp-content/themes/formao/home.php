<?php
/*
  Blog Page
 */


get_header();
?>

<?php
query_posts('cat=3');
?>
<div class="container">
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center"><?= get_cat_name(3); ?></h2>
                <hr>

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        ?>

                        <div class="pull-left full-width margin-b-25px">
                            <?php
                            the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-border img-left'));
                            ?>
                            <h4><?php the_title(); ?> </h4>

                            <?php
                            the_content();
                            ?>
                            <a class="pull-right" href="<?php the_permalink(); ?>"><i class="fa fa-arrow-right" ></i>Lire la suite</a>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>


        </div>
    </div>
</div>


</div>

<?php
get_footer();
?>