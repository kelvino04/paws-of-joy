@extends('layouts.app')

@section('title', 'Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        <div class="flex flex-col md:flex-row items-center gap-10 max-w-6xl mx-auto px-6 py-12">
            <div class="flex-1">
                <h1 class="text-brown text-3xl md:text-4xl font-bold mb-6">Wie ben ik?</h1>
                <p class="text-brown text-lg leading-relaxed">
                    Mijn naam is Miriam Sophie,
                    ik ben 48 jaar en geboren en getogen in Oosterhout. Dieren zijn altijd een
                    belangrijk onderdeel van mijn leven geweest. Mijn liefde voor honden, mijn ervaring en mijn kennis
                    van hondengedrag vormen samen de basis van Paws of joy.</p>
            </div>
            <img src="{{ $contents->get('about_image')?->content
                ? asset('storage/' . $contents->get('about_image')->content)
                : asset('images/miriam.jpeg') }}"
                alt="Miriam Sophie met haar honden" class="w-full md:w-1/2 h-80 md:h-96 object-cover rounded-2xl shadow-lg">
        </div>
        <div class="bg-cream px-6 py-16">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    Mijn liefde voor dieren
                </h2>

                <p class="text-brown text-lg leading-relaxed">Al vanaf jonge leeftijd
                    ben ik gek op dieren. Omdat mijn broer allergisch was, konden we thuis helaas geen honden houden.
                    Wel
                    waren er een konijn en parkieten.

                    Op mijn vijftiende kwam ik terecht op een paardenhandelsstal, waar ik voor alle dieren op de
                    boerderij
                    zorgde. Van paarden, kippen en geiten tot katten, konijnen en honden.

                    Vooral de honden trokken mijn aandacht. De waakhonden waren niet gewend aan een halsband of lijn. Ik
                    zag
                    het als een uitdaging om met hen aan de slag te gaan en hun vertrouwen te winnen.</p>
            </div>
        </div>

        <div class="px-6 py-16 reveal">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-6">
                    Mijn ervaring met honden
                </h2>

                <p class="text-brown text-lg leading-relaxed">Door mijn kennis van
                    hondengedrag heb ik geleerd om goed naar honden te kijken en hun gedrag te begrijpen. Hierdoor kan
                    ik
                    inspelen op wat een hond nodig heeft en hoe ik hem of haar het beste kan begeleiden.</p>
            </div>
        </div>

        <div class="max-w-6xl mx-auto px-6 pb-16 reveal">
            <div class="card">
                <div class="card-content">
                    <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                        Opleiding & kennis
                    </h2>

                    <p class="text-brown text-lg leading-relaxed mb-6">
                        Ik heb de opleiding Dierverzorging en Veterinaire Ondersteuning gevolgd.
                        Hierdoor heb ik veel kennis opgedaan over de verzorging en gezondheid van
                        dieren. Medische problemen schrikken mij daarom niet snel af.
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
                    Waarom Paws of joy?
                </h2>

                <p class="text-black text-lg leading-relaxed mb-6">
                    Na een jaar bij een andere hondenuitlaatservice gewerkt te hebben, wist ik het:
                </p>

                <p class="text-black text-2xl font-bold italic mb-6">
                    “Dit is wat ik wil!”
                </p>

                <p class="text-black text-lg leading-relaxed mb-8">
                    Ik vind het heerlijk om met honden te werken en ze de aandacht, beweging en
                    begeleiding te geven die bij hen past.
                </p>

                <p class="text-black text-xl font-bold mb-8">
                    En toen was het zover: Hondenuitlaatservice Paws of joy was geboren!
                </p>

                <a href="/contact" class="btn">
                    Neem contact op
                </a>
            </div>
        </div>

    </main>
@endsection
