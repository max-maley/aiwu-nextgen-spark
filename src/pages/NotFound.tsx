import { useLocation } from "react-router-dom";
import { useEffect } from "react";
import { Button } from "@/components/ui/button";
import { Home, ArrowLeft } from "lucide-react";

const NotFound = () => {
  const location = useLocation();

  useEffect(() => {
    console.error("404 Error: User attempted to access non-existent route:", location.pathname);
  }, [location.pathname]);

  return (
    <div className="min-h-screen flex items-center justify-center relative overflow-hidden">
      {/* Background effects */}
      <div className="absolute inset-0 bg-gradient-mesh pointer-events-none opacity-50" />
      <div className="absolute inset-0 grid-pattern opacity-30" />
      
      {/* Floating orb */}
      <div className="absolute top-1/3 left-1/3 w-96 h-96 bg-primary/10 rounded-full blur-3xl animate-float opacity-50" />
      
      <div className="relative z-10 text-center px-4">
        {/* 404 Number */}
        <h1 className="font-display text-[120px] sm:text-[180px] font-bold leading-none gradient-text mb-4">
          404
        </h1>
        
        <h2 className="font-display text-2xl sm:text-3xl font-semibold mb-4">
          Page not found
        </h2>
        
        <p className="text-muted-foreground max-w-md mx-auto mb-8">
          The page you're looking for doesn't exist or has been moved. Let's get you back on track.
        </p>
        
        <div className="flex flex-col sm:flex-row items-center justify-center gap-4">
          <Button variant="hero" size="lg" asChild>
            <a href="/">
              <Home className="w-5 h-5" />
              Go Home
            </a>
          </Button>
          
          <Button variant="glass" size="lg" onClick={() => window.history.back()}>
            <ArrowLeft className="w-5 h-5" />
            Go Back
          </Button>
        </div>
      </div>
    </div>
  );
};

export default NotFound;
