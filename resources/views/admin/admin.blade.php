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

                {{-- Pagina's --}}
                <article class="card reveal">

                    <div class="card-content">

                        <h2 class="text-2xl font-bold text-brown mb-3">
                            Pagina's
                        </h2>

                        <p class="text-brown leading-relaxed mb-6">
                            Pas de teksten van de website aan.
                            Je kunt hier bijvoorbeeld de teksten van de homepagina
                            en de contactpagina wijzigen.
                        </p>

                        <a href="/admin/pages" class="btn">
                            Pagina's beheren
                        </a>

                    </div>

                </article>

                {{-- Afbeeldingen --}}
                <article class="card reveal">
                    <div class="card-content">
                        <h2 class="text-2xl font-bold text-brown mb-3">
                            Afbeeldingen
                        </h2>

                        <p class="text-brown leading-relaxed mb-6">
                            Upload en vervang de foto’s op de homepage
                            (hero, wandelingen, speurlessen en speurhonden).
                        </p>

                        <a href="{{ route('admin.images.edit') }}" class="btn">
                            Afbeeldingen beheren
                        </a>
                    </div>
                </article>

                {{-- Contactberichten --}}
                <article class="card reveal">
                    <div class="card-content">

                        <h2 class="text-2xl font-bold text-brown mb-3">
                            Contactberichten
                        </h2>

                        <p class="text-brown leading-relaxed mb-4">
                            Bekijk de berichten die via het contactformulier zijn ontvangen.
                        </p>

                        <div class="mb-6">

                            @if ($unreadMessages > 0)
                                <p class="text-green font-bold text-lg">
                                    {{ $unreadMessages }}
                                    {{ $unreadMessages === 1 ? 'ongelezen bericht' : 'ongelezen berichten' }}
                                </p>
                            @else
                                <p class="text-brown font-bold">
                                    Geen ongelezen berichten
                                </p>
                            @endif

                        </div>

                        <a href="{{ route('admin.contact-messages.index') }}" class="btn">
                            Bekijk contactberichten
                        </a>

                    </div>

                </article>

            </div>

        </section>

    </main>

@endsection
