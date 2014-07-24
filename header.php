<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>

        <?php wp_head(); ?>

        <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,600' rel='stylesheet' type='text/css'>
        <script src="<?php bloginfo('template_url');?>/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container" id="top">
            <header class="head">
                <div class="logo">
                    <a href="#"><img src="img/logo.png" alt="JJ Fagan & Co"></a>
                </div>
                <nav class="menu">
                    <?php wp_nav_menu( array('menu' => 'Main', 'container' => false, )); ?>
                </nav>

                <div class="down"><a href="#site_intro">&#8679; <!--<img src="img/down-arrow.svg" alt="Let's Start">--></a></div>

            </header>