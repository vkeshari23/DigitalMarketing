"use client";

import { desc } from "framer-motion/client";
import Image from "next/image";

const services = [
  {
    title: "Social Media Marketing",
    desc: "Reach more people with our social media marketing services in Delhi. We help businesses to connect with the right audience on Instagram and LinkedIn, and turn leads into real results.",
    img: "/smm.jpeg",
  },
  {
    title: "Search Engine Optimization",
    desc: "Our SEO services in Delhi help your website rank on Google, bring more visitors and grow your business naturally.",
    img: "/smo.jpeg",
  },
   {
    title: "Content Marketing",
    desc: "Our content marketing services help you share helpful content that brings people to your website and keeps them engaged.",
    img: "/cm.jpeg",
  },
  {
    title: "Web Development",
    desc:"Our website development services will enable you to create a strong online presence. The websites we build are super quick and mobile-friendly, thus making it easier for the business to turn the website visitors into customers.",
    img: "/wd.jpeg",
  },
  {
    title: "Pay Per Click (PPC)",
    desc : "With our cutting-edge PPC services, you get fast visibility. We run intelligent Google and social media ads that generate the traffic you want and give you the results you can measure.",
    img: "/ppc.jpeg",
  },
  {
    title: "Social Media Optimization",
    desc:"Our SMO services improve the visibility of your social media pages. Through profile and content optimization, we make your social media accounts more visible, more engaging and more trusted by the public.",
    img: "/smo.jpeg",
  },
  {
    title: "App Development",
    desc : "With our app development services, you can develop quick and user-friendly mobile applications. We create consumer-friendly apps for both Android and iOS that allow businesses to interact with their clients more efficiently.",
    img: "/app_dev.jpeg",
  },
  {
    title: "Google My Business",
    desc: "Make your local presence more significant through our GMB services. We not only make your profile more attractive to potential customers living nearby but also boost your ranking on Google Maps.",
    img: "/gmb.jpeg",
  },
];

export default function ServicesSection() {
  return (
    <section className="py-16 bg-gray-50">
      <div className="max-w-7xl mx-auto px-4 text-center">
        
        <p className="text-orange-500 font-semibold">→ BEST SERVICE</p>

        <h2 className="text-3xl md:text-4xl font-bold mt-2">
          <span className="text-orange-500">Digital Solutions</span> for your every need
        </h2>

        <p>Discover our comprehensive digital marketing services designed to grow your brand, reach the right audience, and grow online.</p>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
          
          {services.map((service, i) => (
            <div
              key={i}
              className="relative group rounded-xl overflow-hidden shadow-md"
            >
              
              {/* Image */}
              <div className="relative h-56 w-full">
                <Image
                  src={service.img}
                  alt={service.title}
                  fill
                  className="object-cover"
                />
              </div>

              {/* Curtain Overlay */}
              <div className="absolute inset-0 bg-black/80 translate-y-full group-hover:translate-y-0 transition-all duration-500 ease-in-out flex flex-col justify-center items-center text-center px-4">
                
                <h3 className="text-white text-lg font-semibold mb-2 opacity-0 group-hover:opacity-100 transition duration-700 delay-200">
                  {service.title}
                </h3>

                <p className="text-gray-200 text-sm opacity-0 group-hover:opacity-100 transition duration-700 delay-300">
                  {service.desc}
                </p>

              </div>

              {/* Bottom Title (default visible) */}
              <div className="bg-white py-4">
                <h3 className="text-gray-700 font-medium">
                  {service.title}
                </h3>
              </div>

            </div>
          ))}

        </div>
      </div>
    </section>
  );
}