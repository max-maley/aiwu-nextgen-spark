import { ArrowRight } from "lucide-react";

const providers = [
  {
    name: "OpenAI API",
    description: "Access GPT-4o, GPT-4 Turbo, and all major OpenAI models with full support.",
    color: "#10a37f",
    link: "#",
  },
  {
    name: "Anthropic Claude",
    description: "Access Claude Sonnet, Opus and Haiku — fully supported and always up to date.",
    color: "#d97757",
    link: "#",
  },
  {
    name: "DeepSeek API",
    description: "Fully supports DeepSeek's high-efficiency, low-cost reasoning models.",
    color: "#3b82f6",
    link: "#",
  },
  {
    name: "Google Gemini",
    description: "Full support for Google's Gemini multimodal AI suite.",
    color: "#ea4335",
    link: "#",
  },
  {
    name: "Perplexity AI",
    description: "Supports Perplexity's search+reasoning AI models.",
    color: "#20808d",
    link: "#",
  },
  {
    name: "OpenRouter",
    description: "Access 100+ models through a single API with unified pricing.",
    color: "#8b5cf6",
    link: "#",
  },
];

const ProvidersSection = () => {
  return (
    <section className="relative py-24 lg:py-32 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-to-b from-card/30 to-background" />
      
      <div className="section-container relative z-10">
        {/* Header */}
        <div className="text-center max-w-3xl mx-auto mb-16">
          <h2 className="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
            Supported AI <span className="gradient-text">Models & APIs</span>
          </h2>
          
          <p className="text-lg text-muted-foreground">
            AIWU does not charge any extra usage fees. You connect your own API key — and keep full control.
          </p>
        </div>
        
        {/* Providers Grid */}
        <div className="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
          {providers.map((provider, index) => (
            <div
              key={index}
              className="group glass-card p-6 hover:-translate-y-1 transition-all duration-300 cursor-pointer"
              style={{
                '--provider-color': provider.color,
              } as React.CSSProperties}
            >
              <div className="flex items-center gap-4 mb-4">
                <div 
                  className="w-12 h-12 rounded-xl flex items-center justify-center transition-all group-hover:scale-105"
                  style={{ backgroundColor: `${provider.color}20` }}
                >
                  <div 
                    className="w-6 h-6 rounded-full"
                    style={{ backgroundColor: provider.color }}
                  />
                </div>
                <h3 className="font-display text-lg font-semibold">
                  {provider.name}
                </h3>
              </div>
              
              <p className="text-sm text-muted-foreground mb-4">
                {provider.description}
              </p>
              
              <a 
                href={provider.link}
                className="inline-flex items-center gap-1.5 text-sm font-semibold transition-all group-hover:gap-2"
                style={{ color: provider.color }}
              >
                Get API Key
                <ArrowRight className="w-4 h-4" />
              </a>
            </div>
          ))}
        </div>
        
        {/* Security Note */}
        <div className="glass-card p-6 text-center max-w-3xl mx-auto">
          <p className="text-muted-foreground">
            <span className="font-semibold text-foreground">Security & Privacy:</span>{" "}
            All API integrations use your own credentials. No data is stored or processed by AIWU servers.
          </p>
        </div>
      </div>
    </section>
  );
};

export default ProvidersSection;
