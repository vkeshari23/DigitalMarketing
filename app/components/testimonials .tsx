"use client";

import { useState, useEffect } from "react";
import { Swiper, SwiperSlide } from "swiper/react";
import { Autoplay, Pagination, EffectCoverflow } from "swiper/modules";
import { Star, Quote } from "lucide-react";

import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/effect-coverflow";

const testimonials = [
  {
    name: "Rajesh Kumar",
    role: "Founder, Sharma Enterprises",
    initials: "RK",
    color: "from-amber-400 to-yellow-500",
    rating: 5,
    text: "FutureLoopix completely transformed our online presence. Our leads nearly doubled within three months. A truly professional and dedicated team to work with.",
  },
  {
    name: "Priya Nair",
    role: "Marketing Head, Zappy Retail",
    initials: "PN",
    color: "from-rose-400 to-pink-500",
    rating: 5,
    text: "They understood our brand perfectly. Their social media campaigns brought us real engagement and genuine customers — not just empty numbers.",
  },
  {
    name: "Amit Patel",
    role: "Director, Patel Motors",
    initials: "AP",
    color: "from-sky-400 to-blue-500",
    rating: 5,
    text: "The best digital marketing agency we have partnered with. Their SEO work pushed us to the first page of Google for all our key services.",
  },
  {
    name: "Sneha Reddy",
    role: "Owner, Bloom Boutique",
    initials: "SR",
    color: "from-emerald-400 to-teal-500",
    rating: 5,
    text: "A beautiful website and a smooth experience from start to finish. Sales from our online store have grown steadily every single month.",
  },
  {
    name: "Vikram Singh",
    role: "CEO, TechNova",
    initials: "VS",
    color: "from-violet-400 to-purple-500",
    rating: 5,
    text: "Highly recommended agency. Their creativity and execution are top-notch in every aspect of the project. They delivered well before the deadline.",
  },
  {
    name: "Neha Agarwal",
    role: "Co-Founder, GreenLeaf Organics",
    initials: "NA",
    color: "from-orange-400 to-red-500",
    rating: 5,
    text: "Very responsive and hard-working team. They treat your business like their own and are always available whenever we need support.",
  },
  {
    name: "Arjun Mehta",
    role: "Business Owner, Mehta & Sons",
    initials: "AM",
    color: "from-cyan-400 to-teal-500",
    rating: 5,
    text: "From branding to Google Ads, everything was handled expertly. Our return on investment improved massively. Thank you, FutureLoopix!",
  },
];

export default function TestimonialSection() {
  const [mounted, setMounted] = useState(false);

  useEffect(() => {
    setMounted(true);
  }, []);

  return (
    <section className="relative w-full overflow-hidden bg-[#f3f3f3] py-20 md:py-28">
      {/* ================= SOFT BACKGROUND ACCENTS ================= */}
      <div className="pointer-events-none absolute -top-24 -left-24 h-[380px] w-[380px] rounded-full bg-white/70 blur-[120px]" />
      <div className="pointer-events-none absolute -bottom-24 -right-24 h-[380px] w-[380px] rounded-full bg-yellow-400/[0.06] blur-[120px]" />

      <div className="relative z-10 mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        {/* ================= HEADER ================= */}
        <div className="text-center">
          

          <h2 className="mx-auto mt-6 max-w-3xl text-[30px] font-light leading-[1.08] text-black sm:text-[40px] md:text-[52px]">
            Real Stories From{" "}
            <span className="font-bold">Our Happy Clients</span>
          </h2>

          <p className="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-gray-500 md:text-base">
            Trusted by growing brands across India — here&rsquo;s what business
            owners say about working with us.
          </p>
        </div>

        {/* ================= AUTO-SLIDING CARD CAROUSEL =================
             Client-only: loop mode clones slides, which mismatches the
             SSR HTML and breaks hydration. */}
        {mounted ? (
          <Swiper
          modules={[Autoplay, Pagination, EffectCoverflow]}
          effect="coverflow"
          centeredSlides
          loop
          grabCursor
          speed={800}
          coverflowEffect={{
            rotate: 0,
            stretch: 0,
            depth: 140,
            modifier: 2,
            scale: 0.92,
            slideShadows: false,
          }}
          autoplay={{ delay: 2800, disableOnInteraction: false, pauseOnMouseEnter: true }}
          pagination={{ clickable: true }}
          breakpoints={{
            0: { slidesPerView: 1.15 },
            640: { slidesPerView: 1.6 },
            768: { slidesPerView: 2.2 },
            1024: { slidesPerView: 3 },
          }}
          className="testi-swiper mt-14"
        >
          {testimonials.map((t, i) => (
            <SwiperSlide key={i}>
              <article className="testi-card relative flex min-h-[360px] w-full flex-col rounded-[28px] border border-black/5 bg-white p-10 transition-all duration-500">
                {/* watermark quote */}
                <Quote
                  size={44}
                  fill="currentColor"
                  className="absolute right-7 top-7 text-yellow-400/15"
                />

                {/* rating */}
                <div className="flex gap-1">
                  {Array.from({ length: t.rating }).map((_, s) => (
                    <Star
                      key={s}
                      size={16}
                      fill="currentColor"
                      className="text-yellow-400"
                    />
                  ))}
                </div>

                {/* text */}
                <p className="mt-5 flex-1 text-[15px] leading-7 text-gray-600 md:text-base">
                  &ldquo;{t.text}&rdquo;
                </p>

                {/* divider */}
                <div className="mt-6 h-px w-full bg-gradient-to-r from-transparent via-black/10 to-transparent" />

                {/* person */}
                <div className="mt-5 flex items-center gap-4">
                  <div
                    className={`grid h-12 w-12 shrink-0 place-items-center rounded-full bg-gradient-to-br ${t.color} text-sm font-bold text-white shadow-md`}
                  >
                    {t.initials}
                  </div>
                  <div>
                    <h4 className="text-[15px] font-bold text-black">
                      {t.name}
                    </h4>
                    <p className="mt-0.5 text-[11px] uppercase tracking-[2px] text-gray-500">
                      {t.role}
                    </p>
                  </div>
                </div>
              </article>
            </SwiperSlide>
          ))}
          </Swiper>
        ) : (
          <div className="mt-14 min-h-[360px]" />
        )}
      </div>

      {/* ================= CAROUSEL STYLING ================= */}
      <style jsx global>{`
        .testi-swiper {
          padding-top: 26px;
          padding-bottom: 8px;
        }
        .testi-swiper .swiper-slide {
          height: auto;
          display: flex;
          align-items: stretch;
          opacity: 0.5;
          transition: opacity 0.55s ease, box-shadow 0.55s ease;
        }
        .testi-swiper .swiper-slide .testi-card {
          width: 100%;
        }
        /* Coverflow keeps the centered slide at full scale; fade the rest.
           Coverflow's active class always tracks the centered slide. */
        .testi-swiper .swiper-slide-active {
          opacity: 1;
          z-index: 2;
        }
        .testi-swiper .swiper-slide-active .testi-card {
          border-color: rgba(240, 180, 0, 0.4);
        }
        .testi-swiper .swiper-pagination {
          position: static;
          margin-top: 36px;
          display: flex;
          justify-content: center;
          gap: 8px;
        }
        .testi-swiper .swiper-pagination-bullet {
          width: 8px;
          height: 8px;
          margin: 0 !important;
          background: #cfcfcf;
          opacity: 1;
          transition: all 0.35s ease;
        }
        .testi-swiper .swiper-pagination-bullet-active {
          width: 26px;
          border-radius: 9999px;
          background: #f0b400;
        }
      `}</style>
    </section>
  );
}
