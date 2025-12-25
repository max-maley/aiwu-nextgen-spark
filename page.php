<?php
/**
 * The template for displaying all pages
 *
 * @package AIWU_Theme
 */

get_header();
?>

<div class="landing-page">
    <div class="page-content">
        <div class="section-container">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="section-header">
                        <h1 class="section-title"><?php the_title(); ?></h1>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
