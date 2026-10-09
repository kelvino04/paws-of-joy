@extends('layouts.app')

@section('title', 'Wie ben ik | Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        <div class="flex flex-col md:flex-row items-center gap-10 max-w-6xl mx-auto px-6 py-12">
            <div class="flex-1">
                <h1 class="text-brown text-3xl md:text-4xl font-bold mb-6">
                    {{ $contents->get('about_title')?->content ?? 'Wie ben ik?' }}
                </h1>
                <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                    {{ $contents->get('about_intro')?->content }}
                </p>
            </div>

            @php
                $aboutImage = $contents->get('about_image')?->content;
            @endphp
            <img src="{{ $aboutImage ? asset('storage/' . $aboutImage) : asset('images/miriam.jpeg') }}"
                alt="Miriam Sophie met haar honden" class="w-full md:w-1/2 h-80 md:h-96 object-cover rounded-2xl shadow-lg">
        </div>

        <div class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    {{ $contents->get('about_love_title')?->content ?? 'Mijn liefde voor dieren' }}
                </h2>
                <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                    {{ $contents->get('about_love_text')?->content }}
                </p>
            </div>
        </div>

        <div class="px-6 py-16 reveal">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    {{ $contents->get('about_experience_title')?->content ?? 'Mijn ervaring met honden' }}
                </h2>
                <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                    {{ $contents->get('about_experience_text')?->content }}
                </p>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 pb-16 reveal">
            <div class="card">
                <div class="card-content">
                    <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                        {{ $contents->get('about_education_title')?->content ?? 'Opleiding & kennis' }}
                    </h2>
                    <p class="text-brown text-lg leading-relaxed mb-6 whitespace-pre-line">
                        {{ $contents->get('about_education_text')?->content }}
                    </p>
                    <div class="flex flex-col md:flex-row gap-4 text-brown font-bold">
                        <span>🐾 Hondengedrag</span>
                        <span>🩺 Veterinaire ondersteuning</span>
                        <span>🏃 Behendigheid</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-green px-6 py-16 reveal">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-black text-3xl md:text-4xl font-bold mb-6">
                    {{ $contents->get('about_why_title')?->content ?? 'Waarom Paws of joy?' }}
                </h2>
                <p class="text-black text-lg leading-relaxed mb-8 whitespace-pre-line">
                    {{ $contents->get('about_why_text')?->content }}
                </p>
                <a href="/contact" class="btn">
                    {{ $contents->get('about_button')?->content ?? 'Neem contact op' }}
                </a>
            </div>
        </div>

    </main>

@endsection
