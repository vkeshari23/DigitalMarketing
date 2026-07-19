/** @type {import('next').NextConfig} */
const nextConfig = {
  output: "export",
  // Static export doesn't need server build traces. Collecting them crashes
  // under Node 24 with Next 14.2.3 (@vercel/nft worker), so skip the step.
  outputFileTracing: false,
  images: {
    unoptimized: true,
  },
  // Node 24 breaks Next 14's parallel build workers, causing intermittent
  // "PageNotFoundError: Cannot find module for page" during page-data
  // collection. Force single-threaded, in-process collection to avoid it.
  experimental: {
    workerThreads: false,
    cpus: 1,
  },
};

module.exports = nextConfig;