"use client";

import { useEffect, useState } from "react";
import { motion, AnimatePresence } from "framer-motion";
import { X, ArrowRight, CheckCircle2 } from "lucide-react";

const LOADER_DURATION = 1800;
const CONTACT_EMAIL = "Info@futureloopix.com";

export default function IntroExperience() {
  const [loading, setLoading] = useState(true);
  const [showPopup, setShowPopup] = useState(false);
  const [sent, setSent] = useState(false);
  const [form, setForm] = useState({ name: "", email: "", phone: "", query: "" });
  const [errors, setErrors] = useState<Record<string, string>>({});

  useEffect(() => {
    const loaderTimer = setTimeout(() => setLoading(false), LOADER_DURATION);
    return () => clearTimeout(loaderTimer);
  }, []);

  useEffect(() => {
    if (!loading) {
      const popupTimer = setTimeout(() => setShowPopup(true), 400);
      return () => clearTimeout(popupTimer);
    }
  }, [loading]);

  const handleChange = (
    e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>
  ) => {
    const { name, value } = e.target;
    setForm((prev) => ({ ...prev, [name]: value }));
  };

  const validate = () => {
    const next: Record<string, string> = {};
    if (!form.name.trim()) next.name = "Name is required";
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email)) next.email = "Enter a valid email";
    if (!/^[0-9+\-\s]{7,15}$/.test(form.phone)) next.phone = "Enter a valid phone number";
    if (!form.query.trim()) next.query = "Please tell us your query";
    setErrors(next);
    return Object.keys(next).length === 0;
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    if (!validate()) return;

    const subject = encodeURIComponent(`New Enquiry from ${form.name}`);
    const body = encodeURIComponent(
      `Name: ${form.name}\nEmail: ${form.email}\nPhone: ${form.phone}\n\nQuery:\n${form.query}`
    );
    const link = document.createElement("a");
    link.href = `mailto:${CONTACT_EMAIL}?subject=${subject}&body=${body}`;
    link.click();

    setSent(true);
  };

  const closePopup = () => {
    setShowPopup(false);
    setTimeout(() => {
      setSent(false);
      setForm({ name: "", email: "", phone: "", query: "" });
      setErrors({});
    }, 400);
  };

  return (
    <>
      {/* ================= LOADER ================= */}
      <AnimatePresence>
        {loading && (
          <motion.div
            initial={{ opacity: 1 }}
            exit={{ opacity: 0, scale: 1.05 }}
            transition={{ duration: 0.6, ease: "easeInOut" }}
            className="fixed inset-0 z-[100000] flex flex-col items-center justify-center bg-black overflow-hidden"
          >
            <div className="absolute inset-0 pointer-events-none">
              <div className="absolute top-1/2 left-1/2 h-[500px] w-[500px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-yellow-400/10 blur-[160px]" />
            </div>

            <motion.img
              src="/flx_logo.png"
              alt="Futureloopix"
              className="relative z-10 h-16 sm:h-20 w-auto object-contain"
              initial={{ opacity: 0, scale: 0.85 }}
              animate={{ opacity: 1, scale: [0.9, 1.05, 1] }}
              transition={{ duration: 1, ease: "easeInOut" }}
            />

            <div className="relative z-10 mt-8 h-[3px] w-[180px] overflow-hidden rounded-full bg-white/10">
              <motion.div
                className="h-full rounded-full bg-yellow-400"
                initial={{ width: "0%" }}
                animate={{ width: "100%" }}
                transition={{ duration: LOADER_DURATION / 1000, ease: "easeInOut" }}
              />
            </div>

            <motion.p
              initial={{ opacity: 0 }}
              animate={{ opacity: 1 }}
              transition={{ delay: 0.3, duration: 0.6 }}
              className="relative z-10 mt-4 text-[11px] font-semibold tracking-[3px] text-white/50"
            >
              LOADING EXPERIENCE
            </motion.p>
          </motion.div>
        )}
      </AnimatePresence>

      {/* ================= ENQUIRY POPUP ================= */}
      <AnimatePresence>
        {showPopup && (
          <motion.div
            initial={{ opacity: 0 }}
            animate={{ opacity: 1 }}
            exit={{ opacity: 0 }}
            transition={{ duration: 0.3 }}
            className="fixed inset-0 z-[99999] flex items-center justify-center bg-black/60 backdrop-blur-sm px-4 py-6"
            onClick={closePopup}
          >
            <motion.div
              initial={{ opacity: 0, scale: 0.85, y: 30 }}
              animate={{ opacity: 1, scale: 1, y: 0 }}
              exit={{ opacity: 0, scale: 0.85, y: 20 }}
              transition={{ duration: 0.45, ease: "easeOut" }}
              onClick={(e) => e.stopPropagation()}
              className="relative w-full max-w-md rounded-3xl border border-yellow-400/20 bg-black p-7 sm:p-8 text-center shadow-[0_25px_80px_rgba(0,0,0,0.5)] overflow-hidden max-h-[90vh] overflow-y-auto"
            >
              <div className="absolute -top-24 left-1/2 -translate-x-1/2 h-64 w-64 rounded-full bg-yellow-400/20 blur-[100px] pointer-events-none" />

              <button
                onClick={closePopup}
                className="absolute top-4 right-4 z-10 text-white/50 hover:text-yellow-400 transition"
                aria-label="Close"
              >
                <X size={20} />
              </button>

              {!sent ? (
                <>
                  <div className="relative z-10 mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-yellow-400 text-2xl">
                    🚀
                  </div>

                  <h3 className="relative z-10 text-2xl font-bold text-white">
                    Welcome to <span className="text-yellow-400">Futureloopix</span>
                  </h3>

                  <p className="relative z-10 mt-2 text-sm leading-6 text-gray-400">
                    Ready to grow your business online? Share your details and
                    we&rsquo;ll get back with a free strategy consultation.
                  </p>

                  <form
                    onSubmit={handleSubmit}
                    noValidate
                    className="relative z-10 mt-6 space-y-3 text-left"
                  >
                    <div>
                      <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        value={form.name}
                        onChange={handleChange}
                        className="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/40 focus:border-yellow-400"
                      />
                      {errors.name && (
                        <p className="mt-1 text-xs text-red-400">{errors.name}</p>
                      )}
                    </div>

                    <div>
                      <input
                        type="email"
                        name="email"
                        placeholder="Email Address"
                        value={form.email}
                        onChange={handleChange}
                        className="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/40 focus:border-yellow-400"
                      />
                      {errors.email && (
                        <p className="mt-1 text-xs text-red-400">{errors.email}</p>
                      )}
                    </div>

                    <div>
                      <input
                        type="tel"
                        name="phone"
                        placeholder="Phone Number"
                        value={form.phone}
                        onChange={handleChange}
                        className="w-full rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/40 focus:border-yellow-400"
                      />
                      {errors.phone && (
                        <p className="mt-1 text-xs text-red-400">{errors.phone}</p>
                      )}
                    </div>

                    <div>
                      <textarea
                        name="query"
                        placeholder="Tell us about your requirement..."
                        rows={3}
                        value={form.query}
                        onChange={handleChange}
                        className="w-full resize-none rounded-xl border border-white/15 bg-white/5 px-4 py-3 text-sm text-white outline-none transition placeholder:text-white/40 focus:border-yellow-400"
                      />
                      {errors.query && (
                        <p className="mt-1 text-xs text-red-400">{errors.query}</p>
                      )}
                    </div>

                    <button
                      type="submit"
                      className="mt-1 w-full inline-flex items-center justify-center gap-3 rounded-full bg-yellow-400 px-6 py-3 text-sm font-bold text-black transition hover:bg-yellow-300"
                    >
                      Send Enquiry
                      <ArrowRight size={16} />
                    </button>
                  </form>
                </>
              ) : (
                <div className="relative z-10 py-6">
                  <div className="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-full bg-yellow-400 text-black">
                    <CheckCircle2 size={28} />
                  </div>
                  <h3 className="text-2xl font-bold text-white">
                    Thank You{form.name ? `, ${form.name}` : ""}!
                  </h3>
                  <p className="mt-3 text-sm leading-6 text-gray-400">
                    Your email app should have opened with your enquiry ready to
                    send. Our team will get back to you shortly.
                  </p>
                  <button
                    onClick={closePopup}
                    className="mt-6 inline-flex items-center gap-2 rounded-full bg-yellow-400 px-6 py-3 text-sm font-bold text-black transition hover:bg-yellow-300"
                  >
                    Close
                  </button>
                </div>
              )}
            </motion.div>
          </motion.div>
        )}
      </AnimatePresence>
    </>
  );
}
