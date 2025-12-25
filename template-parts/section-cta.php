<?php
/**
 * CTA Section Template
 *
 * @package AIWU_Theme
 */

$primary_cta_text = get_theme_mod( 'aiwu_cta_primary_text', 'Get Started Free' );
$primary_cta_url = get_theme_mod( 'aiwu_cta_primary_url', '#' );

$highlights = array(
    array( 'icon' => 'zap', 'text' => 'Instant setup' ),
    array( 'icon' => 'shield', 'text' => 'No credit card required' ),
    array( 'icon' => 'clock', 'text' => 'Cancel anytime' ),
);
?>

<section class="cta-section">
    <!-- Background -->
    <div class="section-bg-gradient-cta"></div>
    <div class="grid-pattern"></div>

    <!-- Glowing orbs -->
    <div class="floating-orb orb-cta-1"></div>
    <div class="floating-orb orb-cta-2"></div>

    <div class="section-container">
        <div class="cta-card glass-card glow-border">
            <h2 class="cta-title">
                Ready to automate your <span class="gradient-text">WordPress?</span>
            </h2>

            <p class="cta-description">
                Join thousands of WordPress users who are saving time and creating better content with AI-powered automation.
            </p>

            <!-- CTA Buttons -->
            <div class="cta-buttons">
                <a href="<?php echo esc_url( $primary_cta_url ); ?>" class="btn btn-hero btn-xl group">
                    <?php echo esc_html( $primary_cta_text ); ?>
                    <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#pricing" class="btn btn-outline-glow btn-xl">
                    View Pricing
                </a>
            </div>

            <!-- Highlights -->
            <div class="cta-highlights">
                <?php foreach ( $highlights as $highlight ) : ?>
                <div class="highlight-item">
                    <?php if ( $highlight['icon'] === 'zap' ) : ?>
                    <svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                    </svg>
                    <?php elseif ( $highlight['icon'] === 'shield' ) : ?>
                    <svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                    <?php elseif ( $highlight['icon'] === 'clock' ) : ?>
                    <svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    <?php endif; ?>
                    <span><?php echo esc_html( $highlight['text'] ); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
