@extends('layouts.app')

@section('title', 'Speurlessen | Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        {{-- Hero --}}
        <div class="relative h-80 md:h-96">
            @php
                $heroImage = $contents->get('tracking_lessons_hero')?->content;
                $heroPos = $contents->get('tracking_lessons_hero_position')?->content ?? 'center';
            @endphp

            <img src="{{ $heroImage ? asset('storage/' . $heroImage) : asset('images/trackingLesson.jpeg') }}"
                alt="Hond aan het speuren tijdens een les" class="w-full h-full object-cover object-{{ $heroPos }}">

            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30">
                <h1 class="text-cream font-bold text-3xl md:text-5xl text-center px-4 drop-shadow-lg">
                    {{ $contents->get('lessons_hero_title')?->content ?? 'Speurlessen' }}
                </h1>
                <p class="text-cream text-lg md:text-xl mt-3 text-center max-w-2xl px-4 drop-shadow">
                    {{ $contents->get('lessons_hero_subtitle')?->content ?? 'Leer jouw hond speuren — met plezier, geduld en succes' }}
                </p>
            </div>
        </div>


        {{-- Intro --}}
        <section class="bg-cream px-6 py-16 reveal">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    {{ $contents->get('lessons_intro_title')?->content ?? 'Speuren leren met jouw hond' }}
                </h2>
                <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                    {{ $contents->get('lessons_intro_text')?->content }}
                </p>
            </div>
        </section>


        {{-- Wat leer je --}}
        <section class="px-6 py-16">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-12 reveal">
                    {{ $contents->get('lessons_learn_title')?->content ?? 'Wat leer je hond?' }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="card contact-slide-left">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👃</div>
                            <h3 class="text-brown text-xl font-bold mb-3">
                                {{ $contents->get('lessons_learn_1_title')?->content ?? 'Geur herkennen' }}
                            </h3>
                            <p class="text-brown leading-relaxed">
                                {{ $contents->get('lessons_learn_1_text')?->content }}
                            </p>
                        </div>
                    </div>
                    <div class="card reveal">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👣</div>
                            <h3 class="text-brown text-xl font-bold mb-3">
                                {{ $contents->get('lessons_learn_2_title')?->content ?? 'Spoor volgen' }}
                            </h3>
                            <p class="text-brown leading-relaxed">
                                {{ $contents->get('lessons_learn_2_text')?->content }}
                            </p>
                        </div>
                    </div>
                    <div class="card contact-slide-right">
                        <div class="card-content">
                            <div class="text-4xl mb-4">🤝</div>
                            <h3 class="text-brown text-xl font-bold mb-3">
                                {{ $contents->get('lessons_learn_3_title')?->content ?? 'Samenwerken' }}
                            </h3>
                            <p class="text-brown leading-relaxed">
                                {{ $contents->get('lessons_learn_3_text')?->content }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Voor wie --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8 reveal">
                    {{ $contents->get('lessons_for_who_title')?->content ?? 'Voor wie is speuren geschikt?' }}
                </h2>
                <div class="bg-sand rounded-2xl p-8 md:p-10 contact-slide-left">
                    <p class="text-brown text-lg leading-relaxed whitespace-pre-line">
                        {{ $contents->get('lessons_for_who_text')?->content }}
                    </p>
                </div>
            </div>
        </section>


        {{-- Hoe gaan de lessen --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8 reveal">
                    {{ $contents->get('lessons_how_title')?->content ?? 'Hoe gaan de lessen?' }}
                </h2>

                <div class="space-y-6">
                    <div class="flex gap-5 items-start contact-slide-left">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            1</div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">
                                {{ $contents->get('lessons_how_1_title')?->content }}</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                {{ $contents->get('lessons_how_1_text')?->content }}</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-start contact-slide-right">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            2</div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">
                                {{ $contents->get('lessons_how_2_title')?->content }}</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                {{ $contents->get('lessons_how_2_text')?->content }}</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-start contact-slide-left">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            3</div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">
                                {{ $contents->get('lessons_how_3_title')?->content }}</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                {{ $contents->get('lessons_how_3_text')?->content }}</p>
                        </div>
                    </div>
                    <div class="flex gap-5 items-start contact-slide-right">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            4</div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">
                                {{ $contents->get('lessons_how_4_title')?->content }}</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                {{ $contents->get('lessons_how_4_text')?->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Praktisch --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8 reveal">
                    {{ $contents->get('lessons_practical_title')?->content ?? 'Praktische informatie' }}
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-sand rounded-2xl p-6 contact-slide-left">
                        <h3 class="text-brown font-bold text-lg mb-3">
                            {{ $contents->get('lessons_bring_title')?->content ?? 'Wat neem je mee?' }}
                        </h3>
                        <ul class="text-brown space-y-2">
                            <li>• {{ $contents->get('lessons_bring_1')?->content }}</li>
                            <li>• {{ $contents->get('lessons_bring_2')?->content }}</li>
                            <li>• {{ $contents->get('lessons_bring_3')?->content }}</li>
                            <li>• {{ $contents->get('lessons_bring_4')?->content }}</li>
                            <li>• {{ $contents->get('lessons_bring_5')?->content }}</li>
                        </ul>
                    </div>
                    <div class="bg-sand rounded-2xl p-6 contact-slide-right">
                        <h3 class="text-brown font-bold text-lg mb-3">
                            {{ $contents->get('lessons_forms_title')?->content ?? 'Vormen' }}
                        </h3>
                        <ul class="text-brown space-y-2">
                            <li>• {{ $contents->get('lessons_forms_1')?->content }}</li>
                            <li>• {{ $contents->get('lessons_forms_2')?->content }}</li>
                            <li>• {{ $contents->get('lessons_forms_3')?->content }}</li>
                            <li>• {{ $contents->get('lessons_forms_4')?->content }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        {{-- CTA --}}
        <section class="bg-green px-6 py-16 reveal">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-black text-3xl md:text-4xl font-bold mb-6">
                    {{ $contents->get('lessons_cta_title')?->content ?? 'Interesse in speurlessen?' }}
                </h2>
                <p class="text-black text-lg leading-relaxed mb-8">
                    {{ $contents->get('lessons_cta_text')?->content }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="btn">
                        {{ $contents->get('lessons_cta_button_1')?->content ?? 'Neem contact op' }}
                    </a>
                    <a href="/tracking"
                        class="bg-brown text-cream font-bold py-2 px-6 rounded-lg
                          hover:bg-yellow hover:text-black transition-all duration-200 hover:scale-105 shadow-md">
                        {{ $contents->get('lessons_cta_button_2')?->content ?? 'Meer over speurhonden' }}
                    </a>
                </div>
            </div>
        </section>

    </main>

@endsection
