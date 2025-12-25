<footer class="footer">
    <div class="section-container">
        <div class="footer-grid">
            <!-- Brand Section -->
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
                    <?php echo aiwu_get_logo_svg( 'md' ); ?>
                    <span class="footer-brand-name"><?php bloginfo( 'name' ); ?></span>
                </a>

                <p class="footer-description">
                    <?php echo esc_html( get_bloginfo( 'description' ) ?: 'AI-powered WordPress plugin for automation, content generation, and workflow optimization. Transform your website with artificial intelligence.' ); ?>
                </p>

                <div class="footer-cta">
                    <a href="<?php echo esc_url( get_theme_mod( 'aiwu_cta_primary_url', '#' ) ); ?>" class="btn btn-hero">
                        <?php echo esc_html( get_theme_mod( 'aiwu_cta_primary_text', 'Get Started' ) ); ?>
                    </a>
                    <a href="#" class="btn btn-outline-glow">Download Free</a>
                </div>
            </div>

            <!-- Resources Links -->
            <div class="footer-links-section">
                <h3 class="footer-heading">Resources</h3>
                <ul class="footer-links">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">Knowledge Base</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Roadmap</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Developer API</a></li>
                    <li><a href="#">Workflow Templates</a></li>
                    <li><a href="#">Workflow Integrations</a></li>
                    <li><a href="#">Supported AI Models</a></li>
                </ul>
            </div>

            <!-- Solutions Links -->
            <div class="footer-links-section">
                <h3 class="footer-heading">Solutions</h3>
                <ul class="footer-links">
                    <li><a href="#">Workflow Builder</a></li>
                    <li><a href="#">Claude MCP Integration</a></li>
                    <li><a href="#">ChatGPT MCP Integration</a></li>
                    <li><a href="#">AI ChatBot</a></li>
                    <li><a href="#">AI Forms Builder</a></li>
                    <li><a href="#">Autoblogging</a></li>
                    <li><a href="#">Bulk Article Generator</a></li>
                    <li><a href="#">Smart Crosslinking</a></li>
                    <li><a href="#">Bulk Post Editor</a></li>
                    <li><a href="#">WooCommerce Generator</a></li>
                    <li><a href="#">AI Training & Embedding</a></li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <p class="footer-copyright">
                Copyright &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
            </p>

            <div class="footer-legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Refund Policy</a>
                <a href="#">AI Disclaimer</a>
                <a href="#">Cookie Policy</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
