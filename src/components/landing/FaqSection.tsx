import {
  Accordion,
  AccordionContent,
  AccordionItem,
  AccordionTrigger,
} from "@/components/ui/accordion";
import { Button } from "@/components/ui/button";
import { HelpCircle, ArrowRight } from "lucide-react";

const faqs = [
  {
    question: "Does the plugin require a third-party API key to work?",
    answer: "Yes. AIWU does not charge any extra commission or usage fees. You connect your own OpenAI, Gemini, or DeepSeek API key and pay only for what you use — directly to the provider.",
  },
  {
    question: "How is this plugin adapted to Google's new requirements for AI content?",
    answer: "AIWU is designed to meet Google's latest standards for AI-generated content by producing high-quality, human-like articles that follow modern SEO best practices. The plugin supports multiple leading AI providers to generate natural, engaging, and search-optimized content.",
  },
  {
    question: "How to install and activate the AIWU plugin?",
    answer: "Go to your WordPress dashboard, navigate to the 'Plugins' section, and search for 'AIWU.' Click 'Install Now' and then 'Activate' to enable the free version. Once activated, you can upgrade to the Pro version directly from the plugin dashboard.",
  },
  {
    question: "What article fields are available for generation?",
    answer: "The AIWU Content Generator can create multiple article fields, including titles, body text, categories, tags, images, excerpts, alt text, and custom fields. These options help generate SEO-friendly content tailored to your site.",
  },
  {
    question: "How does bulk content creation work?",
    answer: "Bulk content creation in AIWU allows you to generate multiple articles simultaneously, using topics and keywords you specify. This feature, available in the Pro version, streamlines large-scale content production with customizable fields.",
  },
  {
    question: "Which countries and domains are supported?",
    answer: "The AIWU plugin works in most countries. However, due to API provider restrictions, some regions may have limited functionality. Please check our documentation for the most up-to-date list.",
  },
];

const FaqSection = () => {
  return (
    <section className="relative py-24 lg:py-32 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-mesh pointer-events-none opacity-30" />
      
      <div className="section-container relative z-10">
        {/* Header */}
        <div className="text-center max-w-2xl mx-auto mb-16">
          <h2 className="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
            Frequently Asked <span className="gradient-text">Questions</span>
          </h2>
          
          <p className="text-lg text-muted-foreground">
            Everything you need to know about AIWU and how it works with your WordPress site.
          </p>
        </div>
        
        {/* FAQ Accordion */}
        <div className="max-w-3xl mx-auto mb-12">
          <Accordion type="single" collapsible className="space-y-4">
            {faqs.map((faq, index) => (
              <AccordionItem
                key={index}
                value={`item-${index}`}
                className="glass-card px-6 border-border/50 data-[state=open]:border-primary/30 transition-colors"
              >
                <AccordionTrigger className="text-left font-display font-semibold text-base sm:text-lg hover:text-primary transition-colors py-6 [&[data-state=open]]:text-primary">
                  {faq.question}
                </AccordionTrigger>
                <AccordionContent className="text-muted-foreground pb-6 leading-relaxed">
                  {faq.answer}
                </AccordionContent>
              </AccordionItem>
            ))}
          </Accordion>
        </div>
        
        {/* CTA Card */}
        <div className="glass-card glow-border p-8 sm:p-12 text-center max-w-2xl mx-auto">
          <div className="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-6">
            <HelpCircle className="w-8 h-8 text-primary" />
          </div>
          
          <h3 className="font-display text-2xl font-bold mb-4">
            Still have questions?
          </h3>
          
          <p className="text-muted-foreground mb-8">
            Can't find the answer you're looking for? Our support team is here to help.
          </p>
          
          <Button variant="hero" size="lg" className="group">
            Visit Knowledge Base
            <ArrowRight className="w-5 h-5 transition-transform group-hover:translate-x-1" />
          </Button>
        </div>
      </div>
    </section>
  );
};

export default FaqSection;
