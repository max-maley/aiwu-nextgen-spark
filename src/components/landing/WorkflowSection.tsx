import { Button } from "@/components/ui/button";
import { ArrowRight, Workflow, Zap, Clock, Database } from "lucide-react";

const integrations = [
  { name: "WordPress", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/WordPress_blue_logo.svg" },
  { name: "WooCommerce", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/Woo.png" },
  { name: "OpenAI", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/Open-AI.png" },
  { name: "Gmail", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/gmail.png" },
  { name: "Claude", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/Claude.png" },
  { name: "Gemini", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/Gemini.png" },
  { name: "Slack", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/Slack.png" },
  { name: "Telegram", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/Telegram.png" },
  { name: "DeepSeek", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/DeepSeek.png" },
  { name: "Perplexity", icon: "https://aiwuplugin.com/wp-content/uploads/2025/11/Perplexity.png" },
];

const features = [
  { icon: Zap, text: "Trigger on posts, orders, comments, forms" },
  { icon: Database, text: "Connect to external APIs and databases" },
  { icon: Workflow, text: "Add AI processing at any step" },
  { icon: Clock, text: "Schedule and monitor your workflows" },
];

const WorkflowSection = () => {
  return (
    <section className="relative py-24 lg:py-32 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-to-b from-background via-card/50 to-background" />
      <div className="absolute inset-0 dot-pattern opacity-30" />
      
      <div className="section-container relative z-10">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          {/* Left - Visual */}
          <div className="order-2 lg:order-1">
            <div className="glass-card glow-border p-6 lg:p-8">
              <div className="relative rounded-xl bg-background p-8 min-h-[400px] grid-pattern overflow-hidden">
                {/* Center AIWU logo */}
                <div className="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                  <div className="w-24 h-24 rounded-2xl bg-gradient-to-br from-primary to-accent p-4 shadow-glow animate-pulse-glow">
                    <img 
                      src="https://aiwuplugin.com/wp-content/uploads/2024/11/icon.png" 
                      alt="AIWU" 
                      className="w-full h-full object-contain"
                    />
                  </div>
                </div>
                
                {/* Orbiting integrations */}
                <div className="absolute inset-0">
                  {integrations.map((integration, index) => {
                    const angle = (index / integrations.length) * 2 * Math.PI;
                    const radius = 140;
                    const x = Math.cos(angle) * radius + 50;
                    const y = Math.sin(angle) * radius + 50;
                    
                    return (
                      <div
                        key={integration.name}
                        className="absolute w-14 h-14 rounded-xl glass-card p-2 hover:border-primary/50 hover:shadow-glow-sm transition-all duration-300 hover:scale-110"
                        style={{
                          left: `calc(50% + ${x}px - 28px)`,
                          top: `calc(50% + ${y}px - 28px)`,
                          animationDelay: `${index * 0.2}s`,
                        }}
                      >
                        <img 
                          src={integration.icon} 
                          alt={integration.name}
                          className="w-full h-full object-contain"
                        />
                      </div>
                    );
                  })}
                </div>
                
                {/* Connection lines (SVG) */}
                <svg className="absolute inset-0 w-full h-full pointer-events-none opacity-30">
                  {integrations.map((_, index) => {
                    const angle = (index / integrations.length) * 2 * Math.PI;
                    const radius = 140;
                    const x = Math.cos(angle) * radius;
                    const y = Math.sin(angle) * radius;
                    
                    return (
                      <line
                        key={index}
                        x1="50%"
                        y1="50%"
                        x2={`calc(50% + ${x}px)`}
                        y2={`calc(50% + ${y}px)`}
                        stroke="hsl(var(--primary))"
                        strokeWidth="1"
                        strokeDasharray="4 4"
                        className="opacity-40"
                      />
                    );
                  })}
                </svg>
              </div>
            </div>
          </div>
          
          {/* Right - Content */}
          <div className="order-1 lg:order-2">
            <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
              <Workflow className="w-4 h-4 text-primary" />
              <span className="text-sm font-semibold text-primary uppercase tracking-wider">
                Workflow Builder
              </span>
            </div>
            
            <h2 className="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
              Build any automation{" "}
              <span className="gradient-text">visually</span>
            </h2>
            
            <p className="text-lg text-muted-foreground mb-8">
              Drag, drop, connect. Create complex automations without writing a single line of code. 
              Trigger on any WordPress event and connect to 50+ services.
            </p>
            
            <ul className="space-y-4 mb-10">
              {features.map((feature, index) => (
                <li key={index} className="flex items-center gap-4">
                  <div className="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <feature.icon className="w-5 h-5 text-primary" />
                  </div>
                  <span className="text-foreground">{feature.text}</span>
                </li>
              ))}
            </ul>
            
            <Button variant="hero" size="lg" className="group">
              Try Workflow Builder
              <ArrowRight className="w-5 h-5 transition-transform group-hover:translate-x-1" />
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default WorkflowSection;
