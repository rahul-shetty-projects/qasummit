import { GraduationCap, Award, Mic, Users } from "lucide-react";
import { Card, CardContent } from "@/components/ui/card";

const JourneySection = () => {
  const milestones = [
    {
      title: "1 Million+ QA Learners",
      subtitle: "30+ Best-Selling Tutorials @ Udemy",
      icon: GraduationCap,
      color: "text-qa-orange",
      link: "#impact-qa-education"
    },
    {
      title: "Awards / Achievements",
      subtitle: "Global Recognition",
      icon: Award,
      color: "text-qa-purple",
      link: "#global-recognition"
    },
    {
      title: "QA Summits / Conferences",
      subtitle: "International Speaker",
      icon: Mic,
      color: "text-qa-blue",
      link: "#international-speaker"
    },
    {
      title: "LinkedIn 150,000+ Followers",
      subtitle: "Social Media Presence",
      icon: Users,
      color: "text-primary",
      link: "#social-media-presence"
    }
  ];

  return (
    <section className="py-20 bg-gradient-to-b from-background to-background/80" id="journey-section">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4 text-foreground">
            Discover My <span className="text-gradient">Journey</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
            Explore the key milestones that define my QA expertise
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
          {milestones.map((milestone, index) => {
            const IconComponent = milestone.icon;
            return (
              <a 
                key={index}
                href={milestone.link}
                className="block"
              >
                <Card className="gradient-card border-border/50 hover:border-primary/50 transition-all duration-300 hover:glow-orange group cursor-pointer">
                  <CardContent className="p-8 text-center">
                    <div className="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary/10 mb-6 group-hover:scale-110 transition-transform duration-300">
                      <IconComponent className={`h-8 w-8 ${milestone.color}`} />
                    </div>
                    <h3 className="text-lg font-bold mb-2 group-hover:text-primary transition-colors">
                      {milestone.title}
                    </h3>
                    <p className="text-sm text-muted-foreground">
                      {milestone.subtitle}
                    </p>
                  </CardContent>
                </Card>
              </a>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default JourneySection;