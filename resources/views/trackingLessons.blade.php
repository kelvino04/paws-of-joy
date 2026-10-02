@extends('layouts.app')

@section('title', 'Speurlessen | Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        {{-- Hero --}}
        <div class="relative h-80 md:h-96">
            @php
                $heroImage = \App\Models\PageContent::where('page', 'trackingLessons')
                    ->where('key', 'tracking_lessons_hero')
                    ->value('content');
            @endphp

            <img src="{{ $heroImage ? asset('storage/' . $heroImage) : asset('images/trackingLesson.jpeg') }}"
                alt="Hond aan het speuren tijdens een les" class="w-full h-full object-cover">

            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30">
                <h1 class="text-cream font-bold text-3xl md:text-5xl text-center px-4 drop-shadow-lg">
                    Speurlessen
                </h1>
                <p class="text-cream text-lg md:text-xl mt-3 text-center max-w-2xl px-4 drop-shadow">
                    Leer jouw hond speuren — met plezier, geduld en succes
                </p>
            </div>
        </div>


        {{-- Intro --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    Speuren leren met jouw hond
                </h2>

                <p class="text-brown text-lg leading-relaxed mb-6">
                    Speuren is één van de mooiste manieren om samen met je hond te werken.
                    Het prikkelt de natuurlijke neusdrang, geeft mentale uitdaging en
                    versterkt de band tussen jullie.
                </p>

                <p class="text-brown text-lg leading-relaxed">
                    Bij Paws of Joy geef ik de speurlessen, soms samen met één van mijn zoons.
                    Als ervaren speur- en hondengedragsbegeleidster werk ik met geduld,
                    positieve ervaringen en veel aandacht voor zowel de hond als de handler.
                </p>
            </div>
        </section>


        {{-- Wat leer je? --}}
        <section class="px-6 py-16">
            <div class="max-w-6xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-12">
                    Wat leer je hond?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👃</div>
                            <h3 class="text-brown text-xl font-bold mb-3">Geur herkennen</h3>
                            <p class="text-brown leading-relaxed">
                                Je hond leert een specifieke geurbron te herkennen
                                en die te onderscheiden van alle andere geuren in de omgeving.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👣</div>
                            <h3 class="text-brown text-xl font-bold mb-3">Spoor volgen</h3>
                            <p class="text-brown leading-relaxed">
                                Stap voor stap leert hij een geurspoor uit te werken.
                                Van korte, eenvoudige sporen naar langere en uitdagendere routes.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">🤝</div>
                            <h3 class="text-brown text-xl font-bold mb-3">Samenwerken</h3>
                            <p class="text-brown leading-relaxed">
                                Jij leert je hond “lezen”: wanneer heeft hij de geur,
                                wanneer is hij hem kwijt? Speuren is teamwork.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- Voor wie --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8">
                    Voor wie is speuren geschikt?
                </h2>

                <div class="bg-sand rounded-2xl p-8 md:p-10">
                    <p class="text-brown text-lg leading-relaxed mb-6">
                        Bijna elke hond kan leren speuren. Het maakt niet uit of je een
                        jonge, oudere, drukke of juist rustige hond hebt.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-brown text-lg">
                        <div class="flex gap-3">
                            <span class="text-green font-bold">✓</span>
                            <span>Honden die extra mentale uitdaging nodig hebben</span>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-green font-bold">✓</span>
                            <span>Honden met veel energie of zoekdrift</span>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-green font-bold">✓</span>
                            <span>Beginners én gevorderde speurders</span>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-green font-bold">✓</span>
                            <span>Eigenaren die graag samen met hun hond willen werken</span>
                        </div>
                    </div>

                    <p class="text-brown text-lg leading-relaxed mt-6">
                        We werken in kleine groepjes of in privélessen, zodat er
                        voldoende aandacht is voor iedere hond en handler.
                    </p>
                </div>
            </div>
        </section>


        {{-- Hoe gaan de lessen --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8">
                    Hoe gaan de lessen?
                </h2>

                <div class="space-y-6">

                    <div class="flex gap-5 items-start">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            1
                        </div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">Kennismaking</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                We kijken naar jouw hond, zijn motivatie en eventuele ervaring.
                                Zo kunnen we de les goed laten aansluiten.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5 items-start">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            2
                        </div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">Opbouw in kleine stappen</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                We beginnen met korte, eenvoudige sporen waarbij de hond
                                veel succes ervaart. Daarna bouwen we langzaam op in lengte
                                en moeilijkheidsgraad.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5 items-start">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            3
                        </div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">Positieve ervaringen</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                Succes is essentieel. De hond mag regelmatig iets vinden.
                                Dat houdt de motivatie hoog en zorgt voor een blije,
                                zelfverzekerde speurder.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5 items-start">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-green text-black font-bold flex items-center justify-center">
                            4
                        </div>
                        <div>
                            <h3 class="text-brown text-xl font-bold mb-1">Jij leert mee</h3>
                            <p class="text-brown text-lg leading-relaxed">
                                Je leert hoe je je hond kunt “lezen”, hoe je een spoor uitzet
                                en hoe je hem het beste begeleidt. Speuren is teamwork.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- Praktische info --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8">
                    Praktische informatie
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-sand rounded-2xl p-6">
                        <h3 class="text-brown font-bold text-lg mb-3">Wat neem je mee?</h3>
                        <ul class="text-brown space-y-2">
                            <li>• Een goed passend speurtuig (geen anti-trektuig)</li>
                            <li>• Een lange lijn (circa 10 meter, soepel)</li>
                            <li>• Beloningssnoepjes (klein en geurig)</li>
                            <li>• Water voor je hond</li>
                            <li>• Eventueel een klein speeltje als motivator</li>
                        </ul>
                    </div>

                    <div class="bg-sand rounded-2xl p-6">
                        <h3 class="text-brown font-bold text-lg mb-3">Vormen</h3>
                        <ul class="text-brown space-y-2">
                            <li>• Privélessen</li>
                            <li>• Kleine groepjes</li>
                            <li>• Opbouw van beginner tot gevorderd</li>
                            <li>• In overleg op locatie of vaste plek</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>


        {{-- CTA --}}
        <section class="bg-green px-6 py-16">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-black text-3xl md:text-4xl font-bold mb-6">
                    Interesse in speurlessen?
                </h2>

                <p class="text-black text-lg leading-relaxed mb-8">
                    Wil je weten of speuren iets voor jouw hond is,
                    of wil je direct een les plannen?
                    Neem gerust contact met ons op. We denken graag met je mee.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="btn">
                        Neem contact op
                    </a>
                    <a href="/tracking"
                        class="bg-brown text-cream font-bold py-2 px-6 rounded-lg
                          hover:bg-yellow hover:text-black transition-all duration-200 hover:scale-105 shadow-md">
                        Meer over speurhonden
                    </a>
                </div>
            </div>
        </section>

    </main>

@endsection
