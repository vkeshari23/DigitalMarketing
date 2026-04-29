"use client";

import { useState } from "react";
import { ChevronLeft, ChevronRight } from "lucide-react";
import Image from "next/image";

const testimonials = [
  {
    name: "Dr.Sushree",
    role: "AESTHETIC EVER CLINIC",
    image: "/AIDr.png", // add image in public folder
    text: "Regortz Digital Marketing transformed our website into a sleek, mobile-friendly platform optimized for SEO. Our organic traffic has skyrocketed, and we're ranking higher on Google. Highly recommended!",
  },
  {
    name: "John Doe",
    role: "CEO, Startup",
    image: "/team_sm.jpg",
    text: "Amazing experience working with them. Our business growth improved significantly!",
  },
];

export default function TestimonialSection() {
  const [index, setIndex] = useState(0);

  const prevSlide = () => {
    setIndex((prev) => (prev === 0 ? testimonials.length - 1 : prev - 1));
  };

  const nextSlide = () => {
    setIndex((prev) => (prev === testimonials.length - 1 ? 0 : prev + 1));
  };

  const current = testimonials[index];

  return (
    <section className="bg-gray-100 py-20 px-4 text-center relative">
      {/* Heading */}
      <h2 className="text-4xl md:text-5xl font-semibold text-black">
        Customer Voices:
      </h2>
      <h3 className="text-4xl md:text-5xl font-bold mt-2">
        Hear What They Say!
      </h3>

      {/* Quote Icon */}
      <div className="text-yellow-500 text-5xl mt-10">“</div>

      {/* Profile */}
      <div className="flex flex-col items-center mt-4">
        <Image
          src={current.image}
          alt={current.name}
          width={60}
          height={60}
          className="rounded-md"
        />
        <h4 className="mt-3 font-semibold text-lg">{current.name}</h4>
        <p className="text-sm tracking-widest text-gray-500">
          {current.role}
        </p>
      </div>

      {/* Text */}
      <p className="max-w-3xl mx-auto mt-8 text-gray-600 text-lg leading-relaxed">
        {current.text}
      </p>

      {/* Arrows */}
      <button
        onClick={prevSlide}
        className="absolute left-10 top-1/2 -translate-y-1/2 border rounded-full p-3 opacity-40 hover:opacity-100 transition"
      >
        <ChevronLeft />
      </button>

      <button
        onClick={nextSlide}
        className="absolute right-10 top-1/2 -translate-y-1/2 border rounded-full p-3 hover:bg-black hover:text-white transition"
      >
        <ChevronRight />
      </button>
    </section>
  );
}