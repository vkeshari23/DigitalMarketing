import { notFound } from "next/navigation";
import { services, getServiceBySlug } from "../../data/services";
import ServiceDetailClient from "./ServiceDetailClient";

export function generateStaticParams() {
  return services.map((s) => ({ slug: s.slug }));
}

export function generateMetadata({ params }: { params: { slug: string } }) {
  const service = getServiceBySlug(params.slug);
  if (!service) return {};
  return {
    title: `${service.title} | Futureloopix Technologies`,
    description: service.shortDesc,
  };
}

export default function ServiceDetailPage({
  params,
}: {
  params: { slug: string };
}) {
  const service = getServiceBySlug(params.slug);
  if (!service) notFound();

  return <ServiceDetailClient service={service} />;
}
