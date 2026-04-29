"use client";

import Image from "next/image";
import { useState } from "react";

export default function PortfolioSection() {
  const [selectedImage, setSelectedImage] = useState(null);

  const images = [
    "/pexels-ivan-s-8117437.jpg",
    "/pexels-silverkblack-36765639.jpg",
    "/pexels-greta-hoffman-7859316.jpg",
    "/pexels-george-milton-7014515.jpg",
    "/pexels-viridianaor-34507404.jpg",
    "/pexels-silverkblack-36765639.jpg",
    "/pexels-george-milton-7014515.jpg",
    "/pexels-greta-hoffman-7859316.jpg",
    "/pexels-ivan-s-8117437.jpg",
  ];

  return (
    <section className="bg-[#f3f3f3] py-20 px-6 md:px-16 lg:px-24">
      
      {/* Heading */}
      <h2 className="text-4xl md:text-6xl text-center font-light mb-16">
        <span className="font-bold">Our</span> Portfolio
      </h2>

      {/* Masonry Layout */}
      <div className="max-w-5xl mx-auto columns-1 sm:columns-2 lg:columns-3 gap-4 space-y-4">
        
        {images.map((src, index) => (
          <div
            key={index}
            onClick={() => setSelectedImage(src)}
            className="break-inside-avoid rounded-xl overflow-hidden group cursor-pointer hover:-translate-y-1 transition shadow-sm hover:shadow-md"
          >
            <Image
              src={src}
              alt="portfolio"
              width={500}
              height={500}
              className="w-full h-auto max-h-[220px] object-cover rounded-xl transition duration-500 group-hover:scale-105"
            />
          </div>
        ))}
      </div>

      {/* Modal / Lightbox */}
      {selectedImage && (
        <div
          className="fixed inset-0 bg-black/80 flex items-center justify-center z-50"
          onClick={() => setSelectedImage(null)}
        >
          {/* Close Button */}
          <button
            onClick={() => setSelectedImage(null)}
            className="absolute top-6 right-6 text-white text-3xl font-bold z-50"
          >
            ✕
          </button>

          {/* Image Container */}
          <div
            className="relative w-[70vw] h-[70vh] max-w-4xl max-h-[80vh]"
            onClick={(e) => e.stopPropagation()}
          >
            <Image
              src={selectedImage}
              alt="preview"
              fill
              className="object-cover rounded-xl"
            />
          </div>
        </div>
      )}
    </section>
  );
}