@extends('layouts.app')

@section('title', 'Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        <div class="relative h-80 md:h-100">
            <img src="{{ asset('images/roedel-2.jpg') }}" alt="Honden in een veld aan het rennen"
                class="w-full h-full object-cover mx-auto rounded shadow-lg">

            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/20">
                <h1 class="text-cream font-bold text-2xl md:text-4xl text-center p-4 drop-shadow-lg">
                    Samen op pad, met plezier.
                </h1>
                <p class="text-cream font-normal text-lg text-center p-4 max-w-2xl drop-shadow">
                    Bij Paws of joy krijgt jouw hond de aandacht, beweging en vrijheid die hij verdient.
                    Van fijne wandelingen tot speuractiviteiten: plezier staat voorop.
                </p>

                <a href="/contact"
                    class="bg-brown text-cream font-bold py-2 px-4 rounded-lg
                                   hover:bg-yellow hover:text-black
                               transition-all duration-200 hover:scale-105 shadow-md flex items-center justify-center">

                    Neem contact op

                </a>
            </div>
        </div>

        <div id="Services" class="bg-cream px-4 md:px-6 py-12 md:py-16">
            <h3 class="text-brown font-bold text-2xl md:text-4xl text-center mb-8">Elke hond verdient zijn eigen
                moment
                van plezier.</h3>
            <p class="text-brown font-normal text-lg text-center p-4 max-w-2xl mx-auto pb-10">Bij Paws of joy
                staat
                het
                welzijn en plezier van jouw hond voorop. Ik bied persoonlijke begeleiding en activiteiten die
                passen
                bij
                iedere hond. Van een heerlijke wandeling tot het ontdekken van natuurlijk speurtalent: samen
                kijken
                we
                naar wat jouw hond nodig heeft en waar hij blij van wordt.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="card">
                    <img src="{{ asset('images/roedel-1.jpg') }}" alt="Honden in een veld aan het rennen"
                        class="w-full h-56 object-cover">
                    <div class="card-content">
                        <h4 class="text-brown text-2xl font-bold mb-3">Wandelingen</h4>
                        <p class="text-brown mb-6">Tijdens mijn wandelingen krijgt jouw hond volop beweging,
                            aandacht en
                            ruimte om lekker hond te zijn. Ik stem de wandeling af op wat jouw hond nodig heeft
                            en
                            zorg
                            voor een fijne, veilige ervaring.</p>
                        <a href="/tarifs" class="btn">Bekijk
                            tarieven</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('images/trackingLesson.jpeg') }}" alt="Honden aan het speuren in het bos"
                        class="w-full h-56 object-cover">
                    <div class="card-content">
                        <h4 class="text-brown text-2xl font-bold mb-3">Speurlessen</h4>
                        <p class="text-brown mb-6">Tijdens mijn speurlessen leert jouw hond op een leuke manier
                            zijn
                            natuurlijke neus te gebruiken. Ik begeleid jullie stap voor stap en pas de
                            oefeningen
                            aan op
                            het niveau van jouw hond.</p>
                        <a href="/trackingLessons" class="btn">Neem
                            contact op voor een les</a>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('images/ginEnMil.jpeg') }}" alt="Honden in een veld aan het rennen"
                        class="w-full h-56 object-cover">
                    <div class="card-content">
                        <h4 class="text-brown text-2xl font-bold mb-3">Speurhonden</h4>
                        <p class="text-brown mb-6">Met mijn speurhonden help ik bij het terugvinden van vermiste
                            honden.
                            Door hun goede neus en mijn ervaring kunnen zij gericht worden ingezet wanneer een
                            hond
                            vermist raakt.</p>
                        <a href="/tracking" class="btn">Bekijk
                            onze speurhonden</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
