<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-header">
        <nav class="main-nav sticky">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
    </header>
    <div class="page-transition"></div>