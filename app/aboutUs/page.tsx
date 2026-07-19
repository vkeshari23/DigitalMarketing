"use client";

import Image from "next/image";

export default function AboutPage() {
  return (
    <div className="w-full bg-white text-black pt-16 md:pt-20 overflow-hidden">

      {/* ================= HERO ================= */}
      <section className="relative py-16 md:py-24 px-6 md:px-12">

        {/* glow background */}
        <div className="absolute inset-0 overflow-hidden pointer-events-none">
          <div className="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-yellow-400/10 blur-[160px] rounded-full" />
        </div>

        <div className="relative max-w-7xl mx-auto grid md:grid-cols-2 gap-10 md:gap-14 items-center">

          {/* TEXT */}
          <div>
            <h1 className="text-4xl md:text-6xl font-bold leading-tight text-black">
              Meet <span className="text-yellow-500">Futureloopix</span>
              <br />
              Digital Marketing
            </h1>

            <p className="text-xl md:text-3xl mt-6 text-gray-600 leading-snug">
              Your Business <br /> Growth Partner
            </p>
          </div>

          {/* IMAGE */}
          <div className="flex justify-center">
            <div className="p-[6px] bg-gradient-to-br from-yellow-400/40 to-black/5 rounded-2xl shadow-[0_20px_60px_rgba(0,0,0,0.12)]">
              <div className="relative w-[300px] h-[340px] sm:w-[380px] sm:h-[420px] rounded-2xl overflow-hidden">
                <Image
                  src="/team_sm.jpg"
                  alt="Futureloopix team"
                  fill
                  className="object-cover"
                />
              </div>
            </div>
          </div>

        </div>
      </section>

      {/* ================= VISION & MISSION ================= */}
      <section className="py-16 md:py-24 px-6 md:px-12 bg-[#f8f8f8]">

        <div className="max-w-7xl mx-auto space-y-12 md:space-y-16">

          {/* VISION */}
          <div className="grid md:grid-cols-2 gap-8 md:gap-12 items-center bg-white border border-black/5 rounded-2xl p-6 sm:p-8 shadow-[0_15px_45px_rgba(0,0,0,0.06)]">

            <div className="relative w-full h-[220px] sm:h-[280px] rounded-xl overflow-hidden order-2 md:order-1">
              <Image
                src="/team_sm.jpg"
                alt="vision"
                fill
                className="object-cover"
              />
            </div>

            <div className="order-1 md:order-2">
              <h2 className="text-2xl md:text-3xl font-bold text-yellow-500">
                Vision
              </h2>
              <p className="mt-4 text-gray-600 leading-relaxed">
                Leading Media Agency globally with innovation and digital transformation,
                helping businesses grow beyond boundaries.
              </p>
            </div>
          </div>

          {/* MISSION */}
          <div className="grid md:grid-cols-2 gap-8 md:gap-12 items-center bg-white border border-black/5 rounded-2xl p-6 sm:p-8 shadow-[0_15px_45px_rgba(0,0,0,0.06)]">

            <div>
              <h2 className="text-2xl md:text-3xl font-bold text-yellow-500">
                Mission
              </h2>
              <p className="mt-4 text-gray-600 leading-relaxed">
                Empowering businesses with smart digital strategies, performance marketing
                and scalable online growth solutions.
              </p>
            </div>

            <div className="relative w-full h-[220px] sm:h-[280px] rounded-xl overflow-hidden">
              <Image
                src="/team_sm.jpg"
                alt="mission"
                fill
                className="object-cover"
              />
            </div>
          </div>

        </div>
      </section>

      {/* ================= WHY CHOOSE US ================= */}
      <section className="py-16 md:py-24 px-6 md:px-12">

        <div className="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 md:gap-12 items-center">

          <div className="p-[6px] bg-gradient-to-br from-yellow-400/40 to-black/5 rounded-2xl shadow-[0_20px_60px_rgba(0,0,0,0.10)]">
            <div className="relative w-full h-[260px] sm:h-[340px] rounded-2xl overflow-hidden">
              <Image
                src="/team_sm.jpg"
                alt="team"
                fill
                className="object-cover"
              />
            </div>
          </div>

          <div>
            <h2 className="text-3xl md:text-4xl font-bold text-black">
              Why Choose Us?
            </h2>

            <p className="mt-5 text-gray-600 leading-relaxed">
              We build data-driven, result-oriented strategies tailored for each business
              to maximize growth and ROI.
            </p>

            <ul className="mt-6 space-y-3 text-gray-700">
              <li className="flex items-center gap-3">
                <span className="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-yellow-400 text-black text-xs font-bold">✓</span>
                Smart data-driven strategies
              </li>
              <li className="flex items-center gap-3">
                <span className="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-yellow-400 text-black text-xs font-bold">✓</span>
                Affordable & scalable solutions
              </li>
              <li className="flex items-center gap-3">
                <span className="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-yellow-400 text-black text-xs font-bold">✓</span>
                Expert SEO & marketing team
              </li>
            </ul>
          </div>

        </div>
      </section>

      {/* ================= PROCESS ================= */}
      <section className="py-16 md:py-24 px-6 md:px-12 bg-[#f8f8f8] text-center">

        <h2 className="text-3xl md:text-4xl font-bold text-black">
          How We Deliver <span className="text-yellow-500">Excellence</span>
        </h2>

        <p className="text-gray-600 mt-3">
          Simple, structured and result-driven process
        </p>

        <div className="mt-12 md:mt-14 grid sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">

          {["Discovery", "Strategy", "Execution", "Results"].map((title, i) => (
            <div
              key={i}
              className="bg-white border border-black/5 rounded-xl p-6 shadow-[0_10px_30px_rgba(0,0,0,0.06)] hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(0,0,0,0.10)] transition"
            >
              <h3 className="text-4xl font-bold text-yellow-400">
                0{i + 1}
              </h3>
              <h4 className="mt-2 font-semibold text-lg text-black">{title}</h4>
              <p className="text-sm text-gray-500 mt-2">
                We ensure every step is optimized for performance and growth.
              </p>
            </div>
          ))}

        </div>
      </section>

    </div>
  );
}
