import { MessageSquare, FileText, Sparkles, Wand2, Bot, Layers, Settings, BookOpen, ArrowRight } from "lucide-react";

const apps = [
  {
    category: "Engagement Tools",
    items: [
      { name: "AI ChatBot", description: "24/7 customer support powered by AI", icon: MessageSquare },
      { name: "AI Forms Builder", description: "Smart forms that adapt to responses", icon: FileText },
    ],
  },
  {
    category: "Content Automation",
    items: [
      { name: "Bulk Post Generator", description: "Generate multiple posts at once", icon: Layers },
      { name: "Autoblogging", description: "Automated content publishing", icon: Bot },
      { name: "WooCommerce Generator", description: "Create products with AI", icon: Sparkles },
      { name: "Magic Text Enhancer", description: "Improve text with one click", icon: Wand2 },
    ],
  },
  {
    category: "Advanced Features",
    items: [
      { name: "MCP Integration", description: "Connect to external services", icon: Settings },
      { name: "AI Training", description: "Train AI on your content", icon: BookOpen },
    ],
  },
];

const AppsSection = () => {
  return (
    <section className="relative py-24 lg:py-32 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-mesh pointer-events-none opacity-50" />
      
      <div className="section-container relative z-10">
        {/* Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
            <Sparkles className="w-4 h-4 text-primary" />
            <span className="text-sm font-semibold text-primary uppercase tracking-wider">
              Ready-to-Use Apps
            </span>
          </div>
          
          <h2 className="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
            Powerful tools, <span className="gradient-text">zero setup</span>
          </h2>
          
          <p className="text-lg text-muted-foreground">
            Standalone AI features that work instantly. No workflow building required—just enable and start using.
          </p>
        </div>
        
        {/* Apps Grid */}
        <div className="space-y-16">
          {apps.map((category, categoryIndex) => (
            <div key={categoryIndex}>
              <h3 className="text-xs font-semibold text-muted-foreground uppercase tracking-[0.2em] mb-6">
                {category.category}
              </h3>
              
              <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                {category.items.map((app, appIndex) => (
                  <div
                    key={appIndex}
                    className="group glass-card p-6 hover:border-primary/30 transition-all duration-300 hover:-translate-y-1 cursor-pointer"
                  >
                    <div className="w-12 h-12 rounded-xl bg-muted flex items-center justify-center mb-5 transition-all group-hover:bg-primary/10 group-hover:scale-105">
                      <app.icon className="w-6 h-6 text-muted-foreground group-hover:text-primary transition-colors" />
                    </div>
                    
                    <h4 className="font-display text-lg font-semibold mb-2 group-hover:text-primary transition-colors">
                      {app.name}
                    </h4>
                    
                    <p className="text-sm text-muted-foreground mb-4">
                      {app.description}
                    </p>
                    
                    <span className="inline-flex items-center gap-1.5 text-sm font-semibold text-primary opacity-0 group-hover:opacity-100 transition-opacity">
                      Learn more
                      <ArrowRight className="w-4 h-4 transition-transform group-hover:translate-x-1" />
                    </span>
                  </div>
                ))}
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default AppsSection;
