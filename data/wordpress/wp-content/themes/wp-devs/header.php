<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <div id="page" class="site"></div>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="logo">
                    Logo
                </div>
                <div class="searchbox">
                    Search
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <nav class="main-menu">
                    Menu
                </nav>
            </div>
        </section>
    </header>