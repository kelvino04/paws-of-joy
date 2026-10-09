@extends('layouts.app')

@section('title', 'Speurhonden | Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        {{-- Hero (geen animatie) --}}
        <div class="relative h-80 md:h-96">
            @php
                $heroImage = $contents->get('tracking_hero')?->content;
                $heroPos = $contents->get('tracking_hero_position')?->content ?? 'center';
            @endphp

            <img src="{{ $heroImage ? asset('storage/' . $heroImage) : asset('images/ginEnMilHero.jpeg') }}"
                alt="Speurhonden aan het werk" class="w-full h-full object-cover object-{{ $heroPos }}">

            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30">
                <h1 class="text-cream font-bold text-3xl md:text-5xl text-center px-4 drop-shadow-lg">
                    {{ $contents->get('tracking_hero_title')?->content ?? 'Speurhonden' }}
                </h1>
                <p class="text-cream text-lg md:text-xl mt-3 text-center max-w-2xl px-4 drop-shadow">
                    {{ $contents->get('tracking_hero_subtitle')?->content ?? 'Paws of Borders — speuren met een serieus doel' }}
                </p>
            </div>
        </div>


        {{-- Intro --}}
        <section class="bg-cream px-6 py-16 reveal">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    {{ $contents->get('tracking_intro_title')?->content ?? 'Wat is speuren?' }}
                </h2>
                <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                    {{ $contents->get('tracking_intro_text')?->content }}
                </p>
            </div>
        </section>


        {{-- Paws of Borders --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-8 reveal">
                    <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                        {{ $contents->get('tracking_pob_title')?->content ?? 'Paws of Borders' }}
                    </h2>
                    <a href="https://www.facebook.com/pawsofborders" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 text-brown hover:text-yellow transition-colors">
                        <img src="/images/2023_Facebook_icon.svg.webp" alt="Facebook" class="h-7 w-7">
                        <span class="font-medium">
                            {{ $contents->get('tracking_pob_facebook')?->content ?? 'Volg Paws of Borders op Facebook' }}
                        </span>
                    </a>
                </div>
                <div class="bg-cream rounded-2xl p-8 md:p-10 shadow-sm contact-slide-left">
                    <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                        {{ $contents->get('tracking_pob_text')?->content }}
                    </p>
                </div>
            </div>
        </section>


        {{-- Wanneer --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8 reveal">
                    {{ $contents->get('tracking_when_title')?->content ?? 'Wanneer een speurhond inzetten?' }}
                </h2>
                <div class="bg-sand rounded-2xl p-8 md:p-10 contact-slide-right">
                    <p class="text-brown text-lg leading-relaxed mb-6">
                        {{ $contents->get('tracking_when_text')?->content }}
                    </p>
                    <div class="space-y-4 text-brown text-lg">
                        <div class="flex gap-3">
                            <span class="text-green font-bold text-xl">✓</span>
                            <p>{{ $contents->get('tracking_when_1')?->content }}</p>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-green font-bold text-xl">✓</span>
                            <p>{{ $contents->get('tracking_when_2')?->content }}</p>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-red-600 font-bold text-xl">!</span>
                            <p>{{ $contents->get('tracking_when_3')?->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Speuren vs trailen --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-10 reveal">
                    {{ $contents->get('tracking_vs_title')?->content ?? 'Speuren of trailen?' }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="bg-cream rounded-2xl p-8 contact-slide-left">
                        <h3 class="text-brown text-xl font-bold mb-4">
                            {{ $contents->get('tracking_speuren_title')?->content ?? 'Speuren' }}
                        </h3>
                        <p class="text-brown leading-relaxed mb-4">
                            {{ $contents->get('tracking_speuren_text')?->content }}
                        </p>
                        <ul class="text-brown space-y-2">
                            <li class="flex gap-2"><span
                                    class="text-green font-bold">→</span>{{ $contents->get('tracking_speuren_1')?->content }}
                            </li>
                            <li class="flex gap-2"><span
                                    class="text-green font-bold">→</span>{{ $contents->get('tracking_speuren_2')?->content }}
                            </li>
                            <li class="flex gap-2"><span
                                    class="text-green font-bold">→</span>{{ $contents->get('tracking_speuren_3')?->content }}
                            </li>
                        </ul>
                    </div>

                    <div class="bg-cream rounded-2xl p-8 contact-slide-right">
                        <h3 class="text-brown text-xl font-bold mb-4">
                            {{ $contents->get('tracking_trailen_title')?->content ?? 'Trailen' }}
                        </h3>
                        <p class="text-brown leading-relaxed mb-4">
                            {{ $contents->get('tracking_trailen_text')?->content }}
                        </p>
                        <ul class="text-brown space-y-2">
                            <li class="flex gap-2"><span
                                    class="text-green font-bold">→</span>{{ $contents->get('tracking_trailen_1')?->content }}
                            </li>
                            <li class="flex gap-2"><span
                                    class="text-green font-bold">→</span>{{ $contents->get('tracking_trailen_2')?->content }}
                            </li>
                            <li class="flex gap-2"><span
                                    class="text-green font-bold">→</span>{{ $contents->get('tracking_trailen_3')?->content }}
                            </li>
                        </ul>
                    </div>
                </div>

                <p class="text-brown text-center text-lg reveal">
                    {{ $contents->get('tracking_vs_conclusion')?->content }}
                </p>
            </div>
        </section>


        {{-- Geurbron --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8 reveal">
                    {{ $contents->get('tracking_scent_title')?->content ?? 'Geurbron meegeven' }}
                </h2>

                <div class="space-y-8">
                    <div class="bg-sand rounded-2xl p-8 contact-slide-left">
                        <h3 class="text-brown text-xl font-bold mb-4">
                            {{ $contents->get('tracking_scent_what_title')?->content ?? 'Wat is bruikbaar als geurbron?' }}
                        </h3>
                        <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                            {{ $contents->get('tracking_scent_what_text')?->content }}
                        </p>
                    </div>

                    <div class="bg-sand rounded-2xl p-8 contact-slide-right">
                        <h3 class="text-brown text-xl font-bold mb-4">
                            {{ $contents->get('tracking_scent_pack_title')?->content ?? 'Hoe verpak je een geurbron?' }}
                        </h3>
                        <p class="text-brown text-lg leading-relaxed mb-4">
                            {{ $contents->get('tracking_scent_pack_intro')?->content }}
                        </p>
                        <ol class="text-brown text-lg space-y-3 list-decimal list-inside">
                            <li>{{ $contents->get('tracking_scent_pack_1')?->content }}</li>
                            <li>{{ $contents->get('tracking_scent_pack_2')?->content }}</li>
                            <li>{{ $contents->get('tracking_scent_pack_3')?->content }}</li>
                            <li>{{ $contents->get('tracking_scent_pack_4')?->content }}</li>
                        </ol>
                        <p class="text-brown text-lg leading-relaxed mt-4">
                            {{ $contents->get('tracking_scent_pack_tip')?->content }}
                        </p>
                    </div>

                    <div class="bg-sand rounded-2xl p-8 contact-slide-left">
                        <h3 class="text-brown text-xl font-bold mb-4">
                            {{ $contents->get('tracking_scent_multi_title')?->content ?? 'Meerdere honden in huis?' }}
                        </h3>
                        <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                            {{ $contents->get('tracking_scent_multi_text')?->content }}
                        </p>
                    </div>

                    <div class="bg-green/20 border border-green rounded-2xl p-6 reveal">
                        <p class="text-brown text-lg leading-relaxed">
                            {{ $contents->get('tracking_scent_tip')?->content }}
                        </p>
                    </div>
                </div>
            </div>
        </section>


        {{-- Hoe werkt een inzet --}}
        <section class="px-6 py-16">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-12 reveal">
                    {{ $contents->get('tracking_how_title')?->content ?? 'Hoe werkt een inzet?' }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="card reveal">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👃</div>
                            <h3 class="text-brown text-xl font-bold mb-3">
                                {{ $contents->get('tracking_how_1_title')?->content ?? 'De geurbron' }}
                            </h3>
                            <p class="text-brown leading-relaxed">
                                {{ $contents->get('tracking_how_1_text')?->content }}
                            </p>
                        </div>
                    </div>
                    <div class="card reveal">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👣</div>
                            <h3 class="text-brown text-xl font-bold mb-3">
                                {{ $contents->get('tracking_how_2_title')?->content ?? 'Het spoor volgen' }}
                            </h3>
                            <p class="text-brown leading-relaxed">
                                {{ $contents->get('tracking_how_2_text')?->content }}
                            </p>
                        </div>
                    </div>
                    <div class="card reveal">
                        <div class="card-content">
                            <div class="text-4xl mb-4">🎯</div>
                            <h3 class="text-brown text-xl font-bold mb-3">
                                {{ $contents->get('tracking_how_3_title')?->content ?? 'Positieve training' }}
                            </h3>
                            <p class="text-brown leading-relaxed">
                                {{ $contents->get('tracking_how_3_text')?->content }}
                            </p>
                        </div>
                    </div>
                </div>

                <p class="text-brown text-center text-lg mt-10 max-w-3xl mx-auto reveal">
                    {{ $contents->get('tracking_how_note')?->content }}
                </p>
            </div>
        </section>


        {{-- Na het speuren --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8 reveal">
                    {{ $contents->get('tracking_after_title')?->content ?? 'Na het speuren' }}
                </h2>
                <div class="bg-sand rounded-2xl p-8 md:p-10 contact-slide-left">
                    <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                        {{ $contents->get('tracking_after_text')?->content }}
                    </p>
                </div>
            </div>
        </section>


        {{-- Voordelen --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-10 reveal">
                    {{ $contents->get('tracking_benefits_title')?->content ?? 'Waarom speuren ook goed is voor je eigen hond' }}
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">
                    <div class="flex gap-4 items-start contact-slide-left">
                        <span class="text-2xl">🧠</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">
                                {{ $contents->get('tracking_benefit_1_title')?->content }}</h4>
                            <p class="text-brown">{{ $contents->get('tracking_benefit_1_text')?->content }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start contact-slide-right">
                        <span class="text-2xl">🔥</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">
                                {{ $contents->get('tracking_benefit_2_title')?->content }}</h4>
                            <p class="text-brown">{{ $contents->get('tracking_benefit_2_text')?->content }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start contact-slide-left">
                        <span class="text-2xl">❤️</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">
                                {{ $contents->get('tracking_benefit_3_title')?->content }}</h4>
                            <p class="text-brown">{{ $contents->get('tracking_benefit_3_text')?->content }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4 items-start contact-slide-right">
                        <span class="text-2xl">🎯</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">
                                {{ $contents->get('tracking_benefit_4_title')?->content }}</h4>
                            <p class="text-brown">{{ $contents->get('tracking_benefit_4_text')?->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- CTA --}}
        <section class="bg-green px-6 py-16 reveal">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-black text-3xl md:text-4xl font-bold mb-6">
                    {{ $contents->get('tracking_cta_title')?->content ?? 'Interesse in speuren?' }}
                </h2>
                <p class="text-black text-lg leading-relaxed mb-8">
                    {{ $contents->get('tracking_cta_text')?->content }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="btn">
                        {{ $contents->get('tracking_cta_button_1')?->content ?? 'Neem contact op' }}
                    </a>
                    <a href="/tracking-lessons"
                        class="bg-brown text-cream font-bold py-2 px-6 rounded-lg
                          hover:bg-yellow hover:text-black transition-all duration-200 hover:scale-105 shadow-md">
                        {{ $contents->get('tracking_cta_button_2')?->content ?? 'Speurlessen bekijken' }}
                    </a>
                </div>
            </div>
        </section>

    </main>

@endsection
