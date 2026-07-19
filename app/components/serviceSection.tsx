"use client";

import Image from "next/image";
import Link from "next/link";
import { services } from "../data/services";

export default function ServicesSection() {
  return (
    <section id="services" className="relative overflow-hidden bg-black py-16 md:py-20 scroll-mt-14 md:scroll-mt-16">

      {/* Background Glow */}
      <div className="absolute top-0 left-0 w-[500px] h-[500px] bg-yellow-500/10 blur-[180px] rounded-full" />
      <div className="absolute bottom-0 right-0 w-[450px] h-[450px] bg-yellow-500/10 blur-[160px] rounded-full" />

      <div className="relative max-w-6xl mx-auto px-6">


        {/* Heading */}
        <div className="text-center max-w-3xl mx-auto mt-8">

          <h2 className="text-3xl md:text-4xl font-bold text-white leading-tight">
            Digital Solutions For
            <span className="block text-yellow-400">
              Every Business Need
            </span>
          </h2>

          <p className="mt-4 text-base text-gray-400 leading-7 max-w-2xl mx-auto">
            Discover powerful AI-driven marketing solutions designed to
            increase visibility, generate quality leads and accelerate
            business growth.
          </p>

        </div>

        {/* Services Grid */}
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">

          {services.map((service, index) => (
            <div
              key={service.slug}
              className="
                group
                relative
                h-[240px] md:h-[250px]
                overflow-hidden
                rounded-2xl
                border
                border-white/10
                bg-neutral-900
                transition-all
                duration-500
                hover:-translate-y-3
                hover:border-yellow-400/40
                hover:shadow-[0_0_30px_rgba(250,204,21,0.15)]
              "
            >

              {/* Image */}
              <div className="absolute inset-0 overflow-hidden">
  <Image
    src={service.img}
    alt={service.title}
    fill
    loading="lazy"
    unoptimized
    className="
      object-cover
      object-center
      transition-transform
      duration-700
      group-hover:scale-100
    "
  />
</div>

              {/* Overlay */}
              <div className="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent" />

              {/* Hover Yellow Glow */}
              <div
                className="
                  absolute
                  inset-0
                  bg-yellow-500/10
                  opacity-0
                  group-hover:opacity-100
                  transition-all
                  duration-500
                "
              />

              {/* Service Number */}
              {/* <div className="absolute top-5 right-5 text-5xl font-bold text-white/10">
                {String(index + 1).padStart(2, "0")}
              </div> */}

              {/* Content */}
              <div className="absolute bottom-0 left-0 right-0 p-5">

                <h3 className="text-white text-lg font-semibold mb-2">
                  {service.title}
                </h3>

                <p
                  className="
                    text-gray-300
                    text-[13px]
leading-6
                    overflow-hidden
                    max-h-0
                    opacity-0
                    group-hover:max-h-40
                    group-hover:opacity-100
                    transition-all
                    duration-500
                  "
                >
                  {service.shortDesc}
                </p>

                <Link
                  href={`/services/${service.slug}`}
                  className="
                    mt-4
                    inline-block
                    px-4
                    py-1.5
                    rounded-full
                    bg-yellow-400
                    text-black
                    font-medium text-sm
                    transition-all
                    duration-300
                    hover:bg-yellow-300
                  "
                >
                  Learn More →
                </Link>

              </div>

            </div>
          ))}

        </div>

      </div>
    </section>
  );
}