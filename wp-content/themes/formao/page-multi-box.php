<?php
/*
  Template Name: Multi-Box
 */


get_header();
?>

<section id='page<?php echo get_post()->post_name; ?>'>

    <div class="container">
        <?php the_content(); ?>
    </div>

</section>


<?php
get_footer();
?>