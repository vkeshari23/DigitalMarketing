"use client";

import { FaEnvelope, FaMapMarkerAlt, FaFacebookF, FaLinkedinIn, FaInstagram, FaYoutube } from "react-icons/fa";
import { FaXTwitter } from "react-icons/fa6";

export default function Footer() {
  return (
    <footer className="bg-black text-gray-300 px-6 md:px-16 py-12">
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

        {/* Column 1 */}
        <div>
          <h2 className="text-xl font-semibold text-white mb-4">
            <span className="font-bold">TS</span> Futureloopix Technologies
          </h2>

          <p className="text-sm mb-6">
            We Promise To Deliver Comprehensive, Planned And Unique Websites.
          </p>

          <div className="space-y-4 text-sm">

            {/* <div className="flex items-center gap-3">
              <span className="border border-red-500 p-2 rounded-full text-red-500">
                <FaPhoneAlt />
              </span>
              <span>011 3686 8135</span>
            </div>

            <div className="flex items-center gap-3">
              <span className="border border-red-500 p-2 rounded-full text-red-500">
                <FaMobileAlt />
              </span>
              <span>+91-8586-005-055</span>
            </div> */}

            <div className="flex items-center gap-3">
              <span className="border border-red-500 p-2 rounded-full text-red-500">
                <FaEnvelope />
              </span>
              <span>info@abc.com</span>
            </div>

            <div className="flex items-start gap-3">
              <span className="border border-red-500 p-2 rounded-full text-red-500 mt-1">
                <FaMapMarkerAlt />
              </span>
              <span>
                B-24/117, 4th Floor, Neel Kanth Tower, Mangal Bazar Rd,
                Guru Nanak Pura, Laxmi Nagar, Delhi-110092
              </span>
            </div>

          </div>
        </div>

        {/* Column 2 */}
        <div>
          <h3 className="text-white font-semibold mb-4 border-b-2 border-red-500 inline-block pb-1">
            Our Services
          </h3>

          <ul className="space-y-2 text-sm mt-4">
            {[
              "Social Media Marketing",
              "Search Engine Optimization",
              "Content Marketing",
              "Website Development",
            ].map((item, i) => (
              <li key={i} className="hover:text-red-500 cursor-pointer">
                » {item}
              </li>
            ))}
          </ul>
        </div>

        {/* Column 3 */}
        <div>
          <h3 className="text-white font-semibold mb-4 border-b-2 border-red-500 inline-block pb-1">
            Usefull Links
          </h3>

          <ul className="space-y-2 text-sm mt-4">
            {[
              "AboutUs",
              "Career",
              
            ].map((item, i) => (
              <li key={i} className="hover:text-red-500 cursor-pointer">
                » {item}
              </li>
            ))}
          </ul>
        </div>

        {/* Column 4 */}
        <div>
          <h3 className="text-white font-semibold mb-4">
            Ready To Grow Your Business?
          </h3>

          <p className="text-sm mb-6">
            Get a free, no-obligation strategy audit. 100% transparent. No hidden charges.
          </p>

          <div className="flex flex-col gap-4 mb-6">
            <button className="bg-red-600 hover:bg-red-700 text-white py-2 rounded-full font-semibold">
              CONTACT US
            </button>

            <button className="bg-green-600 hover:bg-green-700 text-white py-2 rounded-full font-semibold">
              Let's Chat
            </button>
          </div>

          {/* Social Icons */}
          <div className="flex gap-4 text-lg">
            <FaFacebookF className="hover:text-red-500 cursor-pointer" />
            <FaXTwitter className="hover:text-red-500 cursor-pointer" />
            <FaLinkedinIn className="hover:text-red-500 cursor-pointer" />
            <FaInstagram className="hover:text-red-500 cursor-pointer" />
            <FaYoutube className="hover:text-red-500 cursor-pointer" />
          </div>
        </div>

      </div>
    </footer>
  );
}