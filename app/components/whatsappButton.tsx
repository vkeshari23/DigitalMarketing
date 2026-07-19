"use client";

import { FaWhatsapp } from "react-icons/fa";

const PHONE = "919811386504";
const MESSAGE =
  "Hello Futureloopix Technologies! 👋 I'm interested in your digital marketing services and would like to know more. Could you please help me?";

export default function WhatsAppButton() {
  const href = `https://wa.me/${PHONE}?text=${encodeURIComponent(MESSAGE)}`;

  return (
    <a
      href={href}
      target="_blank"
      rel="noopener noreferrer"
      aria-label="Chat with us on WhatsApp"
      title="Chat with us on WhatsApp"
      className="group fixed bottom-5 right-5 z-[9998] flex items-center justify-center md:bottom-6 md:right-6"
    >
      {/* Pulsing ring */}
      <span className="absolute inline-flex h-full w-full animate-ping rounded-full bg-green-500/40" />

      {/* Icon button */}
      <span className="relative flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] text-white shadow-[0_8px_24px_rgba(37,211,102,0.45)] transition-transform duration-300 group-hover:scale-110 md:h-16 md:w-16">
        <FaWhatsapp className="text-[28px] md:text-[32px]" />
      </span>

      {/* Tooltip label (desktop) */}
      <span className="pointer-events-none absolute right-full mr-3 hidden whitespace-nowrap rounded-lg bg-black/85 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-lg transition-opacity duration-300 group-hover:opacity-100 md:block">
        Chat with us
      </span>
    </a>
  );
}
