<?php get_header(); ?>


    <div>
        <h1><?php the_title(); ?></h1>
    </div>

    <div class="content">
        <div class="container">
            <?php if (have_posts()): while (have_posts()):the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: endif; ?>

        </div>
    </div>

<?php get_footer(); ?>