<?php
/**
 * API Section Template
 *
 * @package AIWU_Theme
 */

$code_examples = array(
    'javascript' => '// Modify chatbot reply
document.addEventListener(\'aiwuModifyReply\', function(event) {
  let data = event.detail.original;
  data.answer += \' For more info visit aiwuplugin.com.\';
  event.detail.setResult(data);
});

// Send a message programmatically
aiwuChatbot.askChatbot("Hi!");',
    'rest' => 'POST /wp-json/aiwu/v1/simple-text-query
{
  "prompt": "Give me five facts about France.",
  "options": {
    "tokens": 1500
  }
}

POST /wp-json/aiwu/v1/ask-chatbot
{
  "message": "Can you help me?",
  "bot_id": 14
}',
    'php' => '// Simple text query
aiwuSimpleTextQuery(
  $prompt,
  $options = false
);

// Chatbot message
aiwuAskChatbot(
  $botId,
  $message,
  $options = false
);

// Example usage
$response = aiwuSimpleTextQuery(
  "Write a blog post about AI",
  [\'tokens\' => 2000]
);',
);

$features = array(
    'Execute workflows programmatically',
    'Secure API key authentication',
    'Webhooks for real-time events',
);
?>

<section class="api-section" id="api">
    <!-- Background -->
    <div class="section-bg-gradient-alt"></div>
    <div class="grid-pattern"></div>

    <div class="section-container">
        <div class="api-grid">
            <!-- Left - Content -->
            <div class="api-content">
                <div class="section-badge">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="16 18 22 12 16 6"/>
                        <polyline points="8 6 2 12 8 18"/>
                    </svg>
                    <span>Developer API</span>
                </div>

                <h2 class="section-title">
                    Build anything with <span class="gradient-text">our API</span>
                </h2>

                <p class="section-description">
                    Full REST API access to all AIWU features. Integrate AI workflows and tools into your own applications.
                </p>

                <ul class="check-list">
                    <?php foreach ( $features as $feature ) : ?>
                    <li class="check-item">
                        <div class="check-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </div>
                        <span><?php echo esc_html( $feature ); ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <a href="#" class="btn btn-hero btn-lg group">
                    View Documentation
                    <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Right - Code Block -->
            <div class="code-block glass-card">
                <!-- Tabs -->
                <div class="code-tabs">
                    <button class="code-tab active" data-tab="javascript">JavaScript</button>
                    <button class="code-tab" data-tab="rest">REST API</button>
                    <button class="code-tab" data-tab="php">PHP</button>
                </div>

                <!-- Code -->
                <div class="code-content">
                    <?php foreach ( $code_examples as $key => $code ) : ?>
                    <pre class="code-example <?php echo $key === 'javascript' ? 'active' : ''; ?>" data-tab="<?php echo esc_attr( $key ); ?>"><code><?php echo esc_html( $code ); ?></code></pre>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
