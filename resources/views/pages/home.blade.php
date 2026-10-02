@extends('layouts.app')

@section('title', 'Norien Technologies | IT Services in Vaniyambadi & Tirupatur District')
@section('description', 'Norien Technologies builds websites, custom software, cloud, data, and AI solutions for SMBs in Vaniyambadi, Tirupatur district and worldwide.')

@section('content')
<section class="max-w-6xl mx-auto px-4 py-16 text-center">
    <h1 class="text-4xl font-bold mb-4">IT Services & Software Development in Vaniyambadi, Tirupatur District</h1>
    <p class="text-lg text-slate-600 mb-8">Websites, custom software, cloud, data, and AI solutions for SMBs.</p>
    <div class="flex gap-4 justify-center">
        <a href="{{ route('contact') }}" class="inline-block bg-slate-900 text-white px-6 py-3 rounded-md">Talk to us</a>
        <a href="{{ route('tirupatur-landing') }}" class="inline-block border border-slate-900 px-6 py-3 rounded-md">Serving Tirupatur District</a>
    </div>
</section>
@endsection
