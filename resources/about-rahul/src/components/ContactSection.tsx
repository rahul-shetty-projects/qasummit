import { Linkedin, Youtube, Globe, MessageCircle, BookOpen, Users, Mail } from "lucide-react";
import { Button } from "@/components/ui/button";

const ContactSection = () => {
  const socialLinks = [
    {
      platform: "YouTube Channel",
      handle: "119K+ Subscribers",
      description: "Learn, Earn & Shine in QA Career",
      icon: Youtube,
      color: "text-red-500",
      url: "https://youtube.com/@RahulShettyAcademy"
    },
    {
      platform: "Udemy Instructor",
      handle: "1M+ Total Learners", 
      description: "25+ Best-Selling Courses",
      icon: Globe,
      color: "text-qa-orange",
      url: "https://www.udemy.com/user/rahul445/"
    },
    {
      platform: "LinkedIn Profile",
      handle: "158K+ Followers",
      description: "Top Testing Voice",
      icon: Linkedin,
      color: "text-qa-blue",
      url: "https://www.linkedin.com/in/rahul-shetty-venkatesh/"
    }
  ];


  return (
    <section className="py-20 bg-background" id="contact">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">
            Let's <span className="text-gradient">Connect</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Ready to collaborate, learn, or transform your QA journey? Get in touch.
          </p>
        </div>

        {/* Social Media Links */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
          {socialLinks.map((link, index) => {
            const IconComponent = link.icon;
            return (
              <a 
                key={index}
                href={link.url}
                target="_blank"
                rel="noopener noreferrer"
                className="block"
              >
                <div className="text-center p-8 rounded-2xl bg-gradient-card border border-border/50 hover:border-primary/50 transition-all duration-300 hover:glow-orange group cursor-pointer">
                  <div className="inline-flex items-center justify-center w-20 h-20 rounded-full bg-primary/10 mb-6 group-hover:scale-110 transition-transform duration-300">
                    <IconComponent className={`h-10 w-10 ${link.color}`} />
                  </div>
                  <h4 className="text-xl font-bold mb-2 group-hover:text-primary transition-colors">
                    {link.platform}
                  </h4>
                  <p className={`font-semibold mb-2 ${link.color}`}>
                    {link.handle}
                  </p>
                  <p className="text-sm text-muted-foreground">
                    {link.description}
                  </p>
                </div>
              </a>
            );
          })}
        </div>


        {/* Main CTA */}
        <div className="text-center bg-gradient-card rounded-2xl p-12 border border-border/50">
          <h3 className="text-3xl font-bold mb-4">
            Ready to Transform Your <span className="text-gradient">QA Journey?</span>
          </h3>
          <p className="text-xl text-muted-foreground mb-12 max-w-3xl mx-auto">
            Join 1 million+ QA professionals who have elevated their careers with Rahul Shetty Academy. 
            Whether you're starting out or scaling up, we have the right path for you.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center items-center max-w-4xl mx-auto">
            <Button 
              size="default" 
              className="text-base sm:text-lg px-4 sm:px-6 py-2 sm:py-3 glow-orange w-full sm:w-auto justify-center"
              onClick={() => window.open('https://www.udemy.com/user/rahul445/', '_blank')}
            >
              <BookOpen className="mr-2 h-4 w-4 sm:h-5 sm:w-5 flex-shrink-0" />
              <span>Explore Courses</span>
            </Button>
            <Button 
              variant="outline" 
              size="default" 
              className="text-base sm:text-lg px-4 sm:px-6 py-2 sm:py-3 border-primary text-primary hover:bg-primary hover:text-primary-foreground w-full sm:w-auto justify-center items-center"
              onClick={() => window.open('https://rahulshettyacademy.com/mentorship', '_blank')}
            >
              <Users className="mr-2 h-4 w-4 sm:h-5 sm:w-5 flex-shrink-0" />
              <span className="text-center">Mentorship</span>
            </Button>
            <Button 
              variant="outline" 
              size="default" 
              className="text-base sm:text-lg px-4 sm:px-6 py-2 sm:py-3 border-primary text-primary hover:bg-primary hover:text-primary-foreground w-full sm:w-auto justify-center"
              onClick={() => window.open('https://rahulshettyacademy.com/contact-us', '_blank')}
            >
              <Mail className="mr-2 h-4 w-4 sm:h-5 sm:w-5 flex-shrink-0" />
              <span>Contact Me</span>
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default ContactSection;