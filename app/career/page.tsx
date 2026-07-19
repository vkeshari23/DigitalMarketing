"use client";

import { ArrowDown } from "lucide-react";
import { useRef } from "react";

export default function CareersPage() {
  const whyRef = useRef<HTMLDivElement | null>(null);

  const scrollToWhy = () => {
    whyRef.current?.scrollIntoView({ behavior: "smooth" });
  };

  return (
    <main className="bg-black text-white overflow-hidden">

      {/* ================= HERO ================= */}
      <section className="relative min-h-screen pt-36 px-6 md:px-12">

        {/* Glow */}
        <div className="absolute inset-0">
          <div className="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-yellow-400/10 blur-[180px] rounded-full" />
        </div>

        {/* Shape */}
        <div className="absolute top-10 right-0 opacity-20 hidden lg:block">
          <svg width="350" height="250" viewBox="0 0 350 250" fill="none">
            <path d="M150 10L250 40L300 120L250 180L150 160L100 80L150 10Z" stroke="#999" strokeWidth="2" />
          </svg>
        </div>

        <div className="relative max-w-7xl mx-auto">

          {/* Breadcrumb */}
          <div className="uppercase tracking-[3px] text-xs text-gray-400 mb-14">
            <span className="text-white font-semibold">Homepage</span> / Careers
          </div>

          {/* Heading */}
          <h1 className="text-5xl md:text-7xl font-bold leading-tight">
            Careers <span className="text-yellow-400 font-light">at Futureloopix</span>
          </h1>

          <h2 className="text-5xl md:text-7xl font-bold leading-tight mt-3">
            Grow, <span className="font-light">Innovate,</span>{" "}
            <span className="font-light">Succeed!</span>
          </h2>

          {/* Button */}
          <div className="flex items-center gap-5 mt-16">

            <button
              onClick={scrollToWhy}
              className="uppercase tracking-[3px] text-sm text-white hover:text-yellow-400 transition"
            >
              Read More
            </button>

            <button
              onClick={scrollToWhy}
              className="w-12 h-12 rounded-full bg-yellow-400 text-black flex items-center justify-center hover:scale-110 transition"
            >
              <ArrowDown size={18} />
            </button>

          </div>

        </div>
      </section>

      {/* ================= WHY CHOOSE ================= */}
      <section ref={whyRef} className="py-28 px-6 md:px-12">

        <div className="text-center max-w-3xl mx-auto">
          <h2 className="text-4xl md:text-5xl font-semibold">
            Why Choose <span className="text-yellow-400">Futureloopix?</span>
          </h2>

          <p className="mt-6 text-gray-400 leading-relaxed">
            Join a dynamic team where innovation meets opportunity and creativity
            drives real impact.
          </p>
        </div>

        {/* Cards */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 max-w-6xl mx-auto">

          {[
            {
              icon: "🚀",
              title: "Innovation First",
              desc: "Cutting-edge ideas and experimentation culture.",
            },
            {
              icon: "📈",
              title: "Career Growth",
              desc: "Learning, mentorship and fast growth path.",
            },
            {
              icon: "🤝",
              title: "Team Culture",
              desc: "Collaborative, creative and supportive environment.",
            },
          ].map((item, i) => (
            <div
              key={i}
              className="group bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl p-10 text-center hover:border-yellow-400/40 hover:scale-105 transition"
            >
              <div className="text-5xl mb-6 group-hover:scale-110 transition">
                {item.icon}
              </div>

              <h3 className="text-xl font-semibold text-white">
                {item.title}
              </h3>

              <p className="text-gray-400 mt-3 text-sm leading-relaxed">
                {item.desc}
              </p>
            </div>
          ))}

        </div>
      </section>

      {/* ================= FORM ================= */}
       <section className="py-28 px-6 md:px-12 bg-black text-white">

      <div className="max-w-4xl mx-auto">

        {/* Heading */}
        <h2 className="text-4xl md:text-5xl font-bold text-center mb-12">
          Join <span className="text-yellow-400">Futureloopix</span>
        </h2>

        {/* FORM CARD */}
        <div className="relative bg-white/5 border border-white/10 backdrop-blur-2xl rounded-3xl p-10 md:p-14 shadow-2xl overflow-hidden">

          {/* Glow */}
          <div className="absolute -top-20 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-yellow-400/10 blur-[140px] rounded-full" />

          <form className="relative space-y-6">

            {/* Row 1 */}
            <div className="grid md:grid-cols-2 gap-6">

              <input
                type="text"
                placeholder="Full Name"
                className="w-full bg-black/40 border border-gray-700 px-5 py-4 rounded-xl text-sm outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition"
              />

              <input
                type="email"
                placeholder="Email Address"
                className="w-full bg-black/40 border border-gray-700 px-5 py-4 rounded-xl text-sm outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition"
              />
            </div>

            {/* Row 2 */}
            <div className="grid md:grid-cols-2 gap-6">

              <input
                type="text"
                placeholder="Phone Number"
                className="w-full bg-black/40 border border-gray-700 px-5 py-4 rounded-xl text-sm outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition"
              />

              <input
                type="text"
                placeholder="Portfolio / LinkedIn URL"
                className="w-full bg-black/40 border border-gray-700 px-5 py-4 rounded-xl text-sm outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition"
              />
            </div>

            {/* Select Row */}
            <div className="grid md:grid-cols-2 gap-6">

              <select className="w-full bg-black/40 border border-gray-700 px-5 py-4 rounded-xl text-sm outline-none focus:border-yellow-400">
                <option>Select Position</option>
                <option>Frontend Developer</option>
                <option>Backend Developer</option>
                <option>Full Stack Developer</option>
                <option>UI/UX Designer</option>
              </select>

              <select className="w-full bg-black/40 border border-gray-700 px-5 py-4 rounded-xl text-sm outline-none focus:border-yellow-400">
                <option>Experience Level</option>
                <option>Fresher</option>
                <option>1-2 Years</option>
                <option>3-5 Years</option>
                <option>5+ Years</option>
              </select>

            </div>

            {/* File Upload */}
            <div className="border border-dashed border-gray-600 rounded-xl p-5 text-center hover:border-yellow-400 transition cursor-pointer">
              <p className="text-gray-400 text-sm">
                Upload Resume (PDF / DOC)
              </p>
              <input type="file" className="mt-3 text-sm" />
            </div>

            {/* Message */}
            <textarea
              rows={6}
              placeholder="Tell us about your passion and why you want to join Futureloopix..."
              className="w-full bg-black/40 border border-gray-700 px-5 py-4 rounded-xl text-sm outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition resize-none"
            />

            {/* Button */}
            <button
              type="submit"
              className="w-full bg-yellow-400 text-black font-bold py-4 rounded-xl hover:bg-yellow-300 transition shadow-lg shadow-yellow-400/20 tracking-wide"
            >
              Submit Application
            </button>

          </form>
        </div>

      </div>
    </section>

    </main>
  );
}