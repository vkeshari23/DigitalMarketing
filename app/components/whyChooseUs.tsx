import { Target, MonitorCheck, TrendingUp, BadgeDollarSign } from "lucide-react";

const reasons = [
  {
    icon: Target,
    title: "Expert-Led Strategy",
    text: "Campaigns driven by experienced digital marketing professionals with deep industry insights to maximize your business growth.",
  },
  {
    icon: MonitorCheck,
    title: "Customized Solutions",
    text: "Tailored SEO, website development, and digital marketing strategies designed specifically for your business goals.",
  },
  {
    icon: TrendingUp,
    title: "Transparent Reporting",
    text: "Clear and detailed analytics for SEO, PPC, social media, and overall performance to track real results.",
  },
  {
    icon: BadgeDollarSign,
    title: "Affordable Excellence",
    text: "High-quality digital marketing services at competitive pricing to deliver maximum ROI without compromising quality.",
  },
];

export default function WhyChooseUs() {
  return (
    <section className="w-full bg-white py-20 md:py-28">
      <div className="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8">
        {/* ================= HEADER ================= */}
        <div className="text-center">
          <h2 className="text-[34px] font-bold leading-tight text-[#0f2038] sm:text-[44px] md:text-[52px]">
            Why Choose Us?
          </h2>
          <p className="mx-auto mt-6 max-w-2xl text-base text-gray-600 md:text-lg">
            Partner with{" "}
            <span className="font-semibold text-[#0f2038]">
              Futureloopix Technologies
            </span>{" "}
            for Result-Driven Digital Growth
          </p>
        </div>

        {/* ================= CARDS ================= */}
        <div className="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
          {reasons.map(({ icon: Icon, title, text }) => (
            <div
              key={title}
              className="group flex flex-col items-center rounded-2xl border border-gray-200 bg-white px-6 py-10 text-center transition-all duration-300 hover:-translate-y-1 hover:border-yellow-400 hover:shadow-[0_18px_50px_rgba(0,0,0,0.08)]"
            >
              <div className="mb-8 grid h-16 w-16 place-items-center rounded-xl bg-yellow-50 text-yellow-500 transition-colors duration-300 group-hover:bg-yellow-400 group-hover:text-white">
                <Icon size={34} strokeWidth={1.8} />
              </div>
              <h3 className="text-xl font-bold text-[#0f2038]">{title}</h3>
              <p className="mt-4 text-[15px] leading-7 text-gray-600">{text}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
