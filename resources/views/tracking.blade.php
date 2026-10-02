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
                    Paws of Borders — speuren met een serieus doel
                </p>
            </div>
        </div>


        {{-- Wat is speuren? --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    Wat is speuren?
                </h2>

                <p class="text-brown text-lg leading-relaxed mb-6">
                    Speuren is het volgen van een uniek geurspoor dat een hond of persoon heeft achtergelaten.
                    De speurhond leert één specifieke geur te herkennen en die consequent te volgen,
                    ondanks afleidingen zoals andere geuren, wind of wisselende ondergrond.
                </p>

                <p class="text-brown text-lg leading-relaxed">
                    Bij <strong>Paws of Joy</strong> doen onze eigen honden dit met veel plezier
                    onder de naam <strong>Paws of Borders</strong>.
                    We combineren beweging met echte mentale uitdaging — en soms is het doel
                    nog serieuzer: het helpen terugvinden van vermiste honden.
                </p>
            </div>
        </section>


        {{-- Paws of Borders --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <div class="text-center mb-8">
                    <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                        Paws of Borders
                    </h2>

                    <a href="https://www.facebook.com/pawsofborders" target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 text-brown hover:text-yellow transition-colors">
                        <img src="/images/2023_Facebook_icon.svg.webp" alt="Facebook Paws of Borders" class="h-7 w-7">
                        <span class="font-medium">Volg Paws of Borders op Facebook</span>
                    </a>
                </div>

                <div class="bg-cream rounded-2xl p-8 md:p-10 shadow-sm">
                    <p class="text-brown text-lg leading-relaxed mb-6">
                        Onder de naam <strong>Paws of Borders</strong> speuren we niet alleen voor de fun.
                        Mijn moeder is actief betrokken bij het <strong>oprechte zoeken naar vermiste honden</strong>.
                        Wanneer een hond zoekraakt, kan een goed getrainde speurhond het verschil maken.
                    </p>

                    <p class="text-brown text-lg leading-relaxed mb-6">
                        Om daar klaar voor te zijn, trainen we regelmatig met een <strong>verstopper</strong>.
                        Die persoon verbergt zich en geeft van tevoren een geurbron
                        (bijvoorbeeld een stukje kleding of een geurdoekje).
                        De speurhond krijgt die geur te ruiken en moet het spoor volgen tot hij de verstopper vindt.
                    </p>

                    <p class="text-brown text-lg leading-relaxed">
                        Heel belangrijk hierbij: we lopen bewust ook veel <strong>positieve sporen</strong>.
                        De hond moet regelmatig iets vinden. Alleen maar zoeken zonder resultaat
                        is demotiverend. Door succeservaringen blijft de hond scherp, gemotiveerd
                        en vol vertrouwen in zijn werk.
                    </p>
                </div>
            </div>
        </section>


        {{-- Wanneer een speurhond inzetten? --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8">
                    Wanneer een speurhond inzetten?
                </h2>

                <div class="bg-sand rounded-2xl p-8 md:p-10">
                    <p class="text-brown text-lg leading-relaxed mb-6">
                        Als er een hond vermist is, is het raadzaam om <strong>zo snel mogelijk</strong>
                        een speurhond in te zetten. Op die manier win je tijd: het af te zoeken gebied
                        wordt bepaald aan de hand van de richting waarin het spoor loopt of eindigt.
                    </p>

                    <div class="space-y-4 text-brown text-lg">
                        <div class="flex gap-3">
                            <span class="text-green font-bold text-xl">✓</span>
                            <p>Geen zichtmeldingen? Dan is een speurhond extra waardevol.</p>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-green font-bold text-xl">✓</span>
                            <p>Zijn er al betrouwbare zichtmeldingen? Dan is een speurhond niet altijd noodzakelijk.</p>
                        </div>
                        <div class="flex gap-3">
                            <span class="text-red-600 font-bold text-xl">!</span>
                            <p>Bij een <strong>angstige hond</strong> wordt op dat moment meestal
                                <strong>niet</strong> aangeraden om een speurhond in te zetten.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        {{-- Speuren of trailen? --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-10">
                    Speuren of trailen?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">

                    <div class="bg-cream rounded-2xl p-8">
                        <h3 class="text-brown text-xl font-bold mb-4">Speuren</h3>
                        <p class="text-brown leading-relaxed mb-4">
                            De hond volgt <strong>exact</strong> het spoor waar de vermiste hond gelopen heeft.
                            Hij gebruikt lichaamsgeuren (zweet, huidschilfers) én bodemgeuren
                            (grasbreuk, omgewoelde aarde).
                        </p>
                        <ul class="text-brown space-y-2">
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Precies te zien hoe de vermiste gelopen heeft
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Voorwerpen op het spoor worden sneller opgemerkt
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Ook urine of ontlasting kan informatie geven
                            </li>
                        </ul>
                    </div>

                    <div class="bg-cream rounded-2xl p-8">
                        <h3 class="text-brown text-xl font-bold mb-4">Trailen</h3>
                        <p class="text-brown leading-relaxed mb-4">
                            De hond volgt vooral de <strong>lichaamseigen geur</strong> van de vermiste hond.
                            Die geur waait weg en komt elders terecht. De trailhond hoeft dus niet
                            precies dezelfde route te lopen.
                        </p>
                        <ul class="text-brown space-y-2">
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Vinden is belangrijker dan exact het spoor volgen
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Kan soms na dagen nog werken
                            </li>
                            <li class="flex gap-2">
                                <span class="text-green font-bold">→</span>
                                Afhankelijk van wind, neerslag en omgeving
                            </li>
                        </ul>
                    </div>

                </div>

                <p class="text-brown text-center text-lg">
                    Bij Paws of Borders focussen we vooral op <strong>speuren</strong>.
                    Dat geeft de meeste informatie over de route die de vermiste hond heeft afgelegd.
                </p>
            </div>
        </section>


        {{-- Geurbron --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8">
                    Geurbron meegeven
                </h2>

                <div class="space-y-8">

                    <div class="bg-sand rounded-2xl p-8">
                        <h3 class="text-brown text-xl font-bold mb-4">Wat is bruikbaar als geurbron?</h3>
                        <p class="text-brown text-lg leading-relaxed mb-4">
                            In principe alles wat met de vermiste hond in aanraking is geweest,
                            <strong>met uitzondering van</strong> metaal, plastic, urine, ontlasting
                            of andere uitwerpselen.
                        </p>
                        <p class="text-brown text-lg leading-relaxed">
                            Goede voorbeelden: halsband, tuig, een kledingstuk, een doekje
                            of borstelharen. Slechts 20 seconden contact is al genoeg voor
                            een goed getrainde speurhond.
                        </p>
                    </div>

                    <div class="bg-sand rounded-2xl p-8">
                        <h3 class="text-brown text-xl font-bold mb-4">Hoe verpak je een geurbron?</h3>
                        <p class="text-brown text-lg leading-relaxed mb-4">
                            Raak de geurbron <strong>nooit met blote handen</strong> aan.
                            Jouw geur of die van de eigenaar kan anders de sterkste geur worden.
                        </p>
                        <ol class="text-brown text-lg space-y-3 list-decimal list-inside">
                            <li>Keer een schone plastic zak binnenstebuiten.</li>
                            <li>Pak de geurbron op met de zak (handen raken de buitenkant niet aan).</li>
                            <li>Doe deze zak in een tweede zak met de opening naar beneden.</li>
                            <li>Sluit de tweede zak. De geleider pakt de zakken later zelf uit.</li>
                        </ol>
                        <p class="text-brown text-lg leading-relaxed mt-4">
                            Tip: split de geurbron over meerdere zakken, of zorg voor meerdere
                            geurbronnen. Dan kunnen meerdere speurhonden tegelijk worden ingezet.
                        </p>
                    </div>

                    <div class="bg-sand rounded-2xl p-8">
                        <h3 class="text-brown text-xl font-bold mb-4">Meerdere honden in huis?</h3>
                        <p class="text-brown text-lg leading-relaxed mb-4">
                            Een geurbron is bijna altijd een <strong>gedeelde geurbron</strong>.
                            De sterkste geur op een halsband of tuig is meestal die van de vermiste hond.
                            Een goed getrainde speurhond kan andere geuren elimineren.
                        </p>
                        <p class="text-brown text-lg leading-relaxed">
                            Bij een mand, kleed of speeltje is de kans op gemengde geuren groter.
                            Houd in dat geval de andere honden zoveel mogelijk uit het zoekgebied.
                        </p>
                    </div>

                    <div class="bg-green/20 border border-green rounded-2xl p-6">
                        <p class="text-brown text-lg leading-relaxed">
                            <strong>Handige tip voor later:</strong> borstel je hond en stop de haren
                            met een schoon doekje in een afsluitbare vershoudzak. Schrijf de naam erop
                            en bewaar hem droog en donker. Zo heb je altijd een goede geurbron in huis.
                            Deze is jaren te bewaren.
                        </p>
                    </div>

                </div>
            </div>
        </section>


        {{-- Hoe werkt een inzet? --}}
        <section class="px-6 py-16">
            <div class="max-w-6xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-12">
                    Hoe werkt een inzet?
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👃</div>
                            <h3 class="text-brown text-xl font-bold mb-3">De geurbron</h3>
                            <p class="text-brown leading-relaxed">
                                De speurhond krijgt de geurbron te ruiken.
                                Daarna start hij op de plek waar de vermiste hond
                                voor het laatst gezien is of is weggelopen.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">👣</div>
                            <h3 class="text-brown text-xl font-bold mb-3">Het spoor volgen</h3>
                            <p class="text-brown leading-relaxed">
                                De hond werkt aan een lange lijn en volgt het geurspoor.
                                Hij gebruikt zowel geur op de grond als in de lucht.
                                De geleider “leest” de hond en beslist of er verder
                                gegaan wordt.
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <div class="text-4xl mb-4">🎯</div>
                            <h3 class="text-brown text-xl font-bold mb-3">Positieve training</h3>
                            <p class="text-brown leading-relaxed">
                                Tijdens trainingen zorgen we bewust voor succes.
                                De hond mag de verstopper of het voorwerp vinden.
                                Zo blijft hij gemotiveerd en vol zelfvertrouwen.
                            </p>
                        </div>
                    </div>

                </div>

                <p class="text-brown text-center text-lg mt-10 max-w-3xl mx-auto">
                    Een speurhond <strong>vangt</strong> de vermiste hond niet.
                    Hij verwijst naar het spoor of de richting.
                    Bij een angstige hond is dat extra belangrijk: een “neus aan neus”
                    contact willen we juist voorkomen.
                </p>
            </div>
        </section>


        {{-- Na het speuren --}}
        <section class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">

                <h2 class="text-brown text-2xl md:text-3xl font-bold text-center mb-8">
                    Na het speuren
                </h2>

                <div class="bg-sand rounded-2xl p-8 md:p-10">
                    <p class="text-brown text-lg leading-relaxed mb-6">
                        Zodra de speurhond gestopt is, vertelt de geleider eerst mondeling
                        wat het resultaat is. Daarna maken de meeste speurgeleiders een
                        <strong>speurverslag</strong> met de gelopen route op een kaart.
                    </p>

                    <p class="text-brown text-lg leading-relaxed mb-6">
                        Aan de hand van dat verslag kijken we naar mogelijke schuilplaatsen,
                        plekken waar de hond voedsel of water kan vinden, en geven we
                        praktische adviezen. Denk aan flyeren of het plaatsen van een vangkooi.
                    </p>

                    <p class="text-brown text-lg leading-relaxed">
                        Het doel is altijd hetzelfde:
                        <strong>zoveel mogelijk bruikbare informatie</strong> leveren
                        zodat de vermiste hond zo snel mogelijk veilig thuiskomt.
                    </p>
                </div>
            </div>
        </section>


        {{-- Voordelen --}}
        <section class="px-6 py-16">
            <div class="max-w-4xl mx-auto text-center">

                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-10">
                    Waarom speuren ook goed is voor je eigen hond
                </h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-left">

                    <div class="flex gap-4 items-start">
                        <span class="text-2xl">🧠</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">Mentale uitdaging</h4>
                            <p class="text-brown">Speuren is zwaar hersenwerk. Een vermoeide hond is vaak een tevreden
                                hond.</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <span class="text-2xl">🔥</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">Natuurlijke drift</h4>
                            <p class="text-brown">Veel honden hebben een sterke zoekdrift. Speuren geeft daar een positieve
                                uitlaatklep aan.</p>
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
                        <span class="text-2xl">🎯</span>
                        <div>
                            <h4 class="font-bold text-brown mb-1">Succeservaringen</h4>
                            <p class="text-brown">Door positieve sporen blijft de hond gemotiveerd en vol zelfvertrouwen.
                            </p>
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
                    Of je nu wilt dat jouw hond leert speuren, of je bent benieuwd
                    naar wat Paws of Borders doet bij vermiste honden —
                    neem gerust contact met ons op.
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
