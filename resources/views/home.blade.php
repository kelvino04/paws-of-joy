@extends('layouts.app')

@section('title', 'Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        {{-- Hero --}}
        <div class="relative h-80 md:h-100">

            <img src="{{ asset('images/roedel-2.jpg') }}" alt="Honden in een veld aan het rennen"
                class="w-full h-full object-cover mx-auto rounded shadow-lg">

            <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/20">

                <h1 class="text-cream font-bold text-2xl md:text-4xl text-center p-4 drop-shadow-lg">
                    {{ $contents->get('hero_title')?->content }}
                </h1>

                <p class="text-cream font-normal text-lg text-center p-4 max-w-2xl drop-shadow">
                    {{ $contents->get('hero_text')?->content }}
                </p>

                <a href="/contact"
                    class="bg-brown text-cream font-bold py-2 px-4 rounded-lg
                           hover:bg-yellow hover:text-black
                           transition-all duration-200 hover:scale-105 shadow-md
                           flex items-center justify-center">
                    {{ $contents->get('hero_button')?->content }}
                </a>

            </div>

        </div>


        {{-- Diensten --}}
        <div id="Services" class="bg-cream px-4 md:px-6 py-12 md:py-16">

            <h3 class="text-brown font-bold text-2xl md:text-4xl text-center mb-8">
                {{ $contents->get('services_title')?->content }}
            </h3>

            <p class="text-brown font-normal text-lg text-center p-4 max-w-2xl mx-auto pb-10">
                {{ $contents->get('services_text')?->content }}
            </p>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">


                {{-- Wandelingen --}}
                <div class="card reveal">

                    <img src="{{ asset('images/roedel-1.jpg') }}" alt="Honden in een veld aan het rennen"
                        class="w-full h-56 object-cover">

                    <div class="card-content">

                        <h4 class="text-brown text-2xl font-bold mb-3">
                            {{ $contents->get('walk_title')?->content }}
                        </h4>

                        <p class="text-brown mb-6">
                            {{ $contents->get('walk_text')?->content }}
                        </p>

                        <a href="/tarifs" class="btn">
                            {{ $contents->get('walk_button')?->content }}
                        </a>

                    </div>

                </div>


                {{-- Speurlessen --}}
                <div class="card reveal">

                    <img src="{{ asset('images/trackingLesson.jpeg') }}" alt="Honden aan het speuren in het bos"
                        class="w-full h-56 object-cover">

                    <div class="card-content">

                        <h4 class="text-brown text-2xl font-bold mb-3">
                            {{ $contents->get('lesson_title')?->content }}
                        </h4>

                        <p class="text-brown mb-6">
                            {{ $contents->get('lesson_text')?->content }}
                        </p>

                        <a href="/trackingLessons" class="btn">
                            {{ $contents->get('lesson_button')?->content }}
                        </a>

                    </div>

                </div>


                {{-- Speurhonden --}}
                <div class="card reveal">

                    <img src="{{ asset('images/ginEnMil.jpeg') }}" alt="Speurhonden in een veld"
                        class="w-full h-56 object-cover">

                    <div class="card-content">

                        <h4 class="text-brown text-2xl font-bold mb-3">
                            {{ $contents->get('tracking_title')?->content }}
                        </h4>

                        <p class="text-brown mb-6">
                            {{ $contents->get('tracking_text')?->content }}
                        </p>

                        <a href="/tracking" class="btn">
                            {{ $contents->get('tracking_button')?->content }}
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </main>

@endsection
