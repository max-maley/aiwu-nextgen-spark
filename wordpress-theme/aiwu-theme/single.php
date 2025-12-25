<?php
/**
 * The template for displaying single posts
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
                        <div class="post-meta">
                            <span><?php echo get_the_date(); ?></span>
                            <span>&middot;</span>
                            <span><?php the_author(); ?></span>
                        </div>
                    </header>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-featured-image glass-card glow-border" style="padding: 1rem; margin-bottom: 2rem;">
                            <?php the_post_thumbnail( 'large' ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <footer class="entry-footer">
                        <?php
                        $categories = get_the_category();
                        if ( $categories ) :
                        ?>
                            <div class="post-categories">
                                <strong><?php esc_html_e( 'Categories:', 'aiwu-theme' ); ?></strong>
                                <?php the_category( ', ' ); ?>
                            </div>
                        <?php endif; ?>

                        <?php
                        $tags = get_the_tags();
                        if ( $tags ) :
                        ?>
                            <div class="post-tags">
                                <strong><?php esc_html_e( 'Tags:', 'aiwu-theme' ); ?></strong>
                                <?php the_tags( '', ', ' ); ?>
                            </div>
                        <?php endif; ?>
                    </footer>
                </article>

                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
