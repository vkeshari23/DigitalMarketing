"use client";

import { motion } from "framer-motion";
import {
  Rocket,
  Smartphone,
  Target,
  Monitor,
} from "lucide-react";

const features = [
  {
    icon: Rocket,
    title: "Search Engine Optimization",
    desc: "Rank higher on Google with advanced SEO techniques that drive long-term business growth.",
  },
  {
    icon: Smartphone,
    title: "Social Media Growth",
    desc: "Increase engagement, build brand awareness, and generate quality leads through social media.",
  },
  {
    icon: Target,
    title: "Performance Marketing",
    desc: "Maximize your ROI with Google Ads and Meta Ads campaigns designed for better conversions.",
  },
  {
    icon: Monitor,
    title: "Web Development",
    desc: "Professional, mobile-friendly websites built for speed, performance, and higher conversions.",
  },
];

export default function WhyChooseSection() {
  return (
    <section id="appointment" className="relative flex min-h-[95vh] items-center overflow-hidden bg-[#f6f6f6] py-14 lg:py-20 scroll-mt-14 md:scroll-mt-16">

      {/* ================= FLOATING SHAPES ================= */}

      <motion.div
        animate={{
          rotate: [0, 180, 0],
          x: [0, 100, 0],
        }}
        transition={{
          duration: 16,
          repeat: Infinity,
          ease: "easeInOut",
        }}
        className="absolute left-[5%] top-[15%] h-8 w-8 border border-gray-300"
      />

      <motion.div
        animate={{
          rotate: [0, 180, 0],
          x: [0, 120, 0],
        }}
        transition={{
          duration: 18,
          repeat: Infinity,
          ease: "easeInOut",
        }}
        className="absolute bottom-[20%] left-[8%] h-6 w-6 border border-gray-300"
      />

      <motion.div
        animate={{
          rotate: [0, -180, 0],
          x: [0, -120, 0],
        }}
        transition={{
          duration: 17,
          repeat: Infinity,
          ease: "easeInOut",
        }}
        className="absolute right-[10%] top-[25%] h-7 w-7 border border-gray-300"
      />

      <motion.div
        animate={{
          rotate: [0, -180, 0],
          x: [0, -100, 0],
        }}
        transition={{
          duration: 20,
          repeat: Infinity,
          ease: "easeInOut",
        }}
        className="absolute bottom-[10%] right-[15%] h-5 w-5 border border-gray-300"
      />

      <motion.div
        animate={{
          rotate: [0, -180, 0],
          x: [0, -90, 0],
        }}
        transition={{
          duration: 15,
          repeat: Infinity,
          ease: "easeInOut",
        }}
        className="absolute left-[15%] top-[42%]"
      >
        <div
          className="h-0 w-0"
          style={{
            borderLeft: "14px solid transparent",
            borderRight: "14px solid transparent",
            borderTop: "22px solid #e5e5e5",
          }}
        />
      </motion.div>

      <motion.div
        animate={{
          y: [0, -20, 0],
        }}
        transition={{
          duration: 8,
          repeat: Infinity,
          ease: "easeInOut",
        }}
        className="absolute left-[28%] top-[8%] h-4 w-4 rounded-full bg-gray-300"
      />

      <div className="container mx-auto max-w-[1450px] px-5">

        {/* ================= CARDS + FORM ================= */}

        <div className="grid items-stretch gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:gap-14">

          {/* ================= LEFT: HEADING + CARDS ================= */}

          <div className="flex h-full flex-col">

            {/* ================= HEADING ================= */}

            <motion.h2
              initial={{ opacity: 0, y: 40 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.7 }}
              className="mb-6 max-w-[650px] text-left text-[24px] font-bold leading-[1.2] text-black md:text-[32px] lg:text-[38px]"
            >
              What Makes Futurloopix-
              <span className="font-normal">
                {" "}
                Best Digital Marketing?
              </span>
            </motion.h2>

          <div className="grid flex-1 gap-3 sm:grid-cols-2 lg:grid-rows-2">
            {features.map((item, index) => {
              const Icon = item.icon;

              return (
                <motion.div
                  key={index}
                  initial={{ opacity: 0, y: 40 }}
                  whileInView={{ opacity: 1, y: 0 }}
                  viewport={{ once: true }}
                  transition={{
                    duration: 0.6,
                    delay: index * 0.1,
                  }}
                  whileHover={{
                    y: -6,
                  }}
                  className="group relative flex min-h-[150px] sm:min-h-[160px] flex-col justify-center overflow-hidden rounded-2xl border border-gray-200 bg-white p-4 sm:p-5 text-center shadow-md transition-all duration-500 hover:shadow-[0_16px_35px_rgba(0,0,0,0.12)]"
                >
                  <div className="relative mx-auto mb-3 flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-300 via-[#f5c400] to-amber-500 text-black shadow-[0_8px_20px_rgba(245,196,0,0.35)] transition-transform duration-500 group-hover:scale-110 group-hover:rotate-6">
                    <Icon size={22} />
                  </div>

                  <h3 className="relative mb-1.5 text-[15px] sm:text-[16px] font-semibold text-black transition-colors duration-300 group-hover:text-[#b8860b]">
                    {item.title}
                  </h3>

                  <p className="relative text-[12px] sm:text-[13px] leading-5 text-gray-600">
                    {item.desc}
                  </p>

                  <div className="relative mx-auto mt-3 h-[2px] w-0 bg-gradient-to-r from-yellow-400 to-amber-500 transition-all duration-500 group-hover:w-12" />
                </motion.div>
              );
            })}
            </div>

          </div>

          {/* ================= RIGHT FORM ================= */}

          <motion.div
            initial={{ opacity: 0, x: 60 }}
            whileInView={{ opacity: 1, x: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.8 }}
            className="
group
flex
h-full
w-full
max-w-[680px]
ml-0
md:ml-6
lg:ml-10
flex-col
justify-center
rounded-[28px]
bg-[#4f4f4f]
p-7
sm:p-9
md:p-11
shadow-[0_25px_70px_rgba(0,0,0,0.18)]
"
          >
            <h3 className="mb-6 text-[26px] font-bold text-white sm:text-[30px] md:text-[32px]">
              Make An Appointment
            </h3>

            <form className="space-y-5">

              <div className="grid grid-cols-1 gap-5 sm:grid-cols-2">

                <input
                  type="text"
                  placeholder="NAME"
                  className="h-[72px] w-full rounded-full border border-[#8d8d8d] bg-transparent px-6 text-sm text-white outline-none transition-all duration-300 placeholder:text-[12px] placeholder:font-semibold placeholder:tracking-[2px] placeholder:text-white/80 hover:border-white/60 focus:border-[#f5c400] focus:shadow-[0_0_0_3px_rgba(245,196,0,0.15)]"
                />

                <input
                  type="text"
                  placeholder="PHONE"
                  className="h-[72px] w-full rounded-full border border-[#8d8d8d] bg-transparent px-6 text-sm text-white outline-none transition-all duration-300 placeholder:text-[12px] placeholder:font-semibold placeholder:tracking-[2px] placeholder:text-white/80 hover:border-white/60 focus:border-[#f5c400] focus:shadow-[0_0_0_3px_rgba(245,196,0,0.15)]"
                />

              </div>

              <div className="grid grid-cols-1 gap-5 sm:grid-cols-2">

                <input
                  type="email"
                  placeholder="EMAIL"
                  className="h-[72px] w-full rounded-full border border-[#8d8d8d] bg-transparent px-6 text-sm text-white outline-none transition-all duration-300 placeholder:text-[12px] placeholder:font-semibold placeholder:tracking-[2px] placeholder:text-white/80 hover:border-white/60 focus:border-[#f5c400] focus:shadow-[0_0_0_3px_rgba(245,196,0,0.15)]"
                />

                <input
                  type="text"
                  placeholder="LOCATION"
                  className="h-[72px] w-full rounded-full border border-[#8d8d8d] bg-transparent px-6 text-sm text-white outline-none transition-all duration-300 placeholder:text-[12px] placeholder:font-semibold placeholder:tracking-[2px] placeholder:text-white/80 hover:border-white/60 focus:border-[#f5c400] focus:shadow-[0_0_0_3px_rgba(245,196,0,0.15)]"
                />

              </div>

              <input
                type="text"
                placeholder="REQUIREMENT"
                className="h-[72px] w-full rounded-full border border-[#8d8d8d] bg-transparent px-6 text-sm text-white outline-none transition-all duration-300 placeholder:text-[12px] placeholder:font-semibold placeholder:tracking-[2px] placeholder:text-white/80 hover:border-white/60 focus:border-[#f5c400] focus:shadow-[0_0_0_3px_rgba(245,196,0,0.15)]"
              />

              <button
                type="submit"
               className="mt-2 h-[66px] w-full rounded-xl bg-[#f5c400] text-[16px] font-semibold text-black transition-all duration-300 hover:scale-[1.02] hover:shadow-[0_10px_30px_rgba(245,196,0,0.4)] active:scale-[0.98]"
              >
                Book Appointment
              </button>

            </form>

          </motion.div>

        </div>

      </div>

    </section>
  );
}