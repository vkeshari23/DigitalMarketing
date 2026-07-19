"use client";

import {
  FaEnvelope,
  FaMapMarkerAlt,
  FaPhoneAlt,
  FaFacebookF,
  FaLinkedinIn,
  FaInstagram,
  FaYoutube,
  FaPinterestP,
} from "react-icons/fa";
import Link from "next/link";
import Image from "next/image";
import { motion } from "framer-motion";
import { services } from "../data/services";

const socials = [
  {
    Icon: FaInstagram,
    label: "Instagram",
    href: "https://www.instagram.com/futureloopix?igsh=NjFmYTJpNXF2bW10",
    color: "hover:bg-gradient-to-tr hover:from-pink-500 hover:to-yellow-400",
  },
  {
    Icon: FaYoutube,
    label: "YouTube",
    href: "https://www.youtube.com/channel/UC6ce_Bp_omNtJtownSqmowQ",
    color: "hover:bg-red-600",
  },
  {
    Icon: FaFacebookF,
    label: "Facebook",
    href: "https://www.facebook.com/profile.php?id=61591191474166",
    color: "hover:bg-blue-600",
  },
  {
    Icon: FaLinkedinIn,
    label: "LinkedIn",
    href: "https://www.linkedin.com/in/futureloopix-technologies-b38964420?utm_source=share_via&utm_content=profile&utm_medium=member_android",
    color: "hover:bg-sky-700",
  },
  {
    Icon: FaPinterestP,
    label: "Pinterest",
    href: "https://pin.it/23Tk8Pl3Z",
    color: "hover:bg-red-700",
  },
];

const container = {
  hidden: {},
  show: {
    transition: { staggerChildren: 0.12 },
  },
};

const item = {
  hidden: { opacity: 0, y: 30 },
  show: {
    opacity: 1,
    y: 0,
    transition: { duration: 0.6, ease: [0.22, 1, 0.36, 1] as const },
  },
};

export default function Footer() {
  return (
    <footer className="relative bg-gradient-to-b from-white to-[#f6f6f7] text-gray-600 px-6 md:px-16 pt-10 pb-6 overflow-hidden font-[family-name:var(--font-inter)]">
      {/* Animated top accent line */}
      <div className="footer-accent-line absolute top-0 left-0 h-[2px] w-full" />

      {/* ================= ANIMATED BACKGROUND ================= */}
      <div className="pointer-events-none absolute inset-0 overflow-hidden" aria-hidden="true">
        {/* soft drifting blobs */}
        <div className="footer-float absolute -top-24 -left-16 h-72 w-72 rounded-full bg-gray-300/25 blur-[90px]" />
        <div className="footer-float-alt absolute top-1/2 right-[-60px] h-80 w-80 rounded-full bg-slate-300/25 blur-[100px]" />
        <div className="footer-float absolute -bottom-24 left-1/3 h-72 w-72 rounded-full bg-gray-200/40 blur-[90px]" />

        {/* faint moving grid */}
        <div className="footer-grid absolute inset-0 opacity-[0.4]" />

        {/* rising particles */}
        {[
          { left: "12%", delay: "0s", dur: "8s" },
          { left: "28%", delay: "2.5s", dur: "9s" },
          { left: "46%", delay: "1.2s", dur: "7.5s" },
          { left: "63%", delay: "3.4s", dur: "10s" },
          { left: "78%", delay: "0.8s", dur: "8.5s" },
          { left: "90%", delay: "2s", dur: "9.5s" },
        ].map((p, i) => (
          <span
            key={i}
            className="footer-particle absolute bottom-10 h-1.5 w-1.5 rounded-full bg-gray-400/40"
            style={{ left: p.left, animationDelay: p.delay, animationDuration: p.dur }}
          />
        ))}
      </div>

      <motion.div
        variants={container}
        initial="hidden"
        whileInView="show"
        viewport={{ once: true, amount: 0.2 }}
        className="relative grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-8 lg:gap-12"
      >
        {/* ================= COLUMN 1 ================= */}
        <motion.div variants={item} className="space-y-4">
          <Image
            src="/footer_logo.jpeg"
            alt="Futureloopix Technologies"
            width={260}
            height={160}
            priority={false}
            className="h-24 w-auto object-contain drop-shadow-md transition-transform duration-500 hover:scale-105"
          />

          <p className="text-base text-gray-500 leading-relaxed max-w-sm">
            We build powerful digital experiences that help brands grow, scale,
            and dominate their online presence with AI-driven strategies.
          </p>

          <div className="space-y-3 text-base">
            <a
              href="mailto:Info@futureloopix.com"
              className="flex items-center gap-3 group w-fit"
            >
              <span className="grid place-items-center w-9 h-9 rounded-full bg-yellow-400/10 text-yellow-500 group-hover:bg-yellow-400 group-hover:text-white transition">
                <FaEnvelope />
              </span>
              <span className="group-hover:text-yellow-600 transition">
                Info@futureloopix.com
              </span>
            </a>

            <a
              href="tel:+919811386504"
              className="flex items-center gap-3 group w-fit"
            >
              <span className="grid place-items-center w-9 h-9 rounded-full bg-yellow-400/10 text-yellow-500 group-hover:bg-yellow-400 group-hover:text-white transition">
                <FaPhoneAlt />
              </span>
              <span className="group-hover:text-yellow-600 transition">
                +91 98113 86504
              </span>
            </a>

            <div className="flex items-start gap-3">
              <span className="grid place-items-center w-9 h-9 rounded-full bg-yellow-400/10 text-yellow-500 shrink-0">
                <FaMapMarkerAlt />
              </span>
              <span className="pt-1.5">
                A-88, Second Floor, Sector 4, Noida, 201301
              </span>
            </div>
          </div>
        </motion.div>

        {/* ================= COLUMN 2 ================= */}
        <motion.div variants={item}>
          <h3 className="text-black font-[family-name:var(--font-poppins)] font-bold text-xl mb-4">
            Our Services
          </h3>

          <ul className="space-y-3 text-base">
            {services.map((s) => (
              <li key={s.slug}>
                <Link
                  href={`/services/${s.slug}`}
                  className="inline-flex items-center gap-2 text-gray-500 hover:text-yellow-600 hover:translate-x-1 transition-all duration-300"
                >
                  <span className="text-yellow-500">➤</span>
                  {s.title}
                </Link>
              </li>
            ))}
          </ul>
        </motion.div>

        {/* ================= COLUMN 3 ================= */}
        <motion.div variants={item}>
          <h3 className="text-black font-[family-name:var(--font-poppins)] font-bold text-xl mb-4">
            Quick Links
          </h3>

          <ul className="space-y-3 text-base">
            {[
              { label: "About Us", href: "/aboutUs" },
              { label: "Career", href: "/career" },
              { label: "Services", href: "/services" },
              { label: "Contact", href: "/contact" },
            ].map((l, i) => (
              <li key={i}>
                <Link
                  href={l.href}
                  className="inline-flex items-center gap-2 text-gray-500 hover:text-yellow-600 hover:translate-x-1 transition-all duration-300"
                >
                  <span className="text-yellow-500">➤</span>
                  {l.label}
                </Link>
              </li>
            ))}
          </ul>
        </motion.div>

        {/* ================= COLUMN 4 ================= */}
        <motion.div variants={item} className="space-y-4">
          <h3 className="text-black font-[family-name:var(--font-poppins)] font-bold text-xl leading-snug">
            Grow Your Business With Us
          </h3>

          <p className="text-base text-gray-500">
            Get a free strategy audit and start scaling your business today.
          </p>

          <div className="space-y-3">
            <Link
              href="/contact"
              className="block text-center bg-gradient-to-r from-yellow-400 via-yellow-500 to-amber-500 text-black py-3 rounded-full font-[family-name:var(--font-poppins)] font-semibold shadow-lg shadow-yellow-500/20 hover:scale-105 hover:shadow-yellow-500/40 transition-all duration-300"
            >
              CONTACT US
            </Link>

            <button className="w-full border border-yellow-500/40 text-black py-3 rounded-full font-medium hover:bg-yellow-400 hover:border-yellow-400 transition-all duration-300">
              LET&rsquo;S CHAT
            </button>
          </div>

          {/* Social */}
          <div>
            <p className="text-sm font-semibold text-gray-700 mb-3 tracking-wide">
              FOLLOW US
            </p>
            <div className="flex flex-wrap gap-3">
              {socials.map(({ Icon, label, href, color }, i) => (
                <a
                  key={i}
                  href={href}
                  target="_blank"
                  rel="noopener noreferrer"
                  aria-label={label}
                  title={label}
                  className={`grid place-items-center w-11 h-11 rounded-full bg-gray-100 text-gray-500 shadow-sm hover:text-white hover:-translate-y-1 hover:shadow-md transition-all duration-300 ${color}`}
                >
                  <Icon className="text-lg" />
                </a>
              ))}
            </div>
          </div>
        </motion.div>
      </motion.div>

      {/* Bottom line */}
      <div className="relative mt-8 pt-5 border-t border-black/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-sm text-gray-500 text-center">
        <span>
          © {new Date().getFullYear()} Futureloopix Technologies. All Rights
          Reserved.
        </span>
        <span className="text-gray-400">
          Crafted with <span className="text-yellow-500">★</span> for the future.
        </span>
      </div>
    </footer>
  );
}
