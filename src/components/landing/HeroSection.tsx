import { Button } from "@/components/ui/button";
import { Play, ArrowRight, Sparkles } from "lucide-react";
import { useState } from "react";

const HeroSection = () => {
  const [isVideoPlaying, setIsVideoPlaying] = useState(false);

  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background effects */}
      <div className="absolute inset-0 bg-gradient-mesh pointer-events-none" />
      <div className="absolute inset-0 grid-pattern opacity-40" />
      
      {/* Floating orbs */}
      <div className="absolute top-1/4 left-1/4 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-float opacity-50" />
      <div className="absolute bottom-1/4 right-1/4 w-72 h-72 bg-secondary/20 rounded-full blur-3xl animate-float-slow opacity-40" />
      
      <div className="section-container relative z-10 py-20 lg:py-32">
        <div className="text-center max-w-4xl mx-auto">
          {/* Badge */}
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card mb-8 animate-fade-in">
            <Sparkles className="w-4 h-4 text-primary" />
            <span className="text-sm font-medium text-muted-foreground">
              Trusted by 1,000+ WordPress sites
            </span>
          </div>
          
          {/* Main headline */}
          <h1 className="font-display text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-tight mb-6 animate-fade-in-up">
            WordPress automations{" "}
            <span className="gradient-text">you'll actually use</span>
          </h1>
          
          {/* Subtitle */}
          <p className="text-lg sm:text-xl text-muted-foreground max-w-2xl mx-auto mb-10 animate-fade-in-up" style={{ animationDelay: '0.1s' }}>
            Connect AI to your WordPress and build workflows from customer support to content—without code.
          </p>
          
          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16 animate-fade-in-up" style={{ animationDelay: '0.2s' }}>
            <Button variant="hero" size="xl" className="group">
              Get Started Free
              <ArrowRight className="w-5 h-5 transition-transform group-hover:translate-x-1" />
            </Button>
            <Button variant="glass" size="xl">
              View Documentation
            </Button>
          </div>
          
          {/* Video Preview */}
          <div className="animate-fade-in-up" style={{ animationDelay: '0.3s' }}>
            <div className="glass-card glow-border p-4 sm:p-6 max-w-4xl mx-auto">
              <div 
                className="relative aspect-video bg-background rounded-xl overflow-hidden cursor-pointer group"
                onClick={() => setIsVideoPlaying(true)}
              >
                {!isVideoPlaying ? (
                  <>
                    <img 
                      src="https://img.youtube.com/vi/fl-sqUYyZ70/maxresdefault.jpg" 
                      alt="AIWU Plugin Demo"
                      className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                    />
                    <div className="absolute inset-0 bg-background/20 transition-opacity group-hover:opacity-0" />
                    <button className="absolute inset-0 flex items-center justify-center">
                      <div className="w-20 h-20 rounded-full bg-primary flex items-center justify-center shadow-glow transition-all group-hover:scale-110 group-hover:shadow-glow-lg">
                        <Play className="w-8 h-8 text-primary-foreground ml-1" fill="currentColor" />
                      </div>
                    </button>
                  </>
                ) : (
                  <iframe
                    src="https://www.youtube.com/embed/fl-sqUYyZ70?autoplay=1&rel=0"
                    title="AIWU Plugin Demo"
                    className="w-full h-full"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowFullScreen
                  />
                )}
              </div>
            </div>
          </div>
        </div>
      </div>
      
      {/* Bottom gradient fade */}
      <div className="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-t from-background to-transparent pointer-events-none" />
    </section>
  );
};

export default HeroSection;
