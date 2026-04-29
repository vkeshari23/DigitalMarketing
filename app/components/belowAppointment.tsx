"use client";

import Image from "next/image";
import {
  FaTwitter,
  FaLinkedinIn,
  FaInstagram,
  FaPinterestP,
  FaFacebookF,
} from "react-icons/fa";

export default function AboutSection() {
  return (
    <section className="bg-[#f3f3f3] py-16 px-6 md:px-16 lg:px-24 relative overflow-hidden">
      
      {/* Grid */}
      <div className="grid lg:grid-cols-2 gap-12 items-center">
        
        {/* LEFT CONTENT */}
        <div>
          <h2 className="text-4xl md:text-5xl font-light text-gray-900 leading-tight">
            <span className="font-bold">Helping Businesses</span><br />
            Get More Leads &<br />
            Sales Online
          </h2>

          <p className="text-gray-600 mt-6 leading-relaxed">
            Founded in 2019, Regortz is a results-driven digital marketing agency
            dedicated to helping businesses grow, scale, and dominate the online space.
          </p>

          <p className="text-gray-600 mt-4 leading-relaxed">
            At Regortz, we don't just market — we create impact, drive sales,
            and turn clicks into conversions.
          </p>
        </div>

        {/* RIGHT IMAGE + ICONS */}
        <div className="relative flex justify-center">
          
          <div className="relative w-[350px] md:w-[420px] h-[450px]">
            
            {/* IMAGE */}
            <Image
              src="/team_sm.jpg"
              alt="Marketing"
              fill
              className="object-cover rounded-lg"
            />

            {/* Twitter */}
            <div className="absolute top-6 right-4 bg-[#1DA1F2] w-12 h-12 rounded-full flex items-center justify-center text-white shadow-lg hover:scale-110 transition">
              <FaTwitter size={20} />
            </div>

            {/* LinkedIn */}
            <div className="absolute left-0 top-1/2 -translate-y-1/2 bg-[#0077B5] w-12 h-12 rounded-full flex items-center justify-center text-white shadow-lg hover:scale-110 transition">
              <FaLinkedinIn size={20} />
            </div>

            {/* Instagram */}
            <div className="absolute bottom-4 left-6 bg-gradient-to-tr from-pink-500 to-yellow-400 w-12 h-12 rounded-full flex items-center justify-center text-white shadow-lg hover:scale-110 transition">
              <FaInstagram size={20} />
            </div>

            {/* Pinterest */}
            <div className="absolute bottom-12 left-1/2 -translate-x-1/2 bg-red-500 w-12 h-12 rounded-full flex items-center justify-center text-white shadow-lg hover:scale-110 transition">
              <FaPinterestP size={20} />
            </div>

            {/* Facebook */}
            <div className="absolute bottom-6 right-2 bg-[#1877F2] w-12 h-12 rounded-full flex items-center justify-center text-white shadow-lg hover:scale-110 transition">
              <FaFacebookF size={20} />
            </div>

          </div>
        </div>

      </div>
    </section>
  );
}