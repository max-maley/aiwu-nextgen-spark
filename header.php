<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="navbar" id="navbar">
    <div class="navbar-container">
        <div class="glass-card navbar-inner">
            <div class="navbar-content">
                <!-- Logo -->
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-logo">
                    <?php echo aiwu_get_logo_svg( 'sm' ); ?>
                    <span class="navbar-brand"><?php bloginfo( 'name' ); ?></span>
                </a>

                <!-- Desktop Nav -->
                <div class="navbar-nav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'walker'         => new AIWU_Nav_Walker(),
                        'fallback_cb'    => 'aiwu_default_nav',
                    ) );
                    ?>
                </div>

                <!-- Desktop CTA -->
                <div class="navbar-cta">
                    <a href="#" class="btn btn-ghost btn-sm">Log In</a>
                    <a href="<?php echo esc_url( get_theme_mod( 'aiwu_cta_primary_url', '#' ) ); ?>" class="btn btn-primary btn-sm">
                        <?php echo esc_html( get_theme_mod( 'aiwu_cta_primary_text', 'Get Started' ) ); ?>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                    <svg class="menu-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                    <svg class="close-icon hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu hidden" id="mobileMenu">
                <div class="mobile-menu-links">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'walker'         => new AIWU_Nav_Walker(),
                        'fallback_cb'    => 'aiwu_default_nav',
                    ) );
                    ?>
                </div>
                <div class="mobile-menu-cta">
                    <a href="#" class="btn btn-ghost btn-full">Log In</a>
                    <a href="<?php echo esc_url( get_theme_mod( 'aiwu_cta_primary_url', '#' ) ); ?>" class="btn btn-primary btn-full">
                        <?php echo esc_html( get_theme_mod( 'aiwu_cta_primary_text', 'Get Started' ) ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

<?php
/**
 * Default navigation fallback
 */
function aiwu_default_nav() {
    $default_links = array(
        array( 'label' => 'Features', 'href' => '#features' ),
        array( 'label' => 'Apps', 'href' => '#apps' ),
        array( 'label' => 'API', 'href' => '#api' ),
        array( 'label' => 'Pricing', 'href' => '#pricing' ),
        array( 'label' => 'Docs', 'href' => '#docs' ),
    );

    foreach ( $default_links as $link ) {
        echo '<a href="' . esc_attr( $link['href'] ) . '" class="nav-link">' . esc_html( $link['label'] ) . '</a>';
    }
}
?>
