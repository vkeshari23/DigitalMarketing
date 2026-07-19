export interface ServiceData {
  slug: string;
  title: string;
  shortDesc: string;
  tagline: string;
  img: string;
  longDescription: string[];
  benefits: string[];
  process: { title: string; desc: string }[];
}

export const services: ServiceData[] = [
  {
    slug: "social-media-marketing",
    title: "Social Media Marketing",
    shortDesc:
      "Reach more people with our social media marketing services in Delhi. We help businesses connect with the right audience and turn leads into real results.",
    tagline: "Engage. Influence. Grow.",
    img: "/smm.jpeg",
    longDescription: [
      "We craft data-backed social media strategies that put your brand in front of the people who matter most. From content calendars to paid promotions, every post is built to spark engagement and drive measurable growth.",
      "Our team manages platforms like Instagram, Facebook, LinkedIn and X end-to-end — creative, copywriting, scheduling and performance tracking — so you can focus on running your business while we grow your audience.",
    ],
    benefits: [
      "Custom content strategy for every platform",
      "Audience research & competitor analysis",
      "Daily posting, stories & reels management",
      "Community management & engagement",
      "Monthly performance & growth reports",
    ],
    process: [
      { title: "Audit", desc: "We analyze your current social presence and identify growth opportunities." },
      { title: "Strategy", desc: "A content and campaign plan tailored to your audience and goals." },
      { title: "Create", desc: "Scroll-stopping creatives, reels and copy published on schedule." },
      { title: "Optimize", desc: "Continuous testing and reporting to improve reach and conversions." },
    ],
  },
  {
    slug: "seo",
    title: "Search Engine Optimization",
    shortDesc:
      "Our SEO services help your website rank on Google, bring more visitors, and grow your business naturally.",
    tagline: "Rank. Visibility. Traffic.",
    img: "/seo.jpeg",
    longDescription: [
      "We build long-term organic visibility through technical SEO, on-page optimization and authoritative link building — helping your website climb search rankings and stay there.",
      "Our SEO process is transparent and data-driven: keyword research grounded in real search intent, content that answers what your customers are searching for, and continuous tracking against measurable KPIs.",
    ],
    benefits: [
      "In-depth keyword & competitor research",
      "On-page & technical SEO optimization",
      "High-quality content & link building",
      "Local SEO for city-specific visibility",
      "Transparent monthly ranking reports",
    ],
    process: [
      { title: "Audit", desc: "A full technical and content audit to uncover ranking blockers." },
      { title: "Research", desc: "Keyword mapping based on real customer search intent." },
      { title: "Optimize", desc: "On-page fixes, content upgrades and technical improvements." },
      { title: "Grow", desc: "Ongoing link building and reporting to compound your rankings." },
    ],
  },
  {
    slug: "content-marketing",
    title: "Content Marketing",
    shortDesc:
      "Share valuable content that attracts visitors and keeps them engaged with your brand.",
    tagline: "Create. Connect. Convert.",
    img: "/cm.jpeg",
    longDescription: [
      "Great content builds trust before a single sales conversation happens. We create blogs, videos, infographics and email content that positions your brand as the obvious choice in your industry.",
      "Every piece is planned around your funnel — awareness, consideration and conversion — so your content doesn't just get views, it moves people toward becoming customers.",
    ],
    benefits: [
      "Blog & article writing optimized for SEO",
      "Brand storytelling & video scripts",
      "Email newsletters & lead nurturing content",
      "Infographics & visual content design",
      "Content calendar planning & distribution",
    ],
    process: [
      { title: "Plan", desc: "A content calendar mapped to your audience and business goals." },
      { title: "Produce", desc: "High-quality writing and visuals crafted by our content team." },
      { title: "Publish", desc: "Distribution across your website, blog and social channels." },
      { title: "Measure", desc: "Tracking engagement and refining topics that perform best." },
    ],
  },
  {
    slug: "web-development",
    title: "Web Development",
    shortDesc:
      "Fast, responsive and conversion-focused websites that help businesses build a strong online presence.",
    tagline: "Design. Build. Convert.",
    img: "/wd.jpeg",
    longDescription: [
      "We design and build websites that load fast, look great on every device, and are structured to turn visitors into customers. From landing pages to full business websites, every build is clean, modern and scalable.",
      "Our development process combines strong UI/UX design with performance-first engineering, so your site isn't just beautiful — it's fast, SEO-friendly and easy to maintain.",
    ],
    benefits: [
      "Responsive, mobile-first design",
      "Fast-loading, SEO-friendly architecture",
      "Custom UI/UX tailored to your brand",
      "CMS integration for easy content updates",
      "Ongoing support & maintenance",
    ],
    process: [
      { title: "Discover", desc: "Understanding your business, users and goals." },
      { title: "Design", desc: "Wireframes and UI design focused on conversion." },
      { title: "Develop", desc: "Clean, performant code built for scale." },
      { title: "Launch", desc: "Testing, deployment and post-launch support." },
    ],
  },
  {
    slug: "ppc",
    title: "Pay Per Click (PPC)",
    shortDesc:
      "Generate quality leads with highly targeted PPC campaigns and measurable ROI.",
    tagline: "Clicks. Leads. Sales.",
    img: "/ppc.jpeg",
    longDescription: [
      "We run precision-targeted Google Ads and Meta Ads campaigns designed to put your business in front of ready-to-buy customers — while keeping your cost per lead under control.",
      "Every campaign is backed by conversion tracking, A/B tested ad creative and continuous bid optimization, so your budget goes toward the clicks that actually convert.",
    ],
    benefits: [
      "Google Search, Display & Shopping Ads",
      "Meta & Instagram Ads management",
      "Conversion tracking & landing page audits",
      "A/B testing of ad creatives & copy",
      "Weekly optimization & ROI reporting",
    ],
    process: [
      { title: "Research", desc: "Audience, keyword and competitor research." },
      { title: "Launch", desc: "Campaign setup with precise targeting and tracking." },
      { title: "Test", desc: "A/B testing creatives, copy and landing pages." },
      { title: "Scale", desc: "Doubling down on what converts, cutting what doesn't." },
    ],
  },
  {
    slug: "social-media-optimization",
    title: "Social Media Optimization",
    shortDesc:
      "Improve engagement, visibility and trust through optimized social media profiles.",
    tagline: "Optimize. Trust. Shine.",
    img: "/smo.jpeg",
    longDescription: [
      "First impressions matter. We optimize every element of your social profiles — bios, visuals, highlights and linking structure — so visitors instantly understand who you are and what you offer.",
      "Beyond appearance, we improve profile discoverability and engagement signals so your brand shows up more often and builds trust faster.",
    ],
    benefits: [
      "Profile & bio optimization across platforms",
      "Branded highlight covers & visual consistency",
      "Hashtag & keyword optimization",
      "Engagement rate improvement strategies",
      "Cross-platform link & CTA structuring",
    ],
    process: [
      { title: "Audit", desc: "Reviewing every profile for gaps and inconsistencies." },
      { title: "Redesign", desc: "Refreshing visuals, bios and highlight structure." },
      { title: "Optimize", desc: "Keyword and hashtag tuning for discoverability." },
      { title: "Monitor", desc: "Tracking engagement lift and refining further." },
    ],
  },
  {
    slug: "app-development",
    title: "App Development",
    shortDesc:
      "Modern Android and iOS applications with exceptional performance and user experience.",
    tagline: "Design. Build. Launch.",
    img: "/app_dev.jpeg",
    longDescription: [
      "We design and develop mobile apps that are fast, intuitive and built to scale — from MVPs to full-featured Android and iOS applications.",
      "Our team focuses on clean architecture and smooth UX, ensuring your app not only looks great but performs reliably as your user base grows.",
    ],
    benefits: [
      "Native & cross-platform app development",
      "Intuitive UI/UX design",
      "API integration & backend connectivity",
      "App Store & Play Store deployment support",
      "Post-launch maintenance & updates",
    ],
    process: [
      { title: "Plan", desc: "Defining features, flows and technical requirements." },
      { title: "Design", desc: "Prototyping a smooth, intuitive user experience." },
      { title: "Build", desc: "Development with rigorous testing at every stage." },
      { title: "Launch", desc: "Store deployment and ongoing support." },
    ],
  },
  {
    slug: "google-my-business",
    title: "Google My Business",
    shortDesc:
      "Improve your local visibility and Google Maps rankings with optimized GMB profiles.",
    tagline: "Local. Visible. Trusted.",
    img: "/gmb.jpeg",
    longDescription: [
      "Your Google Business Profile is often the first thing local customers see. We optimize it fully — categories, photos, posts and reviews — to help you rank higher in local search and Maps results.",
      "We also manage ongoing updates and review responses, keeping your profile active and trustworthy in the eyes of both Google and your customers.",
    ],
    benefits: [
      "Complete GMB profile setup & optimization",
      "Local keyword & category optimization",
      "Photo, post & Q&A management",
      "Review generation & response management",
      "Local pack & Maps ranking tracking",
    ],
    process: [
      { title: "Setup", desc: "Claiming and fully optimizing your business profile." },
      { title: "Optimize", desc: "Categories, service areas and local keywords." },
      { title: "Engage", desc: "Regular posts, photos and review management." },
      { title: "Track", desc: "Monitoring local rankings and visibility gains." },
    ],
  },
];

export function getServiceBySlug(slug: string) {
  return services.find((s) => s.slug === slug);
}
