import { Button } from "@/components/ui/button";
import { ArrowRight, Users, Trophy, Mic, Share2 } from "lucide-react";
import impactQaEducationImage from "@lovable-uploads/04590c42-d763-4a15-9462-2b6ae4486de5.png";
import globalRecognitionImage from "@lovable-uploads/2ad6ca46-8415-4818-ae01-0e20419e6fb1.png";
import internationalSpeakerImage from "@lovable-uploads/cf67af56-cde0-4c03-8aaa-4dfa157bbb7f.png";
import socialMediaPresenceImage from "@lovable-uploads/48dba81a-a606-4b2a-a1ba-1356c3520160.png";

const DetailedSections = () => {
  const sections = [
    {
      id: "impact-qa-education",
      title: "Impact on QA Education",
      subtitle: "Transforming Quality Assurance Learning Worldwide",
      description: "Through my comprehensive Udemy courses, I've reached over 1 million learners across the globe, providing them with practical, industry-relevant QA knowledge. My 30+ best-selling tutorials cover everything from manual testing fundamentals to advanced automation frameworks.",
      stats: "1M+ Students Trained",
      icon: Users,
      image: impactQaEducationImage
    },
    {
      id: "global-recognition",
      title: "Global Recognition",
      subtitle: "Excellence in Quality Assurance",
      description: "My contributions to the QA field have been recognized through numerous awards and certifications from leading industry organizations. These accolades reflect my commitment to advancing testing methodologies and promoting best practices.",
      stats: "Multiple Awards Won",
      icon: Trophy,
      image: globalRecognitionImage
    },
    {
      id: "international-speaker",
      title: "International Speaker",
      subtitle: "Sharing Knowledge Across Continents",
      description: "As a sought-after speaker at international QA summits and conferences, I've had the privilege of sharing insights with testing professionals worldwide. My presentations cover emerging trends in test automation and AI in testing.",
      stats: "50+ Events Spoken",
      icon: Mic,
      image: internationalSpeakerImage
    },
    {
      id: "social-media-presence",
      title: "Social Media Presence",
      subtitle: "Building a Global QA Community",
      description: "With over 150,000 followers on LinkedIn, I've built a thriving community of QA professionals, students, and industry leaders. My content strategy focuses on sharing practical insights and emerging trends in quality assurance.",
      stats: "150K+ Followers",
      icon: Share2,
      image: socialMediaPresenceImage
    }
  ];

  return (
    <section className="py-32 bg-background">
      <div className="container mx-auto px-6">
        <div className="grid gap-32">
          {sections.map((section, index) => {
            const IconComponent = section.icon;
            const isEven = index % 2 === 0;
            
            return (
              <div
                key={section.id}
                id={section.id}
                className="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center"
              >
                {/* Content */}
                <div className={`lg:col-span-6 ${isEven ? 'lg:order-1' : 'lg:order-2'}`}>
                  <div className="max-w-xl">
                    {/* Icon & Stats */}
                    <div className="flex items-center gap-4 mb-8">
                      <div className="flex items-center justify-center w-14 h-14 rounded-2xl bg-primary/10">
                        <IconComponent className="h-7 w-7 text-primary" />
                      </div>
                      <span className="text-sm font-semibold text-primary bg-primary/10 px-4 py-2 rounded-full">
                        {section.stats}
                      </span>
                    </div>

                    {/* Title */}
                    <h2 className="text-4xl lg:text-5xl xl:text-6xl font-bold mb-6 text-foreground leading-tight">
                      {section.title}
                    </h2>

                    {/* Subtitle */}
                    <h3 className="text-xl lg:text-2xl text-primary mb-8 font-medium">
                      {section.subtitle}
                    </h3>

                    {/* Description */}
                    <p className="text-lg text-muted-foreground leading-relaxed mb-10">
                      {section.description}
                    </p>

                    {/* CTA Button */}
                    <Button 
                      size="lg"
                      className="group bg-primary hover:bg-primary/90 text-primary-foreground px-8 py-6 text-lg font-semibold rounded-xl transition-all duration-300 hover:scale-105"
                      onClick={() => {
                        const urls = {
                          'impact-qa-education': 'https://www.udemy.com/user/rahul445/',
                          'international-speaker': 'https://qasummit.org/previous-events',
                          'social-media-presence': 'https://www.linkedin.com/in/rahul-shetty-venkatesh/'
                        };
                        const url = urls[section.id as keyof typeof urls];
                        if (url) window.open(url, '_blank');
                      }}
                    >
                      Learn More
                      <ArrowRight className="ml-2 h-5 w-5 group-hover:translate-x-1 transition-transform duration-300" />
                    </Button>
                  </div>
                </div>

                {/* Image */}
                <div className={`lg:col-span-6 ${isEven ? 'lg:order-2' : 'lg:order-1'}`}>
                  <div className="relative group">
                    <div className="absolute -inset-4 bg-gradient-to-r from-primary/20 to-primary/10 rounded-3xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div className="relative overflow-hidden rounded-2xl bg-card shadow-2xl">
                      <img
                        src={section.image}
                        alt={section.title}
                        className="w-full h-80 lg:h-96 xl:h-[28rem] object-cover transition-transform duration-700 group-hover:scale-105"
                      />
                      <div className="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                  </div>
                </div>
              </div>
            );
          })}
        </div>
      </div>
    </section>
  );
};

export default DetailedSections;
