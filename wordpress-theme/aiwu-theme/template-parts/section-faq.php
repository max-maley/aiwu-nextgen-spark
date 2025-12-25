<?php
/**
 * FAQ Section Template
 *
 * @package AIWU_Theme
 */

$faqs = array(
    array(
        'question' => 'Does the plugin require a third-party API key to work?',
        'answer' => 'Yes. AIWU does not charge any extra commission or usage fees. You connect your own OpenAI, Gemini, or DeepSeek API key and pay only for what you use — directly to the provider.',
    ),
    array(
        'question' => "How is this plugin adapted to Google's new requirements for AI content?",
        'answer' => "AIWU is designed to meet Google's latest standards for AI-generated content by producing high-quality, human-like articles that follow modern SEO best practices. The plugin supports multiple leading AI providers to generate natural, engaging, and search-optimized content.",
    ),
    array(
        'question' => 'How to install and activate the AIWU plugin?',
        'answer' => "Go to your WordPress dashboard, navigate to the 'Plugins' section, and search for 'AIWU.' Click 'Install Now' and then 'Activate' to enable the free version. Once activated, you can upgrade to the Pro version directly from the plugin dashboard.",
    ),
    array(
        'question' => 'What article fields are available for generation?',
        'answer' => 'The AIWU Content Generator can create multiple article fields, including titles, body text, categories, tags, images, excerpts, alt text, and custom fields. These options help generate SEO-friendly content tailored to your site.',
    ),
    array(
        'question' => 'How does bulk content creation work?',
        'answer' => 'Bulk content creation in AIWU allows you to generate multiple articles simultaneously, using topics and keywords you specify. This feature, available in the Pro version, streamlines large-scale content production with customizable fields.',
    ),
    array(
        'question' => 'Which countries and domains are supported?',
        'answer' => 'The AIWU plugin works in most countries. However, due to API provider restrictions, some regions may have limited functionality. Please check our documentation for the most up-to-date list.',
    ),
);
?>

<section class="faq-section" id="faq">
    <!-- Background -->
    <div class="gradient-mesh opacity-30"></div>

    <div class="section-container">
        <!-- Header -->
        <div class="section-header">
            <h2 class="section-title">
                Frequently Asked <span class="gradient-text">Questions</span>
            </h2>

            <p class="section-description">
                Everything you need to know about AIWU and how it works with your WordPress site.
            </p>
        </div>

        <!-- FAQ Accordion -->
        <div class="faq-list">
            <?php foreach ( $faqs as $index => $faq ) : ?>
            <div class="faq-item glass-card" data-faq-index="<?php echo esc_attr( $index ); ?>">
                <button class="faq-question" aria-expanded="false">
                    <span><?php echo esc_html( $faq['question'] ); ?></span>
                    <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p><?php echo esc_html( $faq['answer'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- CTA Card -->
        <div class="faq-cta glass-card glow-border">
            <div class="faq-cta-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                    <line x1="12" y1="17" x2="12.01" y2="17"/>
                </svg>
            </div>

            <h3 class="faq-cta-title">Still have questions?</h3>

            <p class="faq-cta-text">Can't find the answer you're looking for? Our support team is here to help.</p>

            <a href="#" class="btn btn-hero btn-lg group">
                Visit Knowledge Base
                <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>
