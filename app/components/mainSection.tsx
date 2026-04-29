"use client";

import Image from "next/image";
import { motion } from "framer-motion";

export default function MainSection() {
  return (
    <section className="relative w-full h-[95vh] flex items-center text-white overflow-hidden mt-16">
      {/* Background Image */}
      <div className="absolute inset-0 -z-10">
        <Image
          src="/AIDr.png"
          alt="AI Background"
          fill
          priority
          quality={100}
          unoptimized
          className="object-cover object-right"
        />

        {/* Overlay */}
        <div className="absolute inset-0 bg-black/30"></div>
      </div>

      {/* Content */}
      <div className="w-full px-6 md:px-16 lg:px-24 grid md:grid-cols-2 gap-8">
        {/* LEFT CONTENT */}
        <div className="space-y-6 max-w-3xl">
          {/* Heading (2 line fixed) */}
          <h1 className="text-3xl md:text-5xl font-bold leading-tight">
            Bengaluru's Best <br />
            <span className="text-purple-400">
              AI-Driven Digital Marketing
            </span>{" "}
            Company.
          </h1>

          {/* Paragraph */}
          {/* <p className="text-gray-300 text-base md:text-lg">
            We create powerful digital strategies that help brands grow faster,
            generate quality leads, and dominate online presence.
          </p> */}

          <p className="text-white/70 text-base md:text-lg">
            We create powerful digital strategies that help brands grow faster,
            generate quality leads, and dominate online presence.
          </p>

          {/* Buttons */}
          <div className="flex items-center gap-4 flex-wrap mt-18">
            {/* <motion.button
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              className="bg-purple-600 px-6 py-3 rounded-full font-semibold shadow-lg hover:bg-purple-700 transition"
            >
              What We Do →
            </motion.button> */}
            <motion.button
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              className="flex items-center gap-4 bg-gradient-to-r from-purple-600 to-pink-500 px-6 py-3 rounded-full font-semibold shadow-lg transition"
            >
              <span>WHAT WE DO</span>

              {/* Circle Arrow */}
              <span className="bg-white text-black w-8 h-8 flex items-center justify-center rounded-full">
                →
              </span>
            </motion.button>

            <motion.button
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              className="border border-white/30 px-6 py-3 rounded-full font-semibold hover:bg-white/10 transition"
            >
              View Works →
            </motion.button>
          </div>

          {/* Google Rating */}
          
        </div>

        {/* RIGHT SIDE */}
        <div></div>
      </div>
    </section>
  );
}
