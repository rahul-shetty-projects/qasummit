import Navigation from "@/components/Navigation";
import HeroSection from "@/components/HeroSection";
import JourneySection from "@/components/JourneySection";
import DetailedSections from "@/components/DetailedSections";
import ContactSection from "@/components/ContactSection";
import Footer from "@/components/Footer";

const Index = () => {
  return (
    <div className="min-h-screen bg-background">
      <Navigation />
      <HeroSection />
      <JourneySection />
      <DetailedSections />
      <ContactSection />
      <Footer />
    </div>
  );
};

export default Index;
