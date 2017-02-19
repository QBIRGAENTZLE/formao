<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
?>


<div class="container">

    <div class="row">
        <div class="box">
            <div class="col-lg-12 text-center">

                <?= do_shortcode("[R-slider id='1']"); ?>

                <h2 class="brand-before">
                    <small>Association</small>
                </h2>
                <h1 class="brand-name"><?= get_bloginfo(); ?></h1>
                <hr class="tagline-divider">
                <!--<h2>
                    <small>By
                        <strong>Start Bootstrap</strong>
                    </small>
                </h2>-->
            </div>
        </div>
    </div>

    <?php
    query_posts('cat=3&showposts=1');
    ?>

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

                        the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-border img-left'));
                        ?>
                        <hr class="visible-xs">
                        <h4><?php the_title(); ?> </h4>

                        <?php
                        the_content();
                    }
                }
                ?>
                <a class="pull-right" href="/actualites"><i class="fa fa-arrow-right" ></i>Toutes les actualités</a>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->

<?php
get_footer();
?>