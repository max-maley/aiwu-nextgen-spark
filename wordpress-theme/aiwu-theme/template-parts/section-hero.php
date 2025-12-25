<?php
/**
 * Hero Section Template
 *
 * @package AIWU_Theme
 */

$hero_title = get_theme_mod( 'aiwu_hero_title', "WordPress automations you'll actually use" );
$hero_subtitle = get_theme_mod( 'aiwu_hero_subtitle', 'Connect AI to your WordPress and build workflows from customer support to content—without code.' );
$youtube_id = get_theme_mod( 'aiwu_youtube_video_id', 'fl-sqUYyZ70' );
$primary_cta_text = get_theme_mod( 'aiwu_cta_primary_text', 'Get Started Free' );
$primary_cta_url = get_theme_mod( 'aiwu_cta_primary_url', '#' );
$secondary_cta_text = get_theme_mod( 'aiwu_cta_secondary_text', 'View Documentation' );
$secondary_cta_url = get_theme_mod( 'aiwu_cta_secondary_url', '#' );
?>

<section class="hero-section" id="hero">
    <!-- Background effects -->
    <div class="gradient-mesh"></div>
    <div class="grid-pattern"></div>

    <!-- Floating orbs -->
    <div class="floating-orb orb-1"></div>
    <div class="floating-orb orb-2"></div>

    <div class="section-container hero-container">
        <div class="hero-content">
            <!-- Badge -->
            <div class="hero-badge glass-card animate-fade-in">
                <svg class="icon-sparkles" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/>
                    <path d="M5 3v4"/>
                    <path d="M19 17v4"/>
                    <path d="M3 5h4"/>
                    <path d="M17 19h4"/>
                </svg>
                <span>Trusted by 1,000+ WordPress sites</span>
            </div>

            <!-- Main headline -->
            <h1 class="hero-title animate-fade-in-up">
                <?php echo wp_kses_post( str_replace( "you'll actually use", '<span class="gradient-text">you\'ll actually use</span>', esc_html( $hero_title ) ) ); ?>
            </h1>

            <!-- Subtitle -->
            <p class="hero-subtitle animate-fade-in-up" style="animation-delay: 0.1s">
                <?php echo esc_html( $hero_subtitle ); ?>
            </p>

            <!-- CTA Buttons -->
            <div class="hero-cta animate-fade-in-up" style="animation-delay: 0.2s">
                <a href="<?php echo esc_url( $primary_cta_url ); ?>" class="btn btn-hero btn-xl group">
                    <?php echo esc_html( $primary_cta_text ); ?>
                    <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="<?php echo esc_url( $secondary_cta_url ); ?>" class="btn btn-glass btn-xl">
                    <?php echo esc_html( $secondary_cta_text ); ?>
                </a>
            </div>

            <!-- Video Preview -->
            <div class="hero-video animate-fade-in-up" style="animation-delay: 0.3s">
                <div class="glass-card glow-border video-card">
                    <div class="video-container" id="videoContainer" data-youtube-id="<?php echo esc_attr( $youtube_id ); ?>">
                        <img
                            src="https://img.youtube.com/vi/<?php echo esc_attr( $youtube_id ); ?>/maxresdefault.jpg"
                            alt="AIWU Plugin Demo"
                            class="video-thumbnail"
                            id="videoThumbnail"
                        >
                        <div class="video-overlay"></div>
                        <button class="video-play-btn" id="playButton">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom gradient fade -->
    <div class="hero-fade"></div>
</section>
