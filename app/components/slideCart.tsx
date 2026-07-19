"use client";

import { useState, useEffect } from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay } from "swiper/modules";
import {
  Search,
  Share2,
  PenTool,
  Megaphone,
  LayoutTemplate,
  FileText,
  Target,
  MapPin,
  ShoppingCart,
  Smartphone,
  ArrowUpRight,
} from "lucide-react";

import "swiper/css";

export default function ServicesSlider() {
  const [mounted, setMounted] = useState(false);

  useEffect(() => {
    setMounted(true);
  }, []);

  const services = [
    { name: "SEO (Search Engine Optimization)", icon: Search },
    { name: "SMO (Social Media Optimization)", icon: Share2 },
    { name: "Content Marketing", icon: PenTool },
    { name: "SMM (Social Media Marketing)", icon: Megaphone },
    { name: "Website Design Services", icon: LayoutTemplate },
    { name: "Content Marketing Services", icon: FileText },
    { name: "Google Ads", icon: Target },
    { name: "GMB (Google My Business)", icon: MapPin },
    { name: "E-Commerce Web Designing", icon: ShoppingCart },
    { name: "App Development", icon: Smartphone },
  ];

  return (
    <section className="relative min-h-screen flex items-center bg-black overflow-hidden py-24 md:py-28">

      {/* ================= BACKGROUND POLYGON TOP LEFT ================= */}
      <div className="polygon-left absolute left-[-60px] top-[-60px] w-[340px] h-[340px] opacity-60 pointer-events-none hidden lg:block">
        <svg
          viewBox="0 0 300 300"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          className="w-full h-full"
        >
          <path
            d="M90 40L180 20L250 80L240 180L140 230L60 150L90 40Z"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M180 20L200 90L250 80"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M200 90L240 180"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M140 230L200 160L240 180"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M60 150L120 120L200 160"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M120 120L200 90"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
        </svg>
      </div>

      {/* ================= BACKGROUND POLYGON BOTTOM RIGHT ================= */}
      <div className="polygon-right absolute right-[-60px] bottom-[-40px] w-[340px] h-[340px] opacity-60 pointer-events-none hidden lg:block">
      <svg
          viewBox="0 0 300 300"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
          className="w-full h-full"
        >
          <path
            d="M70 70L180 40L250 110L220 240L120 260L40 180L70 70Z"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M180 40L210 120L250 110"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M210 120L220 240"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M120 260L180 180L220 240"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M40 180L100 130L180 180"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
          <path
            d="M100 130L210 120"
            stroke="rgba(255,255,255,0.12)"
            strokeWidth="1.8"
          />
        </svg>
      </div>

      {/* ================= GLOW ================= */}
      <div className="absolute left-0 top-0 h-[420px] w-[420px] rounded-full bg-yellow-500/10 blur-[150px]" />
      <div className="absolute bottom-0 right-0 h-[380px] w-[380px] rounded-full bg-yellow-500/10 blur-[150px]" />

      {/* ================= CONTENT ================= */}
      <div className="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-12">

        {/* ================= HEADER ================= */}
        <div className="mb-10 flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">

          <div>
            <span className="inline-flex items-center gap-2 rounded-full border border-yellow-400/30 bg-yellow-400/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[3px] text-yellow-400">
              <span className="h-1.5 w-1.5 rounded-full bg-yellow-400 animate-pulse" />
              What We Offer
            </span>

            <h2 className="mt-6 text-3xl sm:text-5xl lg:text-6xl font-light text-white">
              <span className="font-bold">Your Success</span>{" "}
              <span className="block text-yellow-400">Toolkit</span>
            </h2>

            <p className="mt-4 max-w-2xl text-sm sm:text-base text-gray-400">
              Powerful digital marketing solutions designed to help your business
              attract more customers and generate quality leads.
            </p>
          </div>
        </div>

        {/* ================= SWIPER (client-only: loop mode clones slides,
             which mismatches SSR HTML and breaks hydration) ================= */}
        {mounted ? (
          <Swiper
          modules={[Autoplay]}
          loop
          spaceBetween={25}
          autoplay={{
            delay: 2500,
            disableOnInteraction: false,
          }}
          breakpoints={{
            0: {
              slidesPerView: 1.1,
            },
            640: {
              slidesPerView: 1.3,
            },
            768: {
              slidesPerView: 2,
            },
            1024: {
              slidesPerView: 2.5,
            },
            1280: {
              slidesPerView: 3,
            },
          }}
        >
          {services.map((service, index) => {
            const Icon = service.icon;
            return (
              <SwiperSlide key={index} className="h-full pb-2">
                <div className="group relative h-[360px] flex flex-col overflow-hidden rounded-[28px] border border-white/10 bg-gradient-to-b from-[#161616] via-[#0c0c0c] to-black p-8 transition-all duration-500 hover:-translate-y-2 hover:border-yellow-400/40 hover:shadow-[0_30px_60px_-15px_rgba(250,204,21,0.18)]">
                  {/* ================= HOVER GLOW ================= */}
                  <div className="pointer-events-none absolute -top-24 -right-24 h-56 w-56 rounded-full bg-yellow-400/10 blur-[80px] opacity-0 transition-opacity duration-500 group-hover:opacity-100" />

                  {/* ================= TOP ROW ================= */}
                  <div className="flex items-start justify-between">
                    {/* icon */}
                    <div className="flex h-16 w-16 items-center justify-center rounded-2xl border border-yellow-400/20 bg-gradient-to-br from-yellow-400/15 to-yellow-400/[0.03] text-yellow-400 transition-all duration-500 group-hover:scale-110 group-hover:border-yellow-400/50 group-hover:bg-yellow-400 group-hover:text-black">
                      <Icon size={28} strokeWidth={1.8} />
                    </div>

                    {/* arrow (on hover) */}
                    <ArrowUpRight
                      size={22}
                      className="text-yellow-400 opacity-0 -translate-x-1 translate-y-1 transition-all duration-300 group-hover:opacity-100 group-hover:translate-x-0 group-hover:translate-y-0"
                    />
                  </div>

                  {/* ================= TITLE ================= */}
                  <h3 className="mt-7 text-[19px] font-semibold text-white leading-[1.4]">
                    {service.name}
                  </h3>

                  {/* ================= DESCRIPTION ================= */}
                  <p className="mt-4 text-[15px] text-gray-400 leading-8">
                    We deliver powerful growth strategies using{" "}
                    <span className="text-yellow-400 font-medium">
                      {service.name.toLowerCase()}
                    </span>{" "}
                    to improve visibility, engagement, and conversions.
                  </p>

                  {/* ================= BOTTOM LINE ================= */}
                  <div className="mt-auto h-[2px] w-10 rounded-full bg-yellow-400/40 transition-all duration-500 group-hover:w-full group-hover:bg-yellow-400" />
                </div>
              </SwiperSlide>
            );
          })}
          </Swiper>
        ) : (
          <div className="min-h-[380px]" />
        )}
      </div>

      {/* ================= ANIMATIONS ================= */}
      <style jsx>{`
        .polygon-left {
  animation: polygonLeftRotate 20s linear infinite;
  transform-origin: center center;
  will-change: transform;
}

.polygon-right {
  animation: polygonRightRotate 24s linear infinite;
  transform-origin: center center;
  will-change: transform;
}

@keyframes polygonLeftRotate {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

@keyframes polygonRightRotate {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(-360deg);
  }
}
      `}</style>
    </section>
  );
}