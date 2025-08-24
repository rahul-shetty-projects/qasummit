import { Heart } from "lucide-react";

const Footer = () => {
  return (
    <footer className="border-t border-border/50 bg-card/50 py-12">
      <div className="container mx-auto px-6">
        <div className="text-center">
          <div className="text-2xl font-bold text-gradient mb-4">
            RAHUL SHETTY
          </div>
          <p className="text-muted-foreground mb-6 max-w-md mx-auto">
            Empowering QA professionals worldwide through education, innovation, and community.
          </p>
          
          <div className="flex items-center justify-center space-x-2 text-muted-foreground">
            <span>Made with</span>
            <Heart className="h-4 w-4 text-red-500 fill-red-500" />
            <span>for the QA Community</span>
          </div>
          
          <div className="mt-6 pt-6 border-t border-border/50 text-sm text-muted-foreground">
            <p>&copy; 2025 Rahul Shetty Academy. All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;