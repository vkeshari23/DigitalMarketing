"use client";

import Image from "next/image";
import Link from "next/link";
import { motion } from "framer-motion";
import { ArrowRight, CheckCircle2 } from "lucide-react";
import { services, ServiceData } from "../../data/services";

export default function ServiceDetailClient({
  service,
}: {
  service: ServiceData;
}) {
  const related = services.filter((s) => s.slug !== service.slug).slice(0, 3);

  return (
    <div className="w-full bg-white text-black pt-16 md:pt-20 overflow-hidden">
      {/* ================= HERO ================= */}
      <section className="relative bg-black py-20 md:py-28 px-6 md:px-12 overflow-hidden">
        <div className="absolute inset-0 pointer-events-none">
          <div className="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-yellow-400/10 blur-[160px] rounded-full" />
          <div className="absolute bottom-0 right-0 w-[500px] h-[500px] bg-white/5 blur-[140px] rounded-full" />
        </div>

        <div className="relative max-w-6xl mx-auto grid md:grid-cols-2 gap-10 md:gap-14 items-center">
          <motion.div
            initial={{ opacity: 0, y: 30 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.6 }}
          >
            <p className="text-yellow-400 font-semibold tracking-[3px] text-xs uppercase mb-4">
              Our Service
            </p>
            <h1 className="text-3xl md:text-5xl font-bold leading-tight text-white">
              {service.title}
            </h1>
            <p className="text-lg md:text-xl mt-4 text-yellow-400 font-medium">
              {service.tagline}
            </p>
            <p className="mt-6 text-gray-400 leading-relaxed max-w-lg">
              {service.shortDesc}
            </p>

            <Link
              href="/#appointment"
              className="mt-8 inline-flex items-center gap-3 rounded-full bg-yellow-400 px-7 py-3.5 text-sm font-bold text-black transition hover:bg-yellow-300 hover:scale-105 duration-300"
            >
              Get Free Consultation
              <ArrowRight size={16} />
            </Link>
          </motion.div>

          <motion.div
            initial={{ opacity: 0, scale: 0.92 }}
            animate={{ opacity: 1, scale: 1 }}
            transition={{ duration: 0.6, delay: 0.1 }}
            className="relative"
          >
            <div className="p-[6px] bg-gradient-to-br from-yellow-400/40 to-white/5 rounded-2xl shadow-[0_20px_60px_rgba(0,0,0,0.4)]">
              <div className="relative w-full h-[280px] sm:h-[360px] rounded-2xl overflow-hidden">
                <Image
                  src={service.img}
                  alt={service.title}
                  fill
                  unoptimized
                  className="object-cover"
                />
              </div>
            </div>
          </motion.div>
        </div>
      </section>

      {/* ================= OVERVIEW ================= */}
      <section className="py-16 md:py-24 px-6 md:px-12">
        <div className="max-w-4xl mx-auto space-y-5 text-center">
          {service.longDescription.map((para, i) => (
            <p key={i} className="text-gray-600 leading-relaxed text-base md:text-lg">
              {para}
            </p>
          ))}
        </div>
      </section>

      {/* ================= BENEFITS ================= */}
      <section className="py-16 md:py-24 px-6 md:px-12 bg-[#f8f8f8]">
        <div className="max-w-6xl mx-auto">
          <h2 className="text-3xl md:text-4xl font-bold text-center text-black">
            What You <span className="text-yellow-500">Get</span>
          </h2>

          <div className="mt-12 grid sm:grid-cols-2 gap-5 max-w-3xl mx-auto">
            {service.benefits.map((benefit, i) => (
              <motion.div
                key={i}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                viewport={{ once: true }}
                transition={{ duration: 0.5, delay: i * 0.07 }}
                className="flex items-start gap-3 bg-white border border-black/5 rounded-xl p-5 shadow-[0_10px_30px_rgba(0,0,0,0.05)]"
              >
                <CheckCircle2 className="text-yellow-500 shrink-0 mt-0.5" size={20} />
                <span className="text-gray-700 text-sm md:text-base">{benefit}</span>
              </motion.div>
            ))}
          </div>
        </div>
      </section>

      {/* ================= PROCESS ================= */}
      <section className="py-16 md:py-24 px-6 md:px-12 text-center">
        <h2 className="text-3xl md:text-4xl font-bold text-black">
          Our <span className="text-yellow-500">Process</span>
        </h2>
        <p className="text-gray-600 mt-3">How we deliver results, step by step</p>

        <div className="mt-12 md:mt-14 grid sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-6xl mx-auto">
          {service.process.map((step, i) => (
            <motion.div
              key={i}
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ duration: 0.5, delay: i * 0.08 }}
              className="bg-white border border-black/5 rounded-xl p-6 shadow-[0_10px_30px_rgba(0,0,0,0.06)] hover:-translate-y-1 hover:shadow-[0_20px_45px_rgba(0,0,0,0.10)] transition text-left"
            >
              <h3 className="text-4xl font-bold text-yellow-400">0{i + 1}</h3>
              <h4 className="mt-2 font-semibold text-lg text-black">{step.title}</h4>
              <p className="text-sm text-gray-500 mt-2">{step.desc}</p>
            </motion.div>
          ))}
        </div>
      </section>

      {/* ================= CTA STRIP ================= */}
      <section className="px-6 md:px-12 pb-16 md:pb-24">
        <div className="max-w-6xl mx-auto rounded-3xl bg-black relative overflow-hidden px-8 py-14 md:py-16 text-center">
          <div className="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-yellow-400/10 blur-[140px] rounded-full pointer-events-none" />
          <h2 className="relative text-2xl md:text-3xl font-bold text-white">
            Ready to grow with{" "}
            <span className="text-yellow-400">{service.title}</span>?
          </h2>
          <p className="relative mt-3 text-gray-400 max-w-xl mx-auto">
            Let&rsquo;s build a strategy tailored to your business goals.
          </p>
          <Link
            href="/#appointment"
            className="relative mt-7 inline-flex items-center gap-3 rounded-full bg-yellow-400 px-8 py-3.5 text-sm font-bold text-black transition hover:bg-yellow-300 hover:scale-105 duration-300"
          >
            Book Free Consultation
            <ArrowRight size={16} />
          </Link>
        </div>
      </section>

      {/* ================= RELATED SERVICES ================= */}
      <section className="py-16 md:py-20 px-6 md:px-12 bg-[#f8f8f8]">
        <div className="max-w-6xl mx-auto">
          <h2 className="text-2xl md:text-3xl font-bold text-center text-black">
            Explore Other <span className="text-yellow-500">Services</span>
          </h2>

          <div className="mt-10 grid sm:grid-cols-2 md:grid-cols-3 gap-6">
            {related.map((s) => (
              <Link
                key={s.slug}
                href={`/services/${s.slug}`}
                className="group relative h-[200px] rounded-2xl overflow-hidden border border-black/5 shadow-[0_10px_30px_rgba(0,0,0,0.08)] hover:-translate-y-1 transition-all duration-300"
              >
                <Image
                  src={s.img}
                  alt={s.title}
                  fill
                  unoptimized
                  className="object-cover transition-transform duration-500 group-hover:scale-105"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent" />
                <div className="absolute bottom-0 left-0 right-0 p-5">
                  <h3 className="text-white font-semibold">{s.title}</h3>
                  <span className="mt-1 inline-flex items-center gap-1 text-yellow-400 text-sm font-medium">
                    Learn More <ArrowRight size={14} />
                  </span>
                </div>
              </Link>
            ))}
          </div>
        </div>
      </section>
    </div>
  );
}
