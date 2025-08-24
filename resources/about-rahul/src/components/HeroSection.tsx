import { ArrowDown, Play } from "lucide-react";
import { Button } from "@/components/ui/button";
import heroImage from "@lovable-uploads/500a03e7-bdaa-4e80-aa11-5803189cef21.png";

const HeroSection = () => {
  return (
    <section className="relative min-h-screen flex items-center justify-center overflow-hidden">
      {/* Background with overlay */}
      <div className="absolute inset-0 bg-gradient-to-br from-background via-background/95 to-card"></div>
      
      {/* Animated background elements */}
      <div className="absolute inset-0 opacity-20">
        <div className="absolute top-20 left-20 w-32 h-32 bg-qa-orange rounded-full blur-xl animate-float"></div>
        <div className="absolute bottom-20 right-20 w-40 h-40 bg-qa-purple rounded-full blur-xl animate-float" style={{ animationDelay: "1s" }}></div>
        <div className="absolute top-1/2 left-1/3 w-24 h-24 bg-qa-blue rounded-full blur-xl animate-float" style={{ animationDelay: "2s" }}></div>
      </div>

      <div className="container mx-auto px-6 text-center relative z-10">
        <div className="max-w-4xl mx-auto">
          {/* Profile Image */}
          <div className="mb-8">
            <div className="relative inline-block">
              <img
                src={heroImage}
                alt="Rahul Shetty - QA Educator and Entrepreneur"
                className="w-40 h-40 mx-auto rounded-full border-4 border-primary glow-orange object-cover bg-white/10"
              />
              <div className="absolute -top-2 -right-2 w-8 h-8 bg-qa-success rounded-full border-2 border-background flex items-center justify-center">
                <div className="w-3 h-3 bg-white rounded-full animate-pulse-glow"></div>
              </div>
            </div>
          </div>

          {/* Main Heading */}
          <h1 className="font-playfair text-5xl md:text-7xl lg:text-8xl font-bold mb-6 leading-tight">
            Rahul Shetty
            <span className="block text-gradient">(Venkatesh)</span>
          </h1>

          {/* Subtitle */}
          <p className="text-xl md:text-2xl lg:text-3xl text-muted-foreground mb-8 font-light">
            QA Educator • Entrepreneur • Global Speaker
          </p>

          {/* Key Metrics */}
          <div className="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12">
            <div className="text-center">
              <div className="text-3xl md:text-4xl font-bold text-gradient mb-2">1M+</div>
              <div className="text-sm text-muted-foreground">QA Learners</div>
            </div>
            <div className="text-center">
              <div className="text-3xl md:text-4xl font-bold text-gradient mb-2">25+</div>
              <div className="text-sm text-muted-foreground">Best Sellers</div>
            </div>
            <div className="text-center">
              <div className="text-3xl md:text-4xl font-bold text-gradient mb-2">150+</div>
              <div className="text-sm text-muted-foreground">Countries</div>
            </div>
            <div className="text-center">
              <div className="text-3xl md:text-4xl font-bold text-gradient mb-2">300K+</div>
              <div className="text-sm text-muted-foreground">5★ Reviews</div>
            </div>
          </div>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center mb-32">
            <Button 
              size="lg" 
              className="text-lg px-8 py-6 glow-orange"
              onClick={() => window.open('https://www.udemy.com/user/rahul445/', '_blank')}
            >
              <Play className="mr-2 h-5 w-5" />
              View My Courses
            </Button>
            <Button 
              variant="outline" 
              size="lg" 
              className="text-lg px-8 py-6 border-primary text-primary hover:bg-primary hover:text-primary-foreground"
              onClick={() => {
                const journeySection = document.getElementById('journey-section');
                journeySection?.scrollIntoView({ behavior: 'smooth' });
              }}
            >
              View Achievements
            </Button>
          </div>

          {/* Scroll Indicator */}
        </div>
        
        {/* Enhanced Scroll Indicator - positioned outside main content */}
        <div className="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-30">
          <div 
            className="relative group cursor-pointer"
            onClick={() => {
              const nextSection = document.getElementById('journey-section') || document.querySelector('section:nth-of-type(2)');
              nextSection?.scrollIntoView({ behavior: 'smooth' });
            }}
          >
            {/* Main circle container with solid background */}
            <div className="relative w-12 h-12 bg-primary/90 border-2 border-primary rounded-full flex items-center justify-center group-hover:bg-primary transition-all duration-300 group-hover:scale-110 shadow-lg">
              {/* Arrow icon */}
              <ArrowDown className="h-5 w-5 text-white animate-bounce group-hover:animate-none transition-all duration-300" />
            </div>
            
            {/* Outer glow ring */}
            <div className="absolute inset-0 border-2 border-primary/30 rounded-full animate-pulse opacity-60 scale-125"></div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;