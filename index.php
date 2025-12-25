<?php
/**
 * The main template file
 *
 * @package AIWU_Theme
 */

get_header();
?>

<div class="landing-page">
    <div class="page-content">
        <div class="section-container">
            <?php if ( have_posts() ) : ?>
                <div class="post-grid">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post-thumbnail">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'medium_large' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="post-content">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>

                                <div class="post-excerpt">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="post-meta">
                                    <?php echo get_the_date(); ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <?php the_posts_navigation(); ?>

            <?php else : ?>
                <p><?php esc_html_e( 'No posts found.', 'aiwu-theme' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
