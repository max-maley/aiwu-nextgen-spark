import { Button } from "@/components/ui/button";
import { ArrowRight, Code, Check } from "lucide-react";
import { useState } from "react";

const codeExamples = {
  javascript: `// Modify chatbot reply
document.addEventListener('aiwuModifyReply', function(event) {
  let data = event.detail.original;
  data.answer += ' For more info visit aiwuplugin.com.';
  event.detail.setResult(data);
});

// Send a message programmatically
aiwuChatbot.askChatbot("Hi!");`,
  rest: `POST /wp-json/aiwu/v1/simple-text-query
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
}`,
  php: `// Simple text query
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
  ['tokens' => 2000]
);`,
};

type TabKey = keyof typeof codeExamples;

const features = [
  "Execute workflows programmatically",
  "Secure API key authentication",
  "Webhooks for real-time events",
];

const ApiSection = () => {
  const [activeTab, setActiveTab] = useState<TabKey>("javascript");

  const tabs: { key: TabKey; label: string }[] = [
    { key: "javascript", label: "JavaScript" },
    { key: "rest", label: "REST API" },
    { key: "php", label: "PHP" },
  ];

  return (
    <section className="relative py-24 lg:py-32 overflow-hidden">
      {/* Background */}
      <div className="absolute inset-0 bg-gradient-to-b from-background via-card/30 to-background" />
      <div className="absolute inset-0 grid-pattern opacity-20" />
      
      <div className="section-container relative z-10">
        <div className="grid lg:grid-cols-2 gap-16 items-center">
          {/* Left - Content */}
          <div>
            <div className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 mb-6">
              <Code className="w-4 h-4 text-primary" />
              <span className="text-sm font-semibold text-primary uppercase tracking-wider">
                Developer API
              </span>
            </div>
            
            <h2 className="font-display text-3xl sm:text-4xl lg:text-5xl font-bold mb-6">
              Build anything with{" "}
              <span className="gradient-text">our API</span>
            </h2>
            
            <p className="text-lg text-muted-foreground mb-8">
              Full REST API access to all AIWU features. Integrate AI workflows and tools into your own applications.
            </p>
            
            <ul className="space-y-4 mb-10">
              {features.map((feature, index) => (
                <li key={index} className="flex items-center gap-3">
                  <div className="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center">
                    <Check className="w-4 h-4 text-primary" />
                  </div>
                  <span className="text-foreground">{feature}</span>
                </li>
              ))}
            </ul>
            
            <Button variant="hero" size="lg" className="group">
              View Documentation
              <ArrowRight className="w-5 h-5 transition-transform group-hover:translate-x-1" />
            </Button>
          </div>
          
          {/* Right - Code Block */}
          <div className="glass-card overflow-hidden">
            {/* Tabs */}
            <div className="flex items-center gap-1 p-2 bg-muted/50 border-b border-border">
              {tabs.map((tab) => (
                <button
                  key={tab.key}
                  onClick={() => setActiveTab(tab.key)}
                  className={`px-4 py-2 rounded-lg text-sm font-medium transition-all ${
                    activeTab === tab.key
                      ? "bg-primary/10 text-primary"
                      : "text-muted-foreground hover:text-foreground hover:bg-muted"
                  }`}
                >
                  {tab.label}
                </button>
              ))}
            </div>
            
            {/* Code */}
            <div className="p-6 bg-background overflow-x-auto">
              <pre className="text-sm leading-relaxed font-mono">
                <code className="text-muted-foreground">
                  {codeExamples[activeTab].split('\n').map((line, i) => (
                    <span key={i} className="block">
                      {line.startsWith('//') || line.startsWith('#') ? (
                        <span className="text-muted-foreground/60">{line}</span>
                      ) : line.includes('"') ? (
                        <span>
                          {line.split(/(["'][^"']*["'])/).map((part, j) =>
                            part.match(/^["']/) ? (
                              <span key={j} className="text-green-400">{part}</span>
                            ) : (
                              <span key={j}>{part}</span>
                            )
                          )}
                        </span>
                      ) : (
                        <span>{line}</span>
                      )}
                    </span>
                  ))}
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ApiSection;
