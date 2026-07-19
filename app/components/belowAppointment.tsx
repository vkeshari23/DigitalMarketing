"use client";

import Image from "next/image";
import { motion } from "framer-motion";

export default function AboutSection() {
  return (
    <section className="relative flex min-h-screen items-center overflow-hidden bg-white px-6 pb-16 pt-24 md:px-10 md:py-20 lg:px-20">
      <motion.div
        className="absolute inset-0 overflow-hidden"
        animate={{
          y: [-30, 30, -30],
        }}
        transition={{
          duration: 18,
          repeat: Infinity,
          ease: "easeInOut",
        }}
      >
        {/* Vertical Lines */}
        <div className="absolute left-[20%] top-0 h-full w-px bg-gray-200" />
        <div className="absolute left-[50%] top-0 h-full w-px bg-gray-200" />
        <div className="absolute left-[80%] top-0 h-full w-px bg-gray-200" />

        {/* Horizontal Lines */}
        <div className="absolute top-[15%] left-0 h-px w-full bg-gray-200" />
        <div className="absolute top-[40%] left-0 h-px w-full bg-gray-200" />
        <div className="absolute top-[70%] left-0 h-px w-full bg-gray-200" />

        {/* Top Curve */}
        <div
          className="
      absolute
      top-[8%]
      left-[50%]
      h-[180px]
      w-[180px]
      rounded-bl-[180px]
      border-l
      border-b
      border-gray-200
    "
        />

        {/* Middle Curve */}
        <div
          className="
      absolute
      top-[42%]
      left-[50%]
      h-[260px]
      w-[260px]
      rounded-tl-[260px]
      border-l
      border-t
      border-gray-200
    "
        />

        {/* Bottom Curve */}
        <div
          className="
      absolute
      bottom-[-40px]
      left-[50%]
      h-[280px]
      w-[280px]
      rounded-tr-[280px]
      border-r
      border-t
      border-gray-200
    "
        />
      </motion.div>

      {/* Grid Layout */}
      <div className="relative z-10 mx-auto grid w-full max-w-7xl items-center gap-10 lg:grid-cols-2 lg:gap-16">
        {/* LEFT SIDE */}
        <motion.div
          initial={{ opacity: 0, x: -60 }}
          whileInView={{ opacity: 1, x: 0 }}
          transition={{ duration: 0.7 }}
          viewport={{ once: true }}
        >

          {/* Eyebrow badge */}
          <motion.div
            initial={{ opacity: 0, y: 12 }}
            whileInView={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.5 }}
            viewport={{ once: true }}
            className="mb-5 inline-flex items-center gap-2 rounded-full border border-yellow-400/40 bg-yellow-400/10 px-4 py-1.5"
          >
            <span className="relative flex h-2 w-2">
              <span className="absolute inline-flex h-full w-full animate-ping rounded-full bg-yellow-400 opacity-75" />
              <span className="relative inline-flex h-2 w-2 rounded-full bg-yellow-500" />
            </span>
            <span className="font-[family-name:var(--font-poppins)] text-xs font-semibold uppercase tracking-[2px] text-yellow-600">
              Who We Are
            </span>
          </motion.div>

          {/* Heading */}
          <h2 className="font-[family-name:var(--font-poppins)] text-4xl font-extrabold leading-[1.15] tracking-tight text-black sm:text-5xl md:text-5xl lg:text-6xl">
            Helping Businesses
            <span
              className="
                relative
                block
                bg-gradient-to-r
                from-yellow-300
                via-amber-400
                to-yellow-500
                bg-clip-text
                text-transparent
              "
            >
              Get More Leads &
            </span>
            Sales Online
          </h2>

          <div className="mt-5 h-1 w-24 rounded-full bg-gradient-to-r from-yellow-400 via-amber-400 to-yellow-200" />

          {/* Description */}
          <p className="mt-6 text-base leading-7 tracking-wide text-gray-600 md:text-[17px]">
            Futureloopix technologies is a results-driven digital marketing agency dedicated to helping businesses grow, scale, and dominate the online space. We specialize in branding, website development, SEO, social media marketing, and performance marketing to ensure businesses attract more customers and maximize their digital potential.
          </p>

          <p className="mt-4 text-base leading-7 tracking-wide text-gray-600 md:text-[17px]">
            At futureloopix , we don't just market – we create impact, drive sales, and turn clicks into conversions. Whether you're a startup or an established brand, our data-driven strategies will help you stand out, generate leads, and boost revenue.
          </p>

          {/* Stats */}
          {/* <div className="mt-10 grid grid-cols-3 gap-4">
            <div
              className="
                rounded-2xl
                border
                border-white/10
                bg-white/5
                p-5
                text-center
                backdrop-blur-xl
              "
            >
              <h3 className="text-3xl font-bold text-yellow-400">30+</h3>

              <p className="mt-2 text-sm text-gray-600">Happy Clients</p>
            </div>

            <div
              className="
                rounded-2xl
                border
                border-white/10
                bg-white/5
                p-5
                text-center
                backdrop-blur-xl
              "
            >
              <h3 className="text-3xl font-bold text-yellow-400">35+</h3>

              <p className="mt-2 text-sm text-gray-600">Projects</p>
            </div>

            <div
              className="
                rounded-2xl
                border
                border-white/10
                bg-white/5
                p-5
                text-center
                backdrop-blur-xl
              "
            >
              <h3 className="text-3xl font-bold text-yellow-400">2+</h3>

              <p className="mt-2 text-sm text-gray-600">Years Exp.</p>
            </div>
          </div> */}

        </motion.div>

        {/* RIGHT SIDE */}
        <motion.div
          initial={{ opacity: 0, x: 60 }}
          whileInView={{ opacity: 1, x: 0 }}
          transition={{ duration: 0.7 }}
          viewport={{ once: true }}
          className="relative flex justify-center"
        >
          <div
            className="
              group
              relative
              overflow-visible
            "
          >
            {/* Main Image Card */}
            <div
              className="
                relative
                overflow-hidden
                rounded-[32px]
                border
                border-yellow-400/20
                bg-white/5
                backdrop-blur-xl
                shadow-[0_0_40px_rgba(250,204,21,0.08)]
              "
            >
              {/* Image Container */}
              <div
                className="relative overflow-hidden rounded-[28px] h-[340px] w-[280px] sm:h-[420px] sm:w-[340px] lg:h-[520px] lg:w-[420px]"
              >
                <Image
                  src="/team_sm.jpg"
                  alt="Futureloopix Team"
                  fill
                  priority
                  className="
                    object-cover
                    transition-all
                    duration-700
                    group-hover:scale-110
                    group-hover:rotate-1
                  "
                />

                {/* Dark Overlay */}
                <div
                  className="
                    absolute
                    inset-0
                    bg-gradient-to-t
                    from-black/80
                    via-black/20
                    to-transparent
                  "
                />
              </div>

              {/* Floating Card 1 */}
              <div
                className="
                  absolute
                  -left-2
                  top-4
                  sm:top-8
                  rounded-2xl
                  border
                  border-yellow-400/20
                  bg-black/90
                  px-2.5
                  py-1.5
                  sm:px-3
                  sm:py-2
                  backdrop-blur-xl
                  shadow-xl
                "
              >
                <h3 className="text-base sm:text-xl font-bold text-yellow-400">2+</h3>

                <p className="text-[10px] sm:text-xs text-gray-300">Years Experience</p>
              </div>

              {/* Floating Card 2 */}
              <div
                className="
                  absolute
                  -right-2
                  top-[30%]
                  sm:top-1/2
                  -translate-y-1/2
                  rounded-2xl
                  border
                  border-yellow-400/20
                  bg-black/90
                  px-3
                  py-2
                  sm:px-5
                  sm:py-4
                  backdrop-blur-xl
                  shadow-xl
                "
              >
                <h3 className="text-base sm:text-xl font-bold text-yellow-400">35+</h3>

                <p className="text-[10px] sm:text-xs text-gray-300">Projects Delivered</p>
              </div>

              {/* Floating Card 3 */}
              <div
                className="
                  absolute
                  bottom-3
                  sm:bottom-12
                  left-1/2
                  -translate-x-1/2
                  rounded-2xl
                  border
                  border-yellow-400/20
                  bg-black/95
                  px-4
                  py-2
                  sm:px-6
                  sm:py-4
                  backdrop-blur-xl
                  shadow-xl
                "
              >
                <h3 className="text-center text-base sm:text-xl font-bold text-yellow-400">
                  30+
                </h3>

                <p className="text-center text-[10px] sm:text-xm text-gray-300">
                  Happy Clients
                </p>
              </div>

              {/* Premium Glow */}
              <div
                className="
                  absolute
                  -bottom-24
                  left-1/2
                  h-52
                  w-52
                  -translate-x-1/2
                  rounded-full
                  bg-yellow-500/20
                  blur-[120px]
                "
              />
              {/* Decorative Border Glow */}
              <div
                className="
                  pointer-events-none
                  absolute
                  inset-0
                  rounded-[32px]
                  border
                  border-yellow-400/10
                "
              />
            </div>

            {/* Floating Review Card */}
            <div
              className="
                absolute
                -bottom-10
                right-0
                rounded-3xl
                border
                border-yellow-400/20
                bg-black/90
                px-4
                py-3
                backdrop-blur-xl
                shadow-[0_0_30px_rgba(250,204,21,0.15)]
              "
            >
              <div className="flex items-center gap-3">
                <div
                  className="
                    flex
                    h-9
                    w-9
                    items-center
                    justify-center
                    rounded-full
                    bg-yellow-400
                    font-bold
                    text-black
                  "
                >
                  ★
                </div>

                <div>
                  <h4 className="text-base font-semibold text-black">
                    4.9/5 Rating
                  </h4>

                  <p className="text-sm text-gray-600">
                    Trusted by growing brands
                  </p>
                </div>
              </div>
            </div>
          </div>
        </motion.div>
      </div>
    </section>
  );
}
