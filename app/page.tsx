import Image from "next/image";
import MainSection from "./components/mainSection";
import WhyChooseSection from "./components/appointment";
import AboutSection from "./components/belowAppointment";
import ToolkitSection from "./components/slideCart";
import PortfolioSection from "./components/portfolio";
import ServicesSection from "./components/serviceSection";
import TestimonialSection from "./components/testimonials ";
// import Navbar from "./components/nav";

export default function Home() {
  return (
    
    <div>
      {/* <nav/> */}
      {/* <Navbar/> */}
      <MainSection/>
      <ServicesSection/>
      <WhyChooseSection/>
      <AboutSection/>
      <ToolkitSection/>
      <PortfolioSection/>
      <TestimonialSection/>

    </div>
  );
}
