import { Button } from "@/components/ui/button";
import AiwuLogo from "@/components/ui/AiwuLogo";

const footerLinks = {
  Resources: [
    { label: "About", href: "#" },
    { label: "Pricing", href: "#" },
    { label: "My Account", href: "#" },
    { label: "Community", href: "#" },
    { label: "Knowledge Base", href: "#" },
    { label: "Blog", href: "#" },
    { label: "Roadmap", href: "#" },
    { label: "Contact", href: "#" },
    { label: "Developer API", href: "#" },
    { label: "Workflow Templates", href: "#" },
    { label: "Workflow Integrations", href: "#" },
    { label: "Supported AI Models", href: "#" },
  ],
  Solutions: [
    { label: "Workflow Builder", href: "#" },
    { label: "Claude MCP Integration", href: "#" },
    { label: "ChatGPT MCP Integration", href: "#" },
    { label: "AI ChatBot", href: "#" },
    { label: "AI Forms Builder", href: "#" },
    { label: "Autoblogging", href: "#" },
    { label: "Bulk Article Generator", href: "#" },
    { label: "Smart Crosslinking", href: "#" },
    { label: "Bulk Post Editor", href: "#" },
    { label: "WooCommerce Generator", href: "#" },
    { label: "AI Training & Embedding", href: "#" },
  ],
};

const legalLinks = [
  { label: "Privacy Policy", href: "#" },
  { label: "Terms of Service", href: "#" },
  { label: "Refund Policy", href: "#" },
  { label: "AI Disclaimer", href: "#" },
  { label: "Cookie Policy", href: "#" },
];

const Footer = () => {
  return (
    <footer className="relative bg-card/50 border-t border-border">
      <div className="section-container py-16 lg:py-20">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">
          {/* Brand Section */}
          <div className="lg:col-span-4">
            {/* Logo */}
            <a href="/" className="flex items-center gap-3 mb-6">
              <AiwuLogo size="md" />
              <span className="font-display font-bold text-2xl">AIWU</span>
            </a>
            
            <p className="text-muted-foreground text-sm leading-relaxed mb-8 max-w-sm">
              AI-powered WordPress plugin for automation, content generation, and workflow optimization. Transform your website with artificial intelligence.
            </p>
            
            {/* CTA Buttons */}
            <div className="flex flex-wrap gap-3">
              <Button variant="hero" size="default">
                Get Started
              </Button>
              <Button variant="outline-glow" size="default">
                Download Free
              </Button>
            </div>
          </div>
          
          {/* Resources Links */}
          <div className="lg:col-span-4">
            <h3 className="font-display font-semibold text-lg mb-6">
              Resources
            </h3>
            <ul className="space-y-3">
              {footerLinks.Resources.map((link) => (
                <li key={link.label}>
                  <a
                    href={link.href}
                    className="text-sm text-muted-foreground hover:text-foreground transition-colors"
                  >
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>
          
          {/* Solutions Links */}
          <div className="lg:col-span-4">
            <h3 className="font-display font-semibold text-lg mb-6">
              Solutions
            </h3>
            <ul className="space-y-3">
              {footerLinks.Solutions.map((link) => (
                <li key={link.label}>
                  <a
                    href={link.href}
                    className="text-sm text-muted-foreground hover:text-foreground transition-colors"
                  >
                    {link.label}
                  </a>
                </li>
              ))}
            </ul>
          </div>
        </div>
        
        {/* Bottom Bar */}
        <div className="mt-16 pt-8 border-t border-border flex flex-col lg:flex-row items-center justify-between gap-6">
          <p className="text-sm text-muted-foreground">
            Copyright © {new Date().getFullYear()} AIWU. All rights reserved.
          </p>
          
          <div className="flex flex-wrap items-center justify-center gap-6">
            {legalLinks.map((link) => (
              <a
                key={link.label}
                href={link.href}
                className="text-sm text-muted-foreground hover:text-foreground transition-colors"
              >
                {link.label}
              </a>
            ))}
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
