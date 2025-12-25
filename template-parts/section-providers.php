<?php
/**
 * Providers Section Template
 *
 * @package AIWU_Theme
 */

$providers = array(
    array(
        'name' => 'OpenAI API',
        'description' => 'Access GPT-4o, GPT-4 Turbo, and all major OpenAI models with full support.',
        'color' => '#10a37f',
        'link' => '#',
    ),
    array(
        'name' => 'Anthropic Claude',
        'description' => 'Access Claude Sonnet, Opus and Haiku — fully supported and always up to date.',
        'color' => '#d97757',
        'link' => '#',
    ),
    array(
        'name' => 'DeepSeek API',
        'description' => "Fully supports DeepSeek's high-efficiency, low-cost reasoning models.",
        'color' => '#3b82f6',
        'link' => '#',
    ),
    array(
        'name' => 'Google Gemini',
        'description' => "Full support for Google's Gemini multimodal AI suite.",
        'color' => '#ea4335',
        'link' => '#',
    ),
    array(
        'name' => 'Perplexity AI',
        'description' => "Supports Perplexity's search+reasoning AI models.",
        'color' => '#20808d',
        'link' => '#',
    ),
    array(
        'name' => 'OpenRouter',
        'description' => 'Access 100+ models through a single API with unified pricing.',
        'color' => '#8b5cf6',
        'link' => '#',
    ),
);
?>

<section class="providers-section" id="providers">
    <!-- Background -->
    <div class="section-bg-gradient-light"></div>

    <div class="section-container">
        <!-- Header -->
        <div class="section-header">
            <h2 class="section-title">
                Supported AI <span class="gradient-text">Models & APIs</span>
            </h2>

            <p class="section-description">
                AIWU does not charge any extra usage fees. You connect your own API key — and keep full control.
            </p>
        </div>

        <!-- Providers Grid -->
        <div class="providers-grid">
            <?php foreach ( $providers as $provider ) : ?>
            <div class="provider-card glass-card" style="--provider-color: <?php echo esc_attr( $provider['color'] ); ?>">
                <div class="provider-header">
                    <div class="provider-icon" style="background-color: <?php echo esc_attr( $provider['color'] ); ?>20;">
                        <div class="provider-dot" style="background-color: <?php echo esc_attr( $provider['color'] ); ?>;"></div>
                    </div>
                    <h3 class="provider-name"><?php echo esc_html( $provider['name'] ); ?></h3>
                </div>

                <p class="provider-description"><?php echo esc_html( $provider['description'] ); ?></p>

                <a href="<?php echo esc_url( $provider['link'] ); ?>" class="provider-link" style="color: <?php echo esc_attr( $provider['color'] ); ?>">
                    Get API Key
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Security Note -->
        <div class="security-note glass-card">
            <p>
                <span class="note-title">Security & Privacy:</span>
                All API integrations use your own credentials. No data is stored or processed by AIWU servers.
            </p>
        </div>
    </div>
</section>
