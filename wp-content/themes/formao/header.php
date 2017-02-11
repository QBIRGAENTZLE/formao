<?php /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <title><?php echo get_post_meta(get_the_ID(), '_yoast_wpseo_title', true); ?></title>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/wp-content/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="/wp-content/themes/formao/css/business-casual.css">
        <link rel="stylesheet" href="/wp-content/themes/formao/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <?php wp_head(); ?>
    </head>

    <body id="page-top" <?php body_class(); ?>">

