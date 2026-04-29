"use client";

import {
  Search,
  BarChart3,
  Target,
  Megaphone,
  Palette,
  Monitor,
  TrendingUp,
  Globe,
} from "lucide-react";

const services = [
  {
    icon: <Search size={28} />,
    title: "360° Digital\nMarketing Services",
    desc: "Complete. Connected. Powerful",
  },
  {
    icon: <BarChart3 size={28} />,
    title: "Lead Generation /\nPPC",
    desc: "Clicks. Leads. Sales.",
  },
  {
    icon: <Target size={28} />,
    title: "Google Ads / Meta Ads",
    desc: "Target. Reach. Convert.",
  },
  {
    icon: <Megaphone size={28} />,
    title: "Social Media Marketing",
    desc: "Engage. Influence. Grow.",
  },
  {
    icon: <Palette size={28} />,
    title: "Brand Building /\nDigital Strategy",
    desc: "Craft. Elevate. Lead.",
  },
  {
    icon: <Monitor size={28} />,
    title: "Online Reputation\nManagement — ORM",
    desc: "Protect. Manage. Shine.",
  },
  {
    icon: <TrendingUp size={28} />,
    title: "Website & App\nDevelopment",
    desc: "Design. Build. Convert.",
  },
  {
    icon: <Globe size={28} />,
    title: "Search Engine\nOptimization (SEO)",
    desc: "Rank. Visibility. Traffic",
  },
];

export default function Services() {
  return (
    <section className="bg-[#f5f5f5] py-20">
      <div className="max-w-7xl mx-auto px-6 text-center mt-18">

        {/* Heading */}
        <h2 className="text-4xl font-semibold text-gray-800">
          Our Services
        </h2>

        <p className="mt-4 text-gray-500 max-w-2xl mx-auto">
          From building your brand to driving sales, we offer end-to-end
          digital marketing solutions that help your business grow faster
          and smarter.
        </p>

        {/* Grid */}
        <div className="mt-16 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

          {services.map((item, index) => (
            <div
              key={index}
              className="bg-white rounded-xl p-8 shadow-sm hover:shadow-md transition duration-300"
            >
              {/* Icon Circle */}
              <div className="w-14 h-14 mx-auto flex items-center justify-center rounded-full bg-gray-100 mb-6">
                <div className="text-purple-500">{item.icon}</div>
              </div>

              {/* Title */}
              <h3 className="text-lg font-semibold text-gray-800 whitespace-pre-line">
                {item.title}
              </h3>

              {/* Desc */}
              <p className="mt-3 text-sm text-gray-500">
                {item.desc}
              </p>
            </div>
          ))}

        </div>
      </div>
    </section>
  );
}