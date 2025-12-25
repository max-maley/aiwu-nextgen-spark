import { Button } from "@/components/ui/button";
import { ArrowRight, Check, Zap, Shield, Clock } from "lucide-react";

const highlights = [
  { icon: Zap, text: "Instant setup" },
  { icon: Shield, text: "No credit card required" },
  { icon: Clock, text: "Cancel anytime" },
];

const CtaSection = () => {
  return (
    <section className="relative py-24 lg:py-32 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-to-b from-background to-card/50" />
      <div className="absolute inset-0 grid-pattern opacity-20" />
      
      {/* Glowing orbs */}
      <div className="absolute top-1/2 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-float opacity-50" />
      <div className="absolute top-1/2 right-1/4 w-72 h-72 bg-secondary/15 rounded-full blur-3xl animate-float-slow opacity-40" />
      
      <div className="section-container relative z-10">
        <div className="glass-card glow-border p-8 sm:p-12 lg:p-16 text-center max-w-4xl mx-auto">
          <h2 className="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
            Ready to automate your{" "}
            <span className="gradient-text">WordPress?</span>
          </h2>
          
          <p className="text-lg text-muted-foreground max-w-xl mx-auto mb-10">
            Join thousands of WordPress users who are saving time and creating better content with AI-powered automation.
          </p>
          
          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row items-center justify-center gap-4 mb-10">
            <Button variant="hero" size="xl" className="group w-full sm:w-auto">
              Get Started Free
              <ArrowRight className="w-5 h-5 transition-transform group-hover:translate-x-1" />
            </Button>
            <Button variant="outline-glow" size="xl" className="w-full sm:w-auto">
              View Pricing
            </Button>
          </div>
          
          {/* Highlights */}
          <div className="flex flex-wrap items-center justify-center gap-6">
            {highlights.map((highlight, index) => (
              <div key={index} className="flex items-center gap-2 text-muted-foreground">
                <highlight.icon className="w-4 h-4 text-primary" />
                <span className="text-sm font-medium">{highlight.text}</span>
              </div>
            ))}
          </div>
        </div>
      </div>
    </section>
  );
};

export default CtaSection;
