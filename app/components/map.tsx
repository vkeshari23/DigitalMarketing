"use client";

import { useState } from "react";
import { MapPin, Phone, Mail, Navigation } from "lucide-react";

export default function ContactSection() {
  const [formData, setFormData] = useState({
    name: "",
    email: "",
    phone: "",
    requirement: "",
  });

  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>,
  ) => {
    setFormData({
      ...formData,
      [e.target.name]: e.target.value,
    });
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();

    console.log(formData);

    alert("Form Submitted Successfully!");

    setFormData({
      name: "",
      email: "",
      phone: "",
      requirement: "",
    });
  };

  return (
    <section className="w-full bg-gradient-to-b from-[#f7f7f7] to-[#eeeeee] py-20 md:py-28 px-4 sm:px-6">
      <div className="max-w-[1400px] mx-auto">
        {/* SECTION HEADING */}
        <div className="text-center mb-12 md:mb-16">
          <span className="inline-flex items-center gap-2 rounded-full border border-yellow-400/40 bg-yellow-400/10 px-4 py-1.5 text-[11px] font-semibold uppercase tracking-[3px] text-yellow-600">
            <Mail size={13} />
            Get In Touch
          </span>
          <h2 className="mt-6 text-[32px] sm:text-[44px] lg:text-[52px] leading-[1.05] font-bold text-black">
            Let&rsquo;s Build Something Great
          </h2>
          <p className="mx-auto mt-4 max-w-2xl text-sm md:text-base text-gray-500">
            Have a project in mind? Reach out and our team will get back to you shortly.
          </p>
        </div>

        <div className="grid lg:grid-cols-2 gap-10 lg:gap-12 items-stretch">
          {/* LEFT SIDE — FORM CARD */}

          <div className="flex justify-center">
            <div className="w-full max-w-[620px] rounded-[32px] bg-white shadow-[0_30px_80px_rgba(0,0,0,0.12)] border border-black/[0.04] p-7 sm:p-10 md:p-12">
              {/* HEADING */}

              <div className="text-center">
                <h2 className="text-[32px] sm:text-[40px] lg:text-[46px] leading-[1] font-bold text-black">
                  Contact Us
                </h2>

                <h3 className="mt-3 text-[16px] sm:text-[18px] text-gray-600">
                  <span className="font-bold text-black">Start Now!</span>
                  <span className="font-light"> Drop a Mail</span>
                </h3>
              </div>

              {/* FORM */}

              <form onSubmit={handleSubmit} className="mt-9 space-y-4">
                {/* NAME */}

                <input
                  type="text"
                  name="name"
                  value={formData.name}
                  onChange={handleChange}
                  placeholder="NAME"
                  required
                  className="w-full h-[56px] rounded-full border border-gray-200 bg-[#f9f9f9] px-6 outline-none text-black text-sm placeholder:text-gray-500 placeholder:text-[11px] placeholder:font-semibold placeholder:tracking-[2px] focus:border-yellow-400 focus:bg-white focus:ring-4 focus:ring-yellow-400/10 transition"
                />

                {/* EMAIL */}

                <input
                  type="email"
                  name="email"
                  value={formData.email}
                  onChange={handleChange}
                  placeholder="EMAIL"
                  required
                  className="w-full h-[56px] rounded-full border border-gray-200 bg-[#f9f9f9] px-6 outline-none text-black text-sm placeholder:text-gray-500 placeholder:text-[11px] placeholder:font-semibold placeholder:tracking-[2px] focus:border-yellow-400 focus:bg-white focus:ring-4 focus:ring-yellow-400/10 transition"
                />

                {/* PHONE */}

                <input
                  type="tel"
                  name="phone"
                  value={formData.phone}
                  onChange={handleChange}
                  placeholder="CONTACT NUMBER"
                  required
                  className="w-full h-[56px] rounded-full border border-gray-200 bg-[#f9f9f9] px-6 outline-none text-black text-sm placeholder:text-gray-500 placeholder:text-[11px] placeholder:font-semibold placeholder:tracking-[2px] focus:border-yellow-400 focus:bg-white focus:ring-4 focus:ring-yellow-400/10 transition"
                />

                {/* REQUIREMENT */}

                <textarea
                  name="requirement"
                  value={formData.requirement}
                  onChange={handleChange}
                  placeholder="REQUIREMENT"
                  rows={3}
                  required
                  className="w-full rounded-[24px] border border-gray-200 bg-[#f9f9f9] outline-none resize-none text-black text-sm placeholder:text-gray-500 placeholder:text-[11px] placeholder:font-semibold placeholder:tracking-[2px] py-4 px-6 focus:border-yellow-400 focus:bg-white focus:ring-4 focus:ring-yellow-400/10 transition"
                />

                {/* BUTTON */}

                <button
                  type="submit"
                  className="w-full h-[56px] rounded-full bg-yellow-400 hover:bg-yellow-300 hover:shadow-[0_12px_30px_rgba(250,204,21,0.4)] active:scale-[0.98] transition duration-300 tracking-[2px] text-sm font-bold text-black"
                >
                  SUBMIT
                </button>
              </form>

              
            </div>
          </div>

          {/* RIGHT SIDE MAP */}

          <div className="relative min-h-[460px] sm:min-h-[540px] lg:min-h-[600px] rounded-[32px] overflow-hidden shadow-[0_30px_80px_rgba(0,0,0,0.12)] border border-black/[0.04] ring-1 ring-yellow-400/10">
            {/* LOCATION CARD */}

            <div className="absolute top-5 left-5 sm:top-7 sm:left-7 z-20 bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-5 w-[240px] sm:w-[290px] border border-yellow-400/25">
              <div className="flex items-center gap-3">
                <div className="grid h-11 w-11 shrink-0 place-items-center rounded-xl bg-yellow-400 text-black">
                  <MapPin size={22} />
                </div>
                <h3 className="text-lg sm:text-xl font-bold text-black">
                  Futureloopix
                </h3>
              </div>

              <p className="text-[13px] sm:text-sm text-gray-600 mt-4 leading-6">
                A-88, Second Floor,
                <br />
                Sector 4, Noida,
                <br />
                Uttar Pradesh, 201301,
                <br />
                India
              </p>

              <a
                href="https://maps.google.com/maps?q=A-88%20Sector%204%20Noida%20201301"
                target="_blank"
                rel="noopener noreferrer"
                className="mt-4 inline-flex items-center gap-2 rounded-full bg-yellow-400 hover:bg-yellow-300 transition px-4 py-2 text-[12px] font-bold tracking-[1px] text-black"
              >
                <Navigation size={13} />
                GET DIRECTIONS
              </a>
            </div>

            {/* MAP */}

            <iframe
              src="https://maps.google.com/maps?q=A-88%20Sector%204%20Noida%20201301&t=&z=15&ie=UTF8&iwloc=&output=embed"
              loading="lazy"
              allowFullScreen
              referrerPolicy="no-referrer-when-downgrade"
              className="absolute inset-0 w-full h-full border-0"
            />
          </div>
        </div>
      </div>
    </section>
  );
}
