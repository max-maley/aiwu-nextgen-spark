<?php
/**
 * Front page template
 *
 * @package AIWU_Theme
 */

get_header();
?>

<div class="landing-page">
    <main>
        <?php get_template_part( 'template-parts/section', 'hero' ); ?>
        <?php get_template_part( 'template-parts/section', 'workflow' ); ?>
        <?php get_template_part( 'template-parts/section', 'apps' ); ?>
        <?php get_template_part( 'template-parts/section', 'api' ); ?>
        <?php get_template_part( 'template-parts/section', 'providers' ); ?>
        <?php get_template_part( 'template-parts/section', 'faq' ); ?>
        <?php get_template_part( 'template-parts/section', 'cta' ); ?>
    </main>
</div>

<?php get_footer(); ?>
