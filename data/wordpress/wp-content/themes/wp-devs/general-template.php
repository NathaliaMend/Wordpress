<?php
/* 
Template Name: General Template (pode ser trocado o nome)
*/
?>
<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
    width="<?php get_custom_header()->width; ?>" alt="" />
    
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
                <div class="container">
                    <div class="general-templates">
                        <?php /*LOOP*/
                        if (have_posts()): //se tiver posts
                            while (have_posts()):
                                the_post(); // enquanto tiver posts ,chame os posts independente da quantidade 
                                ?>
                                <article>
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                </article>
                                <?php
                            endwhile;
                        else: ?>
                            <p>Nothing yet to be displayed!</p>
                        <?php endif; ?>
                    </div>
                </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>