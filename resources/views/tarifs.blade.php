@extends('layouts.app')

@section('title', 'Tarieven | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        {{-- Intro --}}
        <section class="max-w-5xl mx-auto px-6 pt-16 pb-10 text-center">

            <h1 class="text-4xl md:text-5xl font-bold italic text-green mb-6">
                Tarieven
            </h1>

            <p class="max-w-2xl mx-auto text-lg leading-relaxed text-brown">
                Nieuwe klanten starten met een proefperiode van 4 wandelingen.
                Daarna werken we met een 10-strippenkaart.
            </p>

            {{-- CTA --}}
            <div class="flex justify-center mt-8">
                <a href="/contact" class="btn">
                    Neem contact op voor een intakegesprek
                </a>
            </div>

        </section>


        {{-- Tarieven --}}
        <section class="max-w-6xl mx-auto px-6 pb-10">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">

                @forelse ($prices as $price)

                    <article class="card reveal">

                        <div class="card-content">

                            <h2 class="text-brown text-2xl font-bold mb-3">
                                {{ $price->name }}
                            </h2>

                            @if ($price->description)
                                <p class="text-brown mb-6 leading-relaxed">
                                    {{ $price->description }}
                                </p>
                            @endif

                            <div class="mt-auto space-y-6">

                                {{-- Eerste hond --}}
                                <div>
                                    <p class="text-brown font-bold mb-1">
                                        Eerste hond per adres
                                    </p>

                                    <p class="text-green text-3xl font-bold">
                                        € {{ number_format($price->price, 2, ',', '.') }}
                                    </p>

                                    @if ($price->unit)
                                        <p class="text-brown mt-1">
                                            {{ $price->unit }}
                                        </p>
                                    @endif
                                </div>

                                {{-- Tweede / volgende hond --}}
                                @if ($price->second_dog_price)
                                    <div class="border-t border-brown/20 pt-5">

                                        <p class="text-brown font-bold mb-1">
                                            2e en volgende hond per adres
                                        </p>

                                        <p class="text-green text-3xl font-bold">
                                            € {{ number_format($price->second_dog_price, 2, ',', '.') }}
                                        </p>

                                        @if ($price->unit)
                                            <p class="text-brown mt-1">
                                                {{ $price->unit }}
                                            </p>
                                        @endif

                                    </div>
                                @endif

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="md:col-span-2 text-center py-12">
                        <p class="text-brown text-lg">
                            Er zijn momenteel geen tarieven beschikbaar.
                        </p>
                    </div>

                @endforelse

            </div>

        </section>


        {{-- Extra informatie --}}
        <section class="bg-cream border-t border-brown/20">

            <div class="max-w-4xl mx-auto px-6 py-12">

                <h2 class="text-3xl font-bold italic text-green text-center mb-8">
                    Goed om te weten
                </h2>

                <div class="space-y-6 text-lg leading-relaxed text-brown">

                    <div>
                        <h3 class="font-bold text-xl mb-2">
                            Proefperiode
                        </h3>

                        <p>
                            Nieuwe klanten starten met een proefperiode van
                            4 wandelingen. Daarna kun je gebruikmaken van
                            een 10-strippenkaart.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-bold text-xl mb-2">
                            10-strippenkaart
                        </h3>

                        <p>
                            De 10-strippenkaart is geldig voor 10 wandelingen.
                            Voor de 2e en volgende hond op hetzelfde adres
                            geldt een aangepast tarief.
                        </p>
                    </div>

                </div>

            </div>

        </section>

    </main>

@endsection
