"use client";

import { useState, useEffect } from "react";
import { usePathname } from "next/navigation";
import Link from "next/link";
import { motion, AnimatePresence } from "framer-motion";
import { Menu, X } from "lucide-react";

export default function Navbar() {
  const [open, setOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);
  const pathname = usePathname();

  const menuItems = [
    { name: "Home", path: "/" },
    { name: "AboutUs", path: "/aboutUs" },
    { name: "Services", path: "/services" },
    // { name: "Career", path: "/career" },
    // { name: "Blogs", path: "/blogs" },
  ];

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 20);
    };
    window.addEventListener("scroll", handleScroll);
    return () => window.removeEventListener("scroll", handleScroll);
  }, []);

  return (
    <div className="fixed top-0 left-0 w-full z-50 bg-black">
      {/* Top Gradient Line */}
      <div className="h-[2px] w-full bg-gradient-to-r from-purple-500 via-pink-500 to-purple-500 animate-spinSlow" />

      <nav
        className={`transition-all duration-300 px-6 md:px-12 py-4 flex items-center justify-between
        ${
          scrolled
            ? "backdrop-blur-xl bg-black/80 border-b border-white/20"
            : "backdrop-blur-md bg-black/60"
        } text-white`}
      >
        {/* 🔥 LOGO WITH ROTATING TEXT */}
        <div className="flex items-center gap-3">

          <div className="relative w-16 h-16 flex items-center justify-center">

            {/* Rotating Circle Text */}
            <div className="absolute inset-0 animate-spinSlow">
              <svg viewBox="0 0 100 100" className="w-full h-full">
                <defs>
                  <path
                    id="circlePath"
                    d="M 50,50 m -40,0 a 40,40 0 1,1 80,0 a 40,40 0 1,1 -80,0"
                  />
                </defs>
                <text
                  fill="white"
                  fontSize="8"
                  letterSpacing="2"
                  className="uppercase"
                >
                  <textPath href="#circlePath">
                    • FUTURELOOPIX TECHNOLOGIES • FUTURELOOPIX TECHNOLOGIES •
                  </textPath>
                </text>
              </svg>
            </div>

            {/* Center Logo */}
            <img
              src="/logo_fl.png"
              alt="logo"
              className="w-18 h-18 object-contain z-10"
            />
          </div>

          {/* Company Name */}
          <span className="text-xl md:text-2xl font-bold tracking-wide">
            Futureloopix
          </span>
        </div>

        {/* Desktop Menu */}
        <ul className="hidden md:flex gap-8 text-lg font-medium">
          {menuItems.map((item, index) => {
            const isActive = pathname === item.path;
            return (
              <li key={index} className="relative group">
                <Link href={item.path}>
                  <span
                    className={`transition-colors duration-300 ${
                      isActive
                        ? "text-purple-400"
                        : "group-hover:text-purple-400"
                    }`}
                  >
                    {item.name}
                  </span>
                </Link>

                <span
                  className={`absolute left-0 bottom-0 h-[2px] bg-purple-500 transition-all duration-300
                  ${isActive ? "w-full" : "w-0 group-hover:w-full"}`}
                ></span>
              </li>
            );
          })}
        </ul>

        {/* Contact Button */}
        <motion.div whileHover={{ scale: 1.1 }} whileTap={{ scale: 0.95 }} className="hidden md:block">
          <Link
            href="/contact"
            className="bg-gradient-to-r from-purple-600 to-pink-500 px-6 py-2 rounded-full font-semibold"
          >
            Contact Us
          </Link>
        </motion.div>

        {/* Mobile Button */}
        <div className="md:hidden">
          <button onClick={() => setOpen(!open)}>
            {open ? <X size={28} /> : <Menu size={28} />}
          </button>
        </div>
      </nav>

      {/* Mobile Menu */}
      <AnimatePresence>
        {open && (
          <motion.div
            initial={{ opacity: 0, y: -20 }}
            animate={{ opacity: 1, y: 0 }}
            exit={{ opacity: 0, y: -20 }}
            className="md:hidden bg-black/90 px-6 py-6 space-y-4"
          >
            {menuItems.map((item, index) => {
              const isActive = pathname === item.path;
              return (
                <Link
                  key={index}
                  href={item.path}
                  className={`block text-lg border-b pb-2 ${
                    isActive ? "text-purple-400" : "text-white"
                  }`}
                  onClick={() => setOpen(false)}
                >
                  {item.name}
                </Link>
              );
            })}

            <Link
              href="/contact"
              className="block text-center bg-gradient-to-r from-purple-600 to-pink-500 py-3 rounded-full font-semibold mt-4"
            >
              Contact Us
            </Link>
          </motion.div>
        )}
      </AnimatePresence>
    </div>
  );
}