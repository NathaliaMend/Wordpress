<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php get_custom_header()->width; ?>" alt="" />

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                <div class="page-item">
                    <?php /*LOOP*/
                    while (have_posts()):
                        the_post(); // enquanto tiver posts ,chame os posts independente da quantidade 
                        ?>
                        <article>
                            <header>
                                <h1><?php the_title(); ?></h1>
                            </header>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                        </article>
                        <?php
                        if (comments_open() || get_comments_number()) {
                            comments_template();
                        }
                    endwhile;
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>