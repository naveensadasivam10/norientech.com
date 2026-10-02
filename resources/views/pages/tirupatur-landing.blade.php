@extends('layouts.app')

@section('title', 'IT Services & Software Development in Tirupatur & Vaniyambadi | Norien Technologies')
@section('description', 'Norien Technologies provides website development, custom software, cloud, and AI/ML services to businesses in Tirupatur district, Vaniyambadi and Ambur, Tamil Nadu. Call +91 97391 28127.')

@push('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Norien Technologies (OPC) Private Limited",
  "image": "https://norientech.com/logo.png",
  "url": "https://norientech.com/tirupatur-it-services",
  "telephone": "+91-9739128127",
  "email": "hello@norientech.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "3/290 4th Street, Gokul Nagar, Chettiappanur",
    "addressLocality": "Vaniyambadi",
    "addressRegion": "Tamil Nadu",
    "addressCountry": "IN",
    "postalCode": "635751"
  },
  "areaServed": ["Tirupathur District", "Vaniyambadi", "Ambur", "Tirupattur", "Vellore"],
  "priceRange": "₹₹"
}
</script>
@endpush

@section('content')
<section class="max-w-6xl mx-auto px-4 py-16">
    <h1 class="text-3xl font-bold mb-6">IT Services & Software Development in Tirupatur District</h1>
    <p class="text-lg text-slate-600 mb-8">
        Norien Technologies is based in Vaniyambadi, Tirupathur District, and builds websites,
        custom software, cloud setups, and AI/ML solutions for small and medium businesses across
        Tirupatur, Vaniyambadi, Ambur and Vellore.
    </p>

    <h2 class="text-2xl font-semibold mb-4">What we build for local businesses</h2>
    <ul class="list-disc list-inside text-slate-600 mb-8 space-y-2">
        <li>Business websites and online stores</li>
        <li>Custom software and CRM for shops, traders, and manufacturers</li>
        <li>Cloud hosting, backups, and DevOps support</li>
        <li>Attendance and leave management for staff</li>
        <li>Tech training for local students and jobseekers</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-4">Our office</h2>
    <p class="text-slate-600 mb-8">
        3/290 4th Street, Gokul Nagar, Chettiappanur, Vaniyambadi, Tirupathur District 635751, Tamil Nadu<br>
        Phone: <a href="tel:+919739128127" class="underline">+91 97391 28127</a><br>
        Email: <a href="mailto:hello@norientech.com" class="underline">hello@norientech.com</a>
    </p>

    <a href="{{ route('contact') }}" class="inline-block bg-slate-900 text-white px-6 py-3 rounded-md">Talk to us</a>
</section>
@endsection
