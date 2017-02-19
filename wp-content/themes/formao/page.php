<?php
get_header();
?>

<section id='page<?php echo get_post()->post_name; ?>'>

    <div class="container">
        <div class='row'>
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php the_title(); ?></h2>
                    <hr>
                </div>
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

</section>


<?php
get_footer();
?>