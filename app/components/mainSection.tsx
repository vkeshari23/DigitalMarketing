"use client";

import Image from "next/image";
import { ArrowRight } from "lucide-react";

export default function MainSection() {
  const scrollToServices = () => {
    document.getElementById("services")?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <section className="relative w-full bg-black mt-[82px] md:mt-[114px]">
      <div className="hero-viewport relative w-full overflow-hidden">
        <Image
          src="/bannner-imageGotech.jpeg"
          alt="Go Tech"
          fill
          priority
          quality={100}
          className="object-cover object-[center_20%]"
        />

        {/* TEXT OVERLAY */}
        <div className="absolute inset-0 z-10 flex items-center">
          <div className="px-6 sm:px-10 md:pl-16 lg:pl-24 max-w-[700px]">
            <div className="h-[3px] w-16 bg-gradient-to-r from-yellow-400 to-yellow-200 mb-6" />

            <h1
              className="text-[38px] sm:text-[52px] md:text-[62px] lg:text-[70px] font-extrabold leading-[1.25] tracking-wide text-white"
              style={{ fontFamily: "var(--font-poppins)" }}
            >
              DIGITAL
              <br />
              <span className="bg-gradient-to-r from-yellow-300 via-yellow-400 to-yellow-200 bg-clip-text text-transparent">
                MARKETING
              </span>
              <br />
              AGENCY
            </h1>

            <div className="h-[3px] w-16 bg-gradient-to-r from-yellow-400 to-yellow-200 mt-6 mb-7" />

            <p
              className="text-white/90 text-[15px] sm:text-[17px] leading-8 tracking-wide max-w-[560px] mb-9"
              style={{ fontFamily: "var(--font-poppins)", fontWeight: 500 }}
            >
              At FutureLoopix Technologies, we help businesses grow with
              innovative digital marketing solutions. From SEO and Google
              Ads to Social Media Marketing, Website Development, and
              Branding, we create strategies that increase visibility,
              generate quality leads, and deliver measurable business
              growth.
            </p>

            <div className="flex flex-wrap items-center gap-6">
              <button
                onClick={scrollToServices}
                className="group flex items-center gap-5 rounded-full bg-gradient-to-r from-yellow-100 via-yellow-200 to-yellow-300 py-2 pl-8 pr-2 text-base font-bold text-black transition-all duration-300 hover:from-yellow-200 hover:to-yellow-400"
              >
                What We Do
                <span className="flex h-12 w-12 items-center justify-center rounded-full bg-black text-yellow-400 transition-transform duration-300 group-hover:translate-x-1">
                  <ArrowRight size={22} />
                </span>
              </button>

              <button className="group flex items-center gap-5 rounded-full border-2 border-yellow-400 py-2 pl-8 pr-2 text-base font-bold text-white transition-all duration-300 hover:bg-white/10">
                View Work
                <span className="flex h-12 w-12 items-center justify-center rounded-full border-2 border-yellow-400 text-yellow-400 transition-transform duration-300 group-hover:translate-x-1">
                  <ArrowRight size={22} />
                </span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
