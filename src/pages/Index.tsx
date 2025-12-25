import Navbar from "@/components/landing/Navbar";
import HeroSection from "@/components/landing/HeroSection";
import WorkflowSection from "@/components/landing/WorkflowSection";
import AppsSection from "@/components/landing/AppsSection";
import ApiSection from "@/components/landing/ApiSection";
import ProvidersSection from "@/components/landing/ProvidersSection";
import FaqSection from "@/components/landing/FaqSection";
import CtaSection from "@/components/landing/CtaSection";
import Footer from "@/components/landing/Footer";

const Index = () => {
  return (
    <div className="min-h-screen bg-background text-foreground overflow-x-hidden">
      {/* SEO Meta */}
      <title>AIWU - WordPress AI Automation Plugin</title>
      <meta name="description" content="WordPress automations you'll actually use. Connect AI to your WordPress and build workflows from customer support to content—without code." />
      
      <Navbar />
      
      <main>
        <HeroSection />
        <WorkflowSection />
        <AppsSection />
        <ApiSection />
        <ProvidersSection />
        <FaqSection />
        <CtaSection />
      </main>
      
      <Footer />
    </div>
  );
};

export default Index;
