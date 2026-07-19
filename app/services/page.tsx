"use client";

import {
  Search,
  BarChart3,
  Target,
  Megaphone,
  Palette,
  Monitor,
  TrendingUp,
  Globe,
} from "lucide-react";

import { motion } from "framer-motion";

const services = [
  { icon: <Search size={26} />, title: "360° Digital Marketing Services", desc: "Complete. Connected. Powerful" },
  { icon: <BarChart3 size={26} />, title: "Lead Generation / PPC", desc: "Clicks. Leads. Sales." },
  { icon: <Target size={26} />, title: "Google Ads / Meta Ads", desc: "Target. Reach. Convert." },
  { icon: <Megaphone size={26} />, title: "Social Media Marketing", desc: "Engage. Influence. Grow." },
  { icon: <Palette size={26} />, title: "Brand Strategy & Identity", desc: "Craft. Elevate. Lead." },
  { icon: <Monitor size={26} />, title: "ORM - Reputation Management", desc: "Protect. Manage. Shine." },
  { icon: <TrendingUp size={26} />, title: "Web & App Development", desc: "Design. Build. Convert." },
  { icon: <Globe size={26} />, title: "SEO Optimization", desc: "Rank. Visibility. Traffic" },
];

export default function Services() {
  return (
    <section className="relative bg-black text-white pt-36 pb-28 px-6 overflow-hidden">

      {/* Glow Background */}
      <div className="absolute inset-0">
        <div className="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-yellow-400/10 blur-[160px] rounded-full" />
        <div className="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white/5 blur-[140px] rounded-full" />
      </div>

      {/* Heading */}
      <div className="relative text-center max-w-3xl mx-auto">
        <h2 className="text-4xl md:text-5xl font-bold">
          Our <span className="text-yellow-400">Services</span>
        </h2>

        <p className="text-gray-400 mt-4">
          End-to-end digital solutions designed to grow your business faster
        </p>
      </div>

      {/* Grid */}
      <div className="relative mt-16 max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

        {services.map((item, index) => (
          <motion.div
            key={index}
            initial={{ opacity: 0, y: 40 }}
            whileInView={{ opacity: 1, y: 0 }}
            viewport={{ once: true }}
            transition={{ duration: 0.5, delay: index * 0.08 }}
            whileHover={{ scale: 1.05 }}
            className="group relative"
          >
            <div className="relative bg-white/5 border border-white/10 backdrop-blur-xl rounded-2xl p-7 h-full">

              <div className="w-14 h-14 flex items-center justify-center rounded-full bg-yellow-400/10 border border-yellow-400/30 text-yellow-400 mb-5 group-hover:scale-110 transition">
                {item.icon}
              </div>

              <h3 className="text-lg font-semibold">
                {item.title}
              </h3>

              <p className="mt-3 text-sm text-gray-400">
                {item.desc}
              </p>

              <div className="mt-5 h-[2px] w-0 group-hover:w-full bg-yellow-400 transition-all duration-500" />
            </div>
          </motion.div>
        ))}

      </div>
    </section>
  );
}