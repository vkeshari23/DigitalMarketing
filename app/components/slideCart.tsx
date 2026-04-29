"use client";

import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay } from "swiper/modules";

import "swiper/css";

export default function ServicesSlider() {
  const services = [
    // "360° Marketing",
    // "Lead Generation",
    // "PPC Advertising",
    // "Google Ads",
    // "Meta Ads",
    "Social Media Marketing",
    "SEO Optimization",
    "Content Marketing",
    // "Email Marketing",
    // "Influencer Marketing",
    // "Brand Strategy",
    "Website Development",
    // "App Development",
    // "ORM (Reputation Management)",
    // "Conversion Optimization",
    // "Landing Page Design",
    // "YouTube Marketing",
    // "Analytics & Tracking",
    // "Marketing Automation",
    // "Performance Marketing",
  ];

  return (
    <section className="bg-black py-20 px-6 md:px-16 lg:px-24 text-white">
      
      {/* Heading */}
      <div className="flex justify-between items-center mb-12 flex-wrap gap-6">
        <h2 className="text-4xl md:text-6xl font-light">
          <span className="font-bold">Your Success</span> Toolkit
        </h2>

        <button className="bg-yellow-400 text-black px-6 py-3 rounded-full font-semibold">
          WHAT WE DO →
        </button>
      </div>

      {/* Slider */}
      <Swiper
        modules={[Autoplay]}
        spaceBetween={20}
        slidesPerView={1.2}
        loop={true}
        autoplay={{
          delay: 2000,
          disableOnInteraction: false,
        }}
        breakpoints={{
          640: { slidesPerView: 2 },
          768: { slidesPerView: 3 },
          1024: { slidesPerView: 4 },
        }}
      >
        {services.map((service, index) => (
          <SwiperSlide key={index}>
            <div className="group bg-gradient-to-b from-[#1a1a1a] to-black p-6 rounded-2xl border border-white/10 hover:border-yellow-400/40 transition-all duration-300 shadow-lg hover:shadow-2xl hover:-translate-y-2">
              
              <h3 className="text-lg font-semibold mb-3">
                {service}
              </h3>

              <p className="text-gray-400 text-sm mb-8">
                Grow your business with expert {service.toLowerCase()} strategies.
              </p>

              {/* Bottom Arrow */}
              <div className="bg-white/10 rounded-full p-2 flex justify-center items-center group-hover:bg-white/20 transition">
                <div className="bg-yellow-400 text-black w-10 h-10 flex items-center justify-center rounded-full">
                  →
                </div>
              </div>

            </div>
          </SwiperSlide>
        ))}
      </Swiper>

    </section>
  );
}