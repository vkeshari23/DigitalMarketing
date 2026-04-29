"use client";
import { motion } from "framer-motion";
import { useState } from "react";

export default function WhyChooseSection() {
  const [data, setData] = useState({
    name: "",
    phone: "",
    email: "",
    location: "",
    requirement: "",
  });

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setData({ ...data, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    console.log(data);
    setData({ name: "", phone: "", email: "", location: "", requirement: "" });
  };
  return (
    <section className="bg-[#f5f5f5] py-16 px-6 md:px-16 lg:px-24">
      <div className="grid lg:grid-cols-2 gap-12 items-center">
        {/* LEFT SIDE */}
        <div>
          <h2 className="text-3xl md:text-4xl text-gray-900 leading-snug">
            <span className="font-bold">What Makes Regortz</span> - Best Digital
            Marketing Company in
          </h2>
          <h2 className="text-3xl md:text-4xl text-gray-900 leading-snug mb-10">
            Bangalore?
          </h2>

          <div className="grid sm:grid-cols-2 gap-6">
            {/* Card 1 */}
            {/* <div className="bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition"> */}
            <div className="bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
              <div className="w-14 h-14 bg-yellow-400 rounded-full flex items-center justify-center text-xl font-bold mb-4">
                AI
              </div>
              <h3 className="font-semibold text-lg">AI Powered Marketing</h3>
              <p className="text-gray-500 text-sm mt-2">
                Smarter campaigns, better targeting, higher ROI.
              </p>
            </div>

            {/* Card 2 */}
            {/* <div className="bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition"> */}
            <div className="bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
              <div className="w-14 h-14 bg-yellow-400 rounded-full flex items-center justify-center text-xl font-bold mb-4">
                ₹
              </div>
              <h3 className="font-semibold text-lg">ROI Focused Execution</h3>
              <p className="text-gray-500 text-sm mt-2">
                We maximize your ad spend for real business growth.
              </p>
            </div>

            {/* Card 3 */}
            {/* <div className="bg-white p-6 rounded-2xl shadow-sm border hover:shadow-md transition"> */}
            <div className="bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
              <div className="w-14 h-14 bg-yellow-400 rounded-full flex items-center justify-center text-xl font-bold mb-4">
                360°
              </div>
              <h3 className="font-semibold text-lg">
                360° Marketing Solutions
              </h3>
              <p className="text-gray-500 text-sm mt-2">
                Everything under one roof from branding to conversions.
              </p>
            </div>

            {/* Card 4 */}
            <div className="bg-white p-6 rounded-2xl shadow-md hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
              <div className="w-14 h-14 bg-yellow-400 rounded-full flex items-center justify-center text-xl font-bold mb-4">
                📊
              </div>
              <h3 className="font-semibold text-lg">Data Backed Results</h3>
              <p className="text-gray-500 text-sm mt-2">
                No guesswork — just clear numbers, real growth.
              </p>
            </div>
          </div>
        </div>

        {/* RIGHT SIDE (FORM) */}
        <div className="bg-[#4b4b4b] text-white p-8 md:p-10 rounded-3xl shadow-lg">
          <h3 className="text-2xl font-semibold mb-8">Make An Appointment</h3>
          <form onSubmit={handleSubmit}>
            {/* <div className="grid sm:grid-cols-2 gap-5"> */}
            <div className="grid sm:grid-cols-2 gap-x-5 gap-y-10">
              <input
                type="text"
                name="name"
                onChange={handleChange}
                placeholder="NAME"
                className="bg-transparent border border-white/30 rounded-full px-5 py-8 outline-none placeholder:text-white/70"
              />

              <input
                type="number"
                name="phone"
                onChange={handleChange}
                placeholder="PHONE"
                className="bg-transparent border border-white/30 rounded-full px-5 py-8 outline-none placeholder:text-white/70"
              />

              <input
                type="email"
                name="email"
                onChange={handleChange}
                placeholder="EMAIL"
                className="bg-transparent border border-white/30 rounded-full px-5 py-8 outline-none placeholder:text-white/70"
              />

              <input
                type="text"
                name="location"
                onChange={handleChange}
                placeholder="LOCATION"
                className="bg-transparent border border-white/30 rounded-full px-5 py-8 outline-none placeholder:text-white/70"
              />
            </div>

            <div className="mt-10">
              <input
                type="text"
                name="requirement"
                onChange={handleChange}
                placeholder="REQUIREMENT"
                //   onChange={handleChange}
                className="w-full bg-transparent border border-white/30 rounded-full px-5 py-8 outline-none placeholder:text-white/70"
              />
            </div>

            {/* <button className="mt-10 w-full bg-yellow-400 text-black font-semibold py-3 rounded-lg hover:bg-yellow-500 transition">
            Book Appointment
          </button> */}
            <motion.button
              whileHover={{ scale: 1.05 }}
              whileTap={{ scale: 0.95 }}
              className="mt-10 w-full bg-gradient-to-r from-purple-600 to-pink-500 text-white font-semibold py-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300"
              type="submit"
            >
              Book Appointment
            </motion.button>
          </form>
        </div>
      </div>
    </section>
  );
}
