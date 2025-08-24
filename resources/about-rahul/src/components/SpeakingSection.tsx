import { Mic, Users, Calendar, ExternalLink } from "lucide-react";
import { Card, CardContent } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import qaSummitEventsImage from "@lovable-uploads/906c6cdd-0040-4f19-90e4-97781ef31a23.png";

const SpeakingSection = () => {
  const speakingEngagements = [
    {
      event: "QASummit 2025",
      location: "London, UK",
      date: "October 2025",
      type: "Founder & Keynote",
      attendees: "500+",
      status: "upcoming"
    },
    {
      event: "QASummit Hyderabad",
      location: "Hyderabad, India",
      date: "2024",
      type: "Founder & Speaker",
      attendees: "300+",
      status: "completed"
    },
    {
      event: "QASummit Bangalore",
      location: "Bangalore, India",
      date: "2024",
      type: "Founder & Speaker",
      attendees: "400+",
      status: "completed"
    },
    {
      event: "QASummit Pune",
      location: "Pune, India",
      date: "2024",
      type: "Founder & Speaker",
      attendees: "350+",
      status: "completed"
    }
  ];

  const conferences = [
    {
      name: "LambdaTest Conference",
      role: "Keynote Speaker",
      topic: "AI in Testing"
    },
    {
      name: "Test Tribe Summit",
      role: "Panel Speaker",
      topic: "Future of QA"
    },
    {
      name: "EuroStar Conference",
      role: "Workshop Leader",
      topic: "Test Automation"
    }
  ];

  return (
    <section className="py-20 bg-gradient-to-b from-card/50 to-background" id="speaking">
      <div className="container mx-auto px-6">
        <div className="text-center mb-16">
          <h2 className="text-4xl md:text-5xl font-bold mb-4">
            Speaking & <span className="text-gradient">Events</span>
          </h2>
          <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
            Sharing knowledge and inspiring QA professionals worldwide through conferences and summits
          </p>
        </div>

        {/* QASummit Events */}
        <div className="mb-16">
          <h3 className="text-2xl font-bold mb-8 text-center">
            QASummit Events <span className="text-qa-orange">(Founder)</span>
          </h3>
          
          {/* QASummit Events Image */}
          <div className="mb-12 text-center">
            <img 
              src={qaSummitEventsImage} 
              alt="QASummit events showcasing global ideas shared everywhere - Bengaluru, Hyderabad, and Pune conferences"
              className="mx-auto rounded-2xl shadow-2xl max-w-4xl w-full object-cover"
            />
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
            {speakingEngagements.map((event, index) => (
              <Card
                key={index}
                className={`gradient-card border-border/50 transition-all duration-300 group ${
                  event.status === 'upcoming' 
                    ? 'hover:border-qa-orange/50 hover:glow-orange' 
                    : 'hover:border-qa-success/50'
                }`}
              >
                <CardContent className="p-6">
                  <div className="flex items-start justify-between mb-4">
                    <div className="flex items-center space-x-3">
                      <div className={`w-10 h-10 rounded-full flex items-center justify-center ${
                        event.status === 'upcoming' ? 'bg-qa-orange/20' : 'bg-qa-success/20'
                      }`}>
                        <Mic className={`h-5 w-5 ${
                          event.status === 'upcoming' ? 'text-qa-orange' : 'text-qa-success'
                        }`} />
                      </div>
                      <Badge 
                        variant="secondary" 
                        className={`${
                          event.status === 'upcoming' 
                            ? 'bg-qa-orange/10 text-qa-orange border-qa-orange/20' 
                            : 'bg-qa-success/10 text-qa-success border-qa-success/20'
                        }`}
                      >
                        {event.status === 'upcoming' ? 'Upcoming' : 'Completed'}
                      </Badge>
                    </div>
                    <div className="text-right text-sm text-muted-foreground">
                      <div className="flex items-center space-x-1">
                        <Users className="h-4 w-4" />
                        <span>{event.attendees}</span>
                      </div>
                    </div>
                  </div>
                  
                  <h4 className={`text-lg font-bold mb-2 group-hover:${
                    event.status === 'upcoming' ? 'text-qa-orange' : 'text-qa-success'
                  } transition-colors`}>
                    {event.event}
                  </h4>
                  <p className="text-muted-foreground mb-2">{event.location}</p>
                  <p className="text-sm text-muted-foreground mb-3">
                    <Calendar className="inline h-4 w-4 mr-1" />
                    {event.date}
                  </p>
                  <Badge variant="outline" className="text-xs">
                    {event.type}
                  </Badge>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>

        {/* Other Conferences */}
        <div className="mb-12">
          <h3 className="text-2xl font-bold mb-8 text-center">
            Conference <span className="text-qa-purple">Speaking</span>
          </h3>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
            {conferences.map((conf, index) => (
              <Card
                key={index}
                className="gradient-card border-border/50 hover:border-qa-purple/50 transition-all duration-300 group"
              >
                <CardContent className="p-6 text-center">
                  <h4 className="text-lg font-bold mb-2 group-hover:text-qa-purple transition-colors">
                    {conf.name}
                  </h4>
                  <p className="text-qa-purple font-medium mb-2">{conf.role}</p>
                  <p className="text-sm text-muted-foreground">{conf.topic}</p>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>

        {/* CTA Section */}
        <div className="text-center bg-gradient-card rounded-2xl p-12 border border-border/50">
          <h3 className="text-3xl font-bold mb-4">
            Book Rahul for Your <span className="text-gradient">Next Event</span>
          </h3>
          <p className="text-xl text-muted-foreground mb-8 max-w-2xl mx-auto">
            Inspire your audience with insights on QA excellence, AI in testing, and building successful EdTech ventures
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button size="lg" className="text-lg px-8 py-6 glow-orange">
              <ExternalLink className="mr-2 h-5 w-5" />
              Speaking Inquiry
            </Button>
            <Button variant="outline" size="lg" className="text-lg px-8 py-6 border-primary text-primary hover:bg-primary hover:text-primary-foreground">
              Download Speaker Kit
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default SpeakingSection;
