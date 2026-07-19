"use client";

import { useState, useEffect } from "react";
import { usePathname } from "next/navigation";
import Link from "next/link";
import { motion } from "framer-motion";
import { Menu, X } from "lucide-react";

export default function Navbar() {
  const [open, setOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);
  const pathname = usePathname();

  const menuItems = [
    { name: "Home", path: "/" },
    { name: "About Us", path: "/aboutUs" },
    { name: "Services", path: "/services" },
    { name: "Career", path: "/career" },
    { name: "Blogs", path: "/blogs" },
  ];

  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 20);

    window.addEventListener("scroll", handleScroll);

    return () => {
      window.removeEventListener("scroll", handleScroll);
    };
  }, []);

  // Lock body scroll while the mobile drawer is open
  useEffect(() => {
    document.body.style.overflow = open ? "hidden" : "";
    return () => {
      document.body.style.overflow = "";
    };
  }, [open]);

  return (
    <div className="fixed top-0 left-0 w-full z-[9999] isolate">
      {/* GOLDEN TOP LINE */}
      <div className="h-[2px] w-full bg-gradient-to-r from-yellow-400 via-yellow-200 to-yellow-500 animate-pulse" />

      <nav
        className={`relative overflow-visible h-20 md:h-28 px-4 sm:px-6 md:px-14 flex items-center justify-between text-white transition-all duration-300 bg-black shadow-[0_4px_0_0_#000]
        ${scrolled ? "border-b border-white/10" : ""}`}
      >
        {/* LOGO */}
        <Link href="/" className="relative z-10 flex items-center">
          <img
            src="/flx_logo.png"
            alt="Futureloopix Logo"
            className="h-16 sm:h-20 md:h-[100px] w-auto object-contain"
          />
        </Link>

        {/* DESKTOP MENU */}
        <ul
          className="hidden md:flex items-center z-10 shrink-0"
          style={{ fontFamily: "Arial, sans-serif" }}
        >
          {menuItems.map((item, i) => {
            const isActive = pathname === item.path;

            return (
              <li key={i} className="shrink-0" style={{ margin: "0px 25px" }}>
                <Link
                  href={item.path}
                  className={`whitespace-nowrap rounded-full transition-all duration-300
                  ${
                    isActive
                      ? "bg-yellow-400 text-black shadow-lg px-5 py-2"
                      : "text-white hover:text-yellow-400 hover:bg-white/10 px-3 py-2"
                  }`}
                  style={{
                    fontFamily: "Arial, sans-serif",
                    fontSize: "20px",
                  }}
                >
                  {item.name}
                </Link>
              </li>
            );
          })}
        </ul>

        {/* CONTACT BUTTON */}
        <motion.div
          whileHover={{ scale: 1.08 }}
          whileTap={{ scale: 0.95 }}
          className="hidden md:block z-10 shrink-0 ml-2"
        >
          <Link
            href="/contact"
            className="whitespace-nowrap bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 text-black px-6 lg:px-8 py-3 text-sm lg:text-base rounded-full font-extrabold shadow-lg hover:shadow-yellow-400/40 transition"
          >
            Contact Us
          </Link>
        </motion.div>

        {/* MOBILE MENU BUTTON */}
        <div className="md:hidden z-10">
          <button onClick={() => setOpen(!open)}>
            {open ? <X size={28} /> : <Menu size={28} />}
          </button>
        </div>
      </nav>

      {/* MOBILE MENU — RIGHT-SIDE DRAWER */}
      {/* BACKDROP */}
      <div
        onClick={() => setOpen(false)}
        className={`md:hidden fixed inset-0 bg-black/60 backdrop-blur-sm z-[60] transition-opacity duration-300 ${
          open ? "opacity-100" : "opacity-0 pointer-events-none"
        }`}
      />

      {/* DRAWER PANEL */}
      <aside
        className={`md:hidden fixed top-0 right-0 h-[100dvh] w-[82%] max-w-[340px] bg-black border-l border-yellow-400/20 z-[70] flex flex-col overflow-hidden transition-transform duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] ${
          open ? "translate-x-0" : "translate-x-full"
        }`}
      >
        {/* ROTATING CUBE BACKGROUND (only while open) */}
        {open && (
          <div className="cube-bg pointer-events-none absolute inset-0 flex items-center justify-center opacity-[0.18]">
            <div className="cube-scene">
              <div className="cube">
                {["front", "back", "right", "left", "top", "bottom"].map((f) => (
                  <span key={f} className={`cube-face cube-face--${f}`} />
                ))}
              </div>
            </div>
          </div>
        )}

        {/* SOFT GLOW */}
        <div className="pointer-events-none absolute -top-16 -right-10 h-64 w-64 rounded-full bg-yellow-400/10 blur-[100px]" />
        <div className="pointer-events-none absolute bottom-0 left-0 h-56 w-56 rounded-full bg-yellow-500/10 blur-[110px]" />

        {/* HEADER */}
        <div className="relative z-10 flex items-center justify-between px-6 h-20 border-b border-white/10">
          <img
            src="/flx_logo.png"
            alt="Futureloopix Logo"
            className="h-14 w-auto object-contain"
          />
          <button
            onClick={() => setOpen(false)}
            aria-label="Close menu"
            className="text-white hover:text-yellow-400 transition"
          >
            <X size={28} />
          </button>
        </div>

        {/* LINKS */}
        <div className="relative z-10 flex-1 overflow-y-auto px-6 py-8 space-y-3">
          {menuItems.map((item, i) => {
            const isActive = pathname === item.path;

            return (
              <Link
                key={i}
                href={item.path}
                onClick={() => setOpen(false)}
                className={`block px-5 py-3.5 rounded-xl text-lg font-semibold transition-all duration-300
                ${
                  isActive
                    ? "bg-yellow-400 text-black shadow-lg shadow-yellow-400/20"
                    : "text-white hover:bg-white/10 hover:pl-7"
                }`}
              >
                {item.name}
              </Link>
            );
          })}

          <Link
            href="/contact"
            onClick={() => setOpen(false)}
            className="block text-center bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-500 text-black py-3.5 rounded-xl text-lg font-bold mt-4 shadow-lg shadow-yellow-400/20"
          >
            Contact Us
          </Link>
        </div>
      </aside>

      {/* ================= CUBE ANIMATION STYLES ================= */}
      <style jsx>{`
        .cube-scene {
          perspective: 900px;
        }
        .cube {
          position: relative;
          width: 150px;
          height: 150px;
          transform-style: preserve-3d;
          animation: cubeSpin 16s linear infinite;
        }
        .cube-face {
          position: absolute;
          width: 150px;
          height: 150px;
          border: 1px solid rgba(250, 204, 21, 0.55);
          background: rgba(250, 204, 21, 0.04);
          box-shadow: inset 0 0 30px rgba(250, 204, 21, 0.08);
        }
        .cube-face--front {
          transform: translateZ(75px);
        }
        .cube-face--back {
          transform: rotateY(180deg) translateZ(75px);
        }
        .cube-face--right {
          transform: rotateY(90deg) translateZ(75px);
        }
        .cube-face--left {
          transform: rotateY(-90deg) translateZ(75px);
        }
        .cube-face--top {
          transform: rotateX(90deg) translateZ(75px);
        }
        .cube-face--bottom {
          transform: rotateX(-90deg) translateZ(75px);
        }
        @keyframes cubeSpin {
          0% {
            transform: rotateX(0deg) rotateY(0deg);
          }
          100% {
            transform: rotateX(360deg) rotateY(360deg);
          }
        }
      `}</style>
    </div>
  );
}