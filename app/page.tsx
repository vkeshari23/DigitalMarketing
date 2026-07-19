import MainSection from "./components/mainSection";
import WhyChooseSection from "./components/appointment";
import AboutSection from "./components/belowAppointment";
import ToolkitSection from "./components/slideCart";
import ServicesSection from "./components/serviceSection";
import TestimonialSection from "./components/testimonials ";
import WhyChooseUs from "./components/whyChooseUs";
import ContactSection from "./components/map";

export default function Home() {
  return (
    <div>
      <MainSection/>
      <ServicesSection/>
      <WhyChooseSection/>
      <AboutSection/>
      <ToolkitSection/>
      <TestimonialSection/>
      <ContactSection/>
      <WhyChooseUs/>

    </div>
  );
}
