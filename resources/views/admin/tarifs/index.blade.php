@extends('layouts.app')

@section('title', 'Tarieven beheren | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        <section class="max-w-6xl mx-auto px-6 pt-16">

            <div class="mb-8">

                <a href="/admin" class="text-brown font-bold hover:text-yellow transition-colors">
                    ← Terug naar admin
                </a>

            </div>


            <div class="text-center mb-10">

                <div>
                    <h1 class="text-4xl md:text-5xl font-bold italic text-green mb-4">
                        Tarieven beheren
                    </h1>

                    <p class="text-lg text-brown leading-relaxed">
                        Bekijk en pas hier de tarieven van Paws of joy aan.
                    </p>
                </div>

                <a href="{{ route('admin.tarifs.create') }}"
                    class="hover:scale-105 transition-transform inline-block mt-6 bg-brown text-white font-bold py-3 px-6 rounded-lg shadow-md hover:bg-yellow hover:text-black">
                    Tarief toevoegen
                </a>

            </div>

        </section>


        <section class="max-w-6xl mx-auto px-6 pb-16">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8">

                @forelse ($prices as $price)
                    <article class="card">

                        <div class="card-content">

                            <div class="flex items-start justify-between gap-4 mb-4">

                                <h2 class="text-2xl font-bold text-brown">
                                    {{ $price->name }}
                                </h2>

                                @if ($price->active)
                                    <span class="bg-green text-white px-3 py-1 rounded-full text-sm font-bold">
                                        Actief
                                    </span>
                                @else
                                    <span class="bg-gray-400 text-white px-3 py-1 rounded-full text-sm font-bold">
                                        Inactief
                                    </span>
                                @endif

                            </div>


                            @if ($price->description)
                                <p class="text-brown leading-relaxed mb-6">
                                    {{ $price->description }}
                                </p>
                            @endif


                            <div class="space-y-4 mb-6">

                                <div>
                                    <p class="font-bold text-brown">
                                        Eerste hond
                                    </p>

                                    <p class="text-green text-2xl font-bold">
                                        € {{ number_format($price->price, 2, ',', '.') }}
                                    </p>
                                </div>


                                @if ($price->second_dog_price !== null)
                                    <div>
                                        <p class="font-bold text-brown">
                                            2e en volgende hond
                                        </p>

                                        <p class="text-green text-2xl font-bold">
                                            € {{ number_format($price->second_dog_price, 2, ',', '.') }}
                                        </p>
                                    </div>
                                @endif


                                @if ($price->unit)
                                    <div>
                                        <p class="font-bold text-brown">
                                            Eenheid
                                        </p>

                                        <p class="text-brown">
                                            {{ $price->unit }}
                                        </p>
                                    </div>
                                @endif

                            </div>


                            <div class="flex gap-3 mt-auto">

                                <a href="{{ route('admin.tarifs.edit', $price) }}" class="btn flex-1">
                                    Bewerken
                                </a>


                                <form method="POST" action="{{ route('admin.tarifs.destroy', $price) }}" class="flex-1"
                                    onsubmit="return confirm('Weet je zeker dat je dit tarief wilt verwijderen?');">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="w-full bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700 transition-all duration-200 hover:scale-105 shadow-md">
                                        Verwijderen
                                    </button>

                                </form>

                            </div>

                        </div>

                    </article>

                @empty

                    <div class="md:col-span-2 text-center py-12">

                        <p class="text-brown text-lg mb-6">
                            Er zijn nog geen tarieven toegevoegd.
                        </p>

                        <a href="{{ route('admin.tarifs.create') }}" class="btn">
                            Eerste tarief toevoegen
                        </a>

                    </div>
                @endforelse

            </div>

        </section>

    </main>

@endsection
