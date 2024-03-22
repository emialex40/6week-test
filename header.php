<!DOCTYPE HTML>
<html>
<head <?php
language_attributes(); ?>>
    <title><?php
        wp_title(''); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php
    wp_head();
    ?>

</head>
<body <?php
body_class(); ?>>
<script>
</script>
<div id="root">
    <div class="app">
        <div class="app_main">
            <header id="header" class="header<?php
            echo is_front_page() ? ' bg_white' : ''; ?>">
                <div class="container">
                    <div class="logo">
                        <?php
                        if ( ! is_front_page()) : ?>
                        <a href="<?php
                        echo esc_url(home_url()); ?>">
                            <?php
                            endif; ?>
                            <img src="<?php
                            echo get_template_directory_uri(); ?>/img/6week-logo.png" alt="<?php
                            echo bloginfo('name'); ?>">
                            <?php
                            if ( ! is_front_page()) : ?>
                        </a>
                    <?php
                    endif; ?>
                    </div>
                </div>
            </header>
            <main>