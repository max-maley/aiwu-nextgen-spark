<?php
/**
 * Apps Section Template
 *
 * @package AIWU_Theme
 */

$apps = array(
    array(
        'category' => 'Engagement Tools',
        'items' => array(
            array( 'name' => 'AI ChatBot', 'description' => '24/7 customer support powered by AI', 'icon' => 'message-square' ),
            array( 'name' => 'AI Forms Builder', 'description' => 'Smart forms that adapt to responses', 'icon' => 'file-text' ),
        ),
    ),
    array(
        'category' => 'Content Automation',
        'items' => array(
            array( 'name' => 'Bulk Post Generator', 'description' => 'Generate multiple posts at once', 'icon' => 'layers' ),
            array( 'name' => 'Autoblogging', 'description' => 'Automated content publishing', 'icon' => 'bot' ),
            array( 'name' => 'WooCommerce Generator', 'description' => 'Create products with AI', 'icon' => 'sparkles' ),
            array( 'name' => 'Magic Text Enhancer', 'description' => 'Improve text with one click', 'icon' => 'wand' ),
        ),
    ),
    array(
        'category' => 'Advanced Features',
        'items' => array(
            array( 'name' => 'MCP Integration', 'description' => 'Connect to external services', 'icon' => 'settings' ),
            array( 'name' => 'AI Training', 'description' => 'Train AI on your content', 'icon' => 'book' ),
        ),
    ),
);

function aiwu_get_icon_svg( $icon ) {
    $icons = array(
        'message-square' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>',
        'file-text' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
        'layers' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 2 7 12 12 22 7 12 2"/><polyline points="2 17 12 22 22 17"/><polyline points="2 12 12 17 22 12"/></svg>',
        'bot' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8" y2="16"/><line x1="16" y1="16" x2="16" y2="16"/></svg>',
        'sparkles' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/></svg>',
        'wand' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 4V2"/><path d="M15 16v-2"/><path d="M8 9h2"/><path d="M20 9h2"/><path d="M17.8 11.8 19 13"/><path d="M15 9h0"/><path d="M17.8 6.2 19 5"/><path d="m3 21 9-9"/><path d="M12.2 6.2 11 5"/></svg>',
        'settings' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>',
        'book' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>',
    );
    return isset( $icons[ $icon ] ) ? $icons[ $icon ] : '';
}
?>

<section class="apps-section" id="apps">
    <!-- Background -->
    <div class="gradient-mesh"></div>

    <div class="section-container">
        <!-- Header -->
        <div class="section-header">
            <div class="section-badge">
                <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/>
                </svg>
                <span>Ready-to-Use Apps</span>
            </div>

            <h2 class="section-title">
                Powerful tools, <span class="gradient-text">zero setup</span>
            </h2>

            <p class="section-description">
                Standalone AI features that work instantly. No workflow building required—just enable and start using.
            </p>
        </div>

        <!-- Apps Grid -->
        <div class="apps-categories">
            <?php foreach ( $apps as $category ) : ?>
            <div class="apps-category">
                <h3 class="category-title"><?php echo esc_html( $category['category'] ); ?></h3>

                <div class="apps-grid">
                    <?php foreach ( $category['items'] as $app ) : ?>
                    <div class="app-card glass-card">
                        <div class="app-icon">
                            <?php echo aiwu_get_icon_svg( $app['icon'] ); ?>
                        </div>

                        <h4 class="app-name"><?php echo esc_html( $app['name'] ); ?></h4>

                        <p class="app-description"><?php echo esc_html( $app['description'] ); ?></p>

                        <span class="app-link">
                            Learn more
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
