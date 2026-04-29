"use client";

import Image from "next/image";
import {
  FaFacebookF,
  FaInstagram,
  FaTwitter,
  FaLinkedinIn,
  FaYoutube,
  FaWhatsapp,
} from "react-icons/fa";

export default function AboutPage() {
  return (
    <div className="w-full bg-gray-100">

      {/* ================= HERO ================= */}
      <section className="py-16">
        <div className="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 mt-18 items-center">
          
          <div>
            <h1 className="text-4xl md:text-5xl font-bold leading-tight ml-18">
              Meet Regortz <br />
              Digital <br/> Marketing -
            </h1>

            <p className="text-3xl mt-4 text-gray-700 ml-18">
              Your Business <br /> Growth <br/> Partner!
            </p>
          </div>

          <div className="flex justify-center">
            <Image
              src="/hero.jpg"
              alt="hero"
              width={350}
              height={400}
              className="rounded-xl shadow-lg object-cover"
            />
          </div>
        </div>

        {/* <div className="mt-10 border-t border-black text-center pt-2 text-sm tracking-widest">
        </div> */}
      </section>

      {/* ================= VISION ================= */}
      <section className="py-16 bg-white">
        <div className="max-w-7xl mx-auto px-6 space-y-16">

          <div className="grid md:grid-cols-2 gap-10 items-center">
            <Image
              src="/vision.jpg"
              alt="vision"
              width={500}
              height={300}
              className="rounded-lg shadow-md"
            />

            <div>
              <h2 className="text-xl font-semibold">
                Vision: Leading Media Agency Globally with Innovation
              </h2>
              <p className="mt-3 text-gray-600">
                We imagine a future where every business grows online...
              </p>
            </div>
          </div>

          {/* ================= MISSION ================= */}
          <div className="grid md:grid-cols-2 gap-10 items-center">
            <div>
              <h2 className="text-xl font-semibold">
                Mission: Empowering Businesses as a Digital Ad Agency Globally
              </h2>
              <p className="mt-3 text-gray-600">
                Our mission is to support business development...
              </p>
            </div>

            <Image
              src="/mission.jpg"
              alt="mission"
              width={500}
              height={300}
              className="rounded-lg shadow-md"
            />
          </div>

        </div>
      </section>

      {/* ================= WHY CHOOSE US ================= */}
      <section className="py-16 bg-gray-50">
        <div className="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

          {/* IMAGE */}
          <div className="relative">
            <Image
              src="/team.jpg"
              alt="team"
              width={500}
              height={350}
              className="rounded-xl shadow-lg"
            />
          </div>

          {/* TEXT */}
          <div>
            <h2 className="text-2xl md:text-3xl font-bold">
              Why Choose Innovative as Your Digital Marketing Company?
            </h2>

            <p className="mt-4 text-gray-600">
              Being a reputable digital marketing agency, we emphasize developing
              tailored smart strategies for each business. We deliver results that
              truly make a difference.
            </p>

            <ul className="mt-4 space-y-2 text-gray-700">
              <li>✔ Smart, data-driven strategies</li>
              <li>✔ Affordable packages</li>
              <li>✔ Experienced SEO team</li>
            </ul>
          </div>

        </div>
      </section>

      {/* ================= PROCESS SECTION ================= */}
      <section className="py-20 bg-white text-center">
        <h2 className="text-3xl md:text-4xl font-semibold">
          How We Are <span className="font-bold">Deliver Excellence</span>
        </h2>

        <p className="mt-3 text-gray-500">
          Our process is built to keep things clear and efficient.
        </p>

        <div className="mt-12 grid md:grid-cols-4 gap-8 max-w-6xl mx-auto px-6">

          <div>
            <h3 className="text-3xl font-bold text-gray-300">01</h3>
            <h4 className="font-semibold mt-2">Discovery</h4>
            <p className="text-sm text-gray-500 mt-1">
              We understand your business inside out.
            </p>
          </div>

          <div>
            <h3 className="text-3xl font-bold text-gray-300">02</h3>
            <h4 className="font-semibold mt-2">Strategy</h4>
            <p className="text-sm text-gray-500 mt-1">
              We craft a plan that fits your goals.
            </p>
          </div>

          <div>
            <h3 className="text-3xl font-bold text-gray-300">03</h3>
            <h4 className="font-semibold mt-2">Execution</h4>
            <p className="text-sm text-gray-500 mt-1">
              Our experts bring the plan to life.
            </p>
          </div>

          <div>
            <h3 className="text-3xl font-bold text-gray-300">04</h3>
            <h4 className="font-semibold mt-2">Results</h4>
            <p className="text-sm text-gray-500 mt-1">
              We monitor and scale what works best.
            </p>
          </div>

        </div>
      </section>

      {/* ================= SOCIAL ================= */}
      <div className="fixed right-4 top-1/2 -translate-y-1/2 space-y-3 z-50">
        <div className="bg-blue-600 text-white p-2 rounded-full"><FaFacebookF /></div>
        <div className="bg-pink-500 text-white p-2 rounded-full"><FaInstagram /></div>
        <div className="bg-black text-white p-2 rounded-full"><FaTwitter /></div>
        <div className="bg-blue-500 text-white p-2 rounded-full"><FaLinkedinIn /></div>
        <div className="bg-red-600 text-white p-2 rounded-full"><FaYoutube /></div>
      </div>

      {/* ================= WHATSAPP ================= */}
      <div className="fixed bottom-6 right-6">
        <div className="bg-green-500 p-3 rounded-full text-white shadow-lg">
          <FaWhatsapp size={22} />
        </div>
      </div>

    </div>
  );
}