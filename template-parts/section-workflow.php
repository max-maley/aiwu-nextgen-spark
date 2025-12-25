<?php
/**
 * Workflow Section Template
 *
 * @package AIWU_Theme
 */

$integrations = array(
    array( 'name' => 'WordPress', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/WordPress_blue_logo.svg' ),
    array( 'name' => 'WooCommerce', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/Woo.png' ),
    array( 'name' => 'OpenAI', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/Open-AI.png' ),
    array( 'name' => 'Gmail', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/gmail.png' ),
    array( 'name' => 'Claude', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/Claude.png' ),
    array( 'name' => 'Gemini', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/Gemini.png' ),
    array( 'name' => 'Slack', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/Slack.png' ),
    array( 'name' => 'Telegram', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/Telegram.png' ),
    array( 'name' => 'DeepSeek', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/DeepSeek.png' ),
    array( 'name' => 'Perplexity', 'icon' => 'https://aiwuplugin.com/wp-content/uploads/2025/11/Perplexity.png' ),
);

$features = array(
    array( 'icon' => 'zap', 'text' => 'Trigger on posts, orders, comments, forms' ),
    array( 'icon' => 'database', 'text' => 'Connect to external APIs and databases' ),
    array( 'icon' => 'workflow', 'text' => 'Add AI processing at any step' ),
    array( 'icon' => 'clock', 'text' => 'Schedule and monitor your workflows' ),
);
?>

<section class="workflow-section" id="features">
    <!-- Background -->
    <div class="section-bg-gradient"></div>
    <div class="dot-pattern"></div>

    <div class="section-container">
        <div class="workflow-grid">
            <!-- Left - Visual -->
            <div class="workflow-visual">
                <div class="glass-card glow-border workflow-card">
                    <div class="integration-orbit">
                        <!-- Center AIWU logo -->
                        <div class="orbit-center">
                            <div class="orbit-logo pulse-glow">
                                <img src="https://aiwuplugin.com/wp-content/uploads/2024/11/icon.png" alt="AIWU">
                            </div>
                        </div>

                        <!-- Orbiting integrations -->
                        <?php foreach ( $integrations as $index => $integration ) :
                            $angle = ($index / count($integrations)) * 2 * M_PI;
                            $radius = 140;
                            $x = cos($angle) * $radius;
                            $y = sin($angle) * $radius;
                        ?>
                        <div
                            class="orbit-item glass-card"
                            style="--orbit-x: <?php echo $x; ?>px; --orbit-y: <?php echo $y; ?>px; animation-delay: <?php echo $index * 0.2; ?>s;"
                        >
                            <img src="<?php echo esc_url( $integration['icon'] ); ?>" alt="<?php echo esc_attr( $integration['name'] ); ?>">
                        </div>
                        <?php endforeach; ?>

                        <!-- Connection lines SVG -->
                        <svg class="orbit-lines" viewBox="-200 -200 400 400">
                            <?php foreach ( $integrations as $index => $integration ) :
                                $angle = ($index / count($integrations)) * 2 * M_PI;
                                $radius = 140;
                                $x = cos($angle) * $radius;
                                $y = sin($angle) * $radius;
                            ?>
                            <line x1="0" y1="0" x2="<?php echo $x; ?>" y2="<?php echo $y; ?>" class="orbit-line"/>
                            <?php endforeach; ?>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Right - Content -->
            <div class="workflow-content">
                <div class="section-badge">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="8" height="8" rx="2"/>
                        <rect x="13" y="13" width="8" height="8" rx="2"/>
                        <path d="m7 7 10 10"/>
                    </svg>
                    <span>Workflow Builder</span>
                </div>

                <h2 class="section-title">
                    Build any automation <span class="gradient-text">visually</span>
                </h2>

                <p class="section-description">
                    Drag, drop, connect. Create complex automations without writing a single line of code. Trigger on any WordPress event and connect to 50+ services.
                </p>

                <ul class="feature-list">
                    <?php foreach ( $features as $feature ) : ?>
                    <li class="feature-item">
                        <div class="feature-icon">
                            <?php if ( $feature['icon'] === 'zap' ) : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
                            </svg>
                            <?php elseif ( $feature['icon'] === 'database' ) : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <ellipse cx="12" cy="5" rx="9" ry="3"/>
                                <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/>
                                <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
                            </svg>
                            <?php elseif ( $feature['icon'] === 'workflow' ) : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="8" height="8" rx="2"/>
                                <rect x="13" y="13" width="8" height="8" rx="2"/>
                                <path d="m7 7 10 10"/>
                            </svg>
                            <?php elseif ( $feature['icon'] === 'clock' ) : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                            <?php endif; ?>
                        </div>
                        <span><?php echo esc_html( $feature['text'] ); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#" class="btn btn-hero btn-lg group">
                    Try Workflow Builder
                    <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
