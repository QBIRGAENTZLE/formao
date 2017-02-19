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
        <link rel="stylesheet" href="/wp-content/lib/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/wp-content/themes/formao/css/business-casual.css">
        <link rel="stylesheet" href="/wp-content/themes/formao/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

        <?php wp_head(); ?>
    </head>

    <body id="page-top" <?php body_class(); ?>">

        <div class="brand"><a class="no-a-style" href="/"><?= get_bloginfo(); ?></a></div>
        <div class="address-bar"><?= get_bloginfo('description'); ?></div>

        <!-- Navigation -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <a class="navbar-brand" href="/"><?= get_bloginfo(); ?></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'nav navbar-nav')); ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

