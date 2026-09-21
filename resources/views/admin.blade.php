@extends('layouts.app')

@section('title', 'Admin | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        {{-- Header --}}
        <section class="max-w-6xl mx-auto px-6 pt-16 pb-10">

            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                <div class="text-center md:text-left">

                    <h1 class="text-4xl md:text-5xl font-bold italic text-green mb-4">
                        Admin
                    </h1>

                    <p class="text-lg text-brown leading-relaxed">
                        Beheer hier de inhoud van Paws of joy.
                    </p>

                </div>


                {{-- Uitloggen --}}
                <form method="POST" action="/logout">
                    @csrf

                    <button type="submit" class="btn">
                        Uitloggen
                    </button>
                </form>

            </div>

        </section>


        {{-- Admin opties --}}
        <section class="max-w-6xl mx-auto px-6 pb-16">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">

                {{-- Tarieven --}}
                <article class="card reveal">

                    <div class="card-content">

                        <h2 class="text-2xl font-bold text-brown mb-3">
                            Tarieven
                        </h2>

                        <p class="text-brown leading-relaxed mb-6">
                            Bekijk en pas de tarieven van Paws of joy aan.
                            Je kunt hier bijvoorbeeld de prijzen van de
                            proefperiode en de 10-strippenkaart wijzigen.
                        </p>

                        <a href="/admin/tarifs" class="btn">
                            Tarieven beheren
                        </a>

                    </div>

                </article>


                {{-- Contactberichten --}}
                <article class="card reveal">

                    <div class="card-content">

                        <h2 class="text-2xl font-bold text-brown mb-3">
                            Contactberichten
                        </h2>

                        <p class="text-brown leading-relaxed mb-6">
                            Bekijk de berichten die via het contactformulier
                            op de website zijn binnengekomen.
                        </p>

                        <a href="/admin/contact-messages" class="btn">
                            Berichten bekijken
                        </a>

                    </div>

                </article>

            </div>

        </section>

    </main>

@endsection
