import { Users, Star, Globe, Award, BookOpen, Video } from "lucide-react";
import { Card, CardContent } from "@/components/ui/card";

const MetricsSection = () => {
  const metrics = [
    {
      icon: Users,
      value: "1,000,000+",
      label: "QA Professionals Trained",
      description: "Across 150+ countries worldwide",
      color: "text-qa-orange"
    },
    {
      icon: Star,
      value: "300,000+",
      label: "5-Star Reviews",
      description: "From satisfied learners",
      color: "text-qa-success"
    },
    {
      icon: BookOpen,
      value: "25+",
      label: "Best-Selling Courses",
      description: "Top-rated on Udemy",
      color: "text-qa-blue"
    },
    {
      icon: Video,
      value: "100,000+",
      label: "YouTube Subscribers",
      description: "Educational QA content",
      color: "text-qa-purple"
    },
    {
      icon: Globe,
      value: "150,000+",
      label: "LinkedIn Followers",
      description: "Top Testing Voice",
      color: "text-qa-orange"
    },
    {
      icon: Award,
      value: "2",
      label: "Global Awards",
      description: "Excellence in QA Education",
      color: "text-qa-success"
    }
  ];

  return (
    <section className="py-20 bg-gradient-to-b from-card/50 to-background" id="metrics">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">
            Impact by the <span className="text-gradient">Numbers</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Transforming the QA landscape through education, innovation, and community building
          </p>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          {metrics.map((metric, index) => (
            <Card
              key={index}
              className="gradient-card border-border/50 hover:border-primary/50 transition-all duration-300 hover:glow-orange group"
            >
              <CardContent className="p-8 text-center">
                <div className={`inline-flex items-center justify-center w-16 h-16 rounded-full bg-secondary/50 mb-6 group-hover:scale-110 transition-transform duration-300`}>
                  <metric.icon className={`h-8 w-8 ${metric.color}`} />
                </div>
                <div className={`text-4xl md:text-5xl font-bold mb-2 ${metric.color}`}>
                  {metric.value}
                </div>
                <h3 className="text-lg font-semibold mb-2 text-foreground">
                  {metric.label}
                </h3>
                <p className="text-muted-foreground text-sm">
                  {metric.description}
                </p>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Quote Section */}
        <div className="mt-20 text-center">
          <blockquote className="text-2xl md:text-3xl font-light italic text-muted-foreground max-w-4xl mx-auto">
            "Nothing is Impossible. It all depends on how we are Trained on it."
          </blockquote>
          <cite className="block mt-4 text-lg font-semibold text-gradient">
            — Rahul Shetty
          </cite>
        </div>
      </div>
    </section>
  );
};

export default MetricsSection;