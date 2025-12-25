import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Menu, X, Zap } from "lucide-react";

const navLinks = [
  { label: "Features", href: "#features" },
  { label: "Apps", href: "#apps" },
  { label: "API", href: "#api" },
  { label: "Pricing", href: "#pricing" },
  { label: "Docs", href: "#docs" },
];

const Navbar = () => {
  const [isOpen, setIsOpen] = useState(false);

  return (
    <nav className="fixed top-0 left-0 right-0 z-50">
      <div className="mx-4 mt-4">
        <div className="glass-card px-4 sm:px-6 py-4 max-w-7xl mx-auto">
          <div className="flex items-center justify-between">
            {/* Logo */}
            <a href="/" className="flex items-center gap-3 group">
              <div className="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-accent flex items-center justify-center shadow-glow-sm group-hover:shadow-glow transition-shadow">
                <Zap className="w-5 h-5 text-primary-foreground" />
              </div>
              <span className="font-display font-bold text-xl">AIWU</span>
            </a>
            
            {/* Desktop Nav */}
            <div className="hidden lg:flex items-center gap-1">
              {navLinks.map((link) => (
                <a
                  key={link.label}
                  href={link.href}
                  className="px-4 py-2 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-lg hover:bg-muted"
                >
                  {link.label}
                </a>
              ))}
            </div>
            
            {/* Desktop CTA */}
            <div className="hidden lg:flex items-center gap-3">
              <Button variant="ghost" size="sm">
                Log In
              </Button>
              <Button variant="default" size="sm">
                Get Started
              </Button>
            </div>
            
            {/* Mobile Menu Button */}
            <button
              onClick={() => setIsOpen(!isOpen)}
              className="lg:hidden p-2 rounded-lg hover:bg-muted transition-colors"
            >
              {isOpen ? (
                <X className="w-6 h-6" />
              ) : (
                <Menu className="w-6 h-6" />
              )}
            </button>
          </div>
          
          {/* Mobile Menu */}
          {isOpen && (
            <div className="lg:hidden pt-4 pb-2 border-t border-border mt-4 animate-fade-in">
              <div className="flex flex-col gap-1">
                {navLinks.map((link) => (
                  <a
                    key={link.label}
                    href={link.href}
                    className="px-4 py-3 text-sm font-medium text-muted-foreground hover:text-foreground transition-colors rounded-lg hover:bg-muted"
                    onClick={() => setIsOpen(false)}
                  >
                    {link.label}
                  </a>
                ))}
                <div className="flex flex-col gap-2 mt-4 pt-4 border-t border-border">
                  <Button variant="ghost" className="justify-start">
                    Log In
                  </Button>
                  <Button variant="default">
                    Get Started
                  </Button>
                </div>
              </div>
            </div>
          )}
        </div>
      </div>
    </nav>
  );
};

export default Navbar;
