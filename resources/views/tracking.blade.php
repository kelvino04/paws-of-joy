@extends('layouts.app')

@section('title', 'Speurhonden | Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        {{-- Hero --}}
        <div class="relative h-80 md:h-96">
            @php
                $heroImage = \App\Models\PageContent::where('page', 'tracking')
                    ->where('key', 'tracking_hero')
                    ->value('content');
            @endphp

            <img src="{{ $heroImage ? asset('storage/' . $heroImage) : asset('images/ginEnMil.jpeg') }}"
                alt="Speurhonden aan het werk" class="w-full h-full object-cover">

            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/30">
                <h1 class="text-cream font-bold text-3xl md:text-5xl text-center px-4 drop-shadow-lg">
                    Speurhonden
                </h1>
                <p class="text-cream text-lg md:text-xl mt-3 text-center max-w-2xl px-4 drop-shadow">
                    Meer dan alleen wandelen — mentale uitdaging met de neus
                </p>
            </div>
        </div>


        {{-- Intro --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    Wat is speuren?
                </h2>

                <p class="text-brown text-lg leading-relaxed mb-6">
                    Speuren is het volgen van een uniek geurspoor dat iemand heeft achtergelaten.
                    De hond leert één specifieke geur te herkennen en die consequent te volgen,
                    ondanks afleidingen zoals andere geuren, wind of wisselende ondergrond.
                </p>

                <p class="text-brown text-lg leading-relaxed">
                    Bij <strong>Paws of Joy</strong> doen onze eigen honden dit met veel plezier.
                    Onder de naam <strong>Paws of Borders</strong> combineren we beweging met
                    echte mentale uitdaging. Speuren is niet alleen leuk — het is ook heel goed
                    voor de concentratie, zelfvertrouwen en de band tussen hond en handler.
                </p>
            </div>
        </section>


        {{-- Hoe werkt het --}}
        <section class="px-6 py-16">
            <div class="max-w-6xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-12">
                    Hoe werkt speuren?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👃</div>
                            <h3 class="text-brown text-xl font-bold mb-3">De neus als superkracht</h3>
                            <p class="text-brown leading-relaxed">
                                Een hond heeft tot wel 300 miljoen reukcellen (mensen hebben er ongeveer 6 miljoen).
                                Hij ruikt niet alleen “iets”, maar kan individuele geuren onderscheiden
                                en een spoor uren tot dagen later nog volgen.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👣</div>
                            <h3 class="text-brown text-xl font-bold mb-3">Het geurspoor</h3>
                            <p class="text-brown leading-relaxed">
                                Bij elke stap laat een mens huidcellen, zweet en geur achter op de grond
                                en in de vegetatie. De hond leert precies die combinatie te volgen
                                en andere geuren te negeren.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">🤝</div>
                            <h3 class="text-brown text-xl font-bold mb-3">Samenwerken</h3>
                            <p class="text-brown leading-relaxed">
                                De hond werkt meestal aan een lange lijn in een speurtuig.
                                Jij leert je hond “lezen”: wanneer heeft hij de geur, wanneer is hij hem kwijt?
                                Het is teamwork van de bovenste plank.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- Speuren vs Zoeken --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-10">
                    Speuren of zoeken?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                    <div class="bg-sand rounded-2xl p-8">
                        <h3 class="text-brown text-xl font-bold mb-4">Speuren</h3>
                        <ul class="text-brown space-y-3">
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Volgen van een individueel spoor van A naar B
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                De hond volgt de route die iemand heeft gelopen
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Focus op richting, geurconcentratie en doorzetten
                            </li>
                        </ul>
                    </div>

                    <div class="bg-sand rounded-2xl p-8">
                        <h3 class="text-brown text-xl font-bold mb-4">Zoeken / Detectie</h3>
                        <ul class="text-brown space-y-3">
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Zoeken naar een aangeleerde geurbron in een gebied
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Bijvoorbeeld een verborgen voorwerp of specifieke geur
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Meer “vinden” dan “volgen”
                            </li>
                        </ul>
                    </div>

                </div>

                <p class="text-brown text-center mt-8 text-lg">
                    Bij Paws of Joy focussen we vooral op <strong>speuren</strong> —
                    het volgen van een spoor. Dit past perfect bij de natuurlijke drive van veel honden.
                </p>
            </div>
        </section>


        {{-- Voordelen --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto text-center">

                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-10">
                    Waarom speuren goed is voor je hond
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">

                    <div class="flex gap-4 items-start">
                        <span class="text-2xl">🧠</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">Mentale uitdaging</h4>
                            <p class="text-brown">Speuren is hersenwerk. Een vermoeide hond is vaak een tevreden hond.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <span class="text-2xl">🔥</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">Natuurlijke drift</h4>
                            <p class="text-brown">Veel honden hebben een sterke zoek- en jachtdrift. Speuren geeft daar een
                                positieve uitlaatklep aan.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <span class="text-2xl">❤️</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">Sterkere band</h4>
                            <p class="text-brown">Jullie werken samen als team. Dat versterkt het vertrouwen en de
                                samenwerking.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <span class="text-2xl">😌</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">Rust & focus</h4>
                            <p class="text-brown">Veel honden worden rustiger en geconcentreerder door regelmatig te
                                speuren.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        {{-- CTA --}}
        <section class="bg-green px-6 py-16">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-black text-3xl md:text-4xl font-bold mb-6">
                    Interesse in speuren?
                </h2>

                <p class="text-black text-lg leading-relaxed mb-8">
                    Onze honden speuren met veel plezier en we bieden ook speurlessen aan
                    (onder leiding van een ervaren speurbegeleidster).
                    Nieuwsgierig of het iets voor jouw hond is?
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="btn">
                        Neem contact op
                    </a>
                    <a href="/trackingLessons"
                        class="bg-brown text-cream font-bold py-2 px-6 rounded-lg
                       hover:bg-yellow hover:text-black transition-all duration-200 hover:scale-105 shadow-md">
                        Speurlessen bekijken
                    </a>
                </div>
            </div>
        </section>

    </main>

@endsection
