@extends('layouts.app')

@section('title', 'Tarief toevoegen | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        <section class="max-w-3xl mx-auto px-6 pt-16 pb-16">

            <div class="mb-8">

                <a href="{{ route('admin.tarifs.index') }}" class="text-brown font-bold hover:text-yellow transition-colors">
                    ← Terug naar tarieven
                </a>

            </div>


            <div class="card">

                <div class="card-content">

                    <h1 class="text-4xl font-bold italic text-green mb-3">
                        Tarief toevoegen
                    </h1>

                    <p class="text-brown leading-relaxed mb-8">
                        Voeg een nieuw tarief toe aan Paws of joy.
                    </p>


                    @if ($errors->any())

                        <div class="bg-red-100 border border-red-300 text-red-700 rounded-lg p-4 mb-6">

                            <ul class="list-disc list-inside">

                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <form method="POST" action="{{ route('admin.tarifs.store') }}" class="space-y-6">

                        @csrf


                        {{-- Naam --}}
                        <div>

                            <label for="name" class="block text-brown font-bold mb-2">
                                Naam
                            </label>

                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">

                        </div>


                        {{-- Omschrijving --}}
                        <div>

                            <label for="description" class="block text-brown font-bold mb-2">
                                Omschrijving
                            </label>

                            <textarea id="description" name="description" rows="4"
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('description') }}</textarea>

                        </div>


                        {{-- Eerste hond --}}
                        <div>

                            <label for="price" class="block text-brown font-bold mb-2">
                                Prijs eerste hond
                            </label>

                            <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01"
                                min="0" required
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">

                        </div>


                        {{-- Tweede hond --}}
                        <div>

                            <label for="second_dog_price" class="block text-brown font-bold mb-2">
                                Prijs 2e en volgende hond
                            </label>

                            <input type="number" id="second_dog_price" name="second_dog_price"
                                value="{{ old('second_dog_price') }}" step="0.01" min="0"
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">

                        </div>


                        {{-- Eenheid --}}
                        <div>

                            <label for="unit" class="block text-brown font-bold mb-2">
                                Eenheid
                            </label>

                            <input type="text" id="unit" name="unit" value="{{ old('unit') }}"
                                placeholder="Bijvoorbeeld: per wandeling"
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">

                        </div>


                        {{-- Sorteervolgorde --}}
                        <div>

                            <label for="sort_order" class="block text-brown font-bold mb-2">
                                Sorteervolgorde
                            </label>

                            <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', 0) }}"
                                min="0" required
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">

                            <p class="text-sm text-brown mt-2">
                                Een lager nummer wordt eerder weergegeven.
                            </p>

                        </div>


                        {{-- Actief --}}
                        <div>

                            <label class="flex items-center gap-3 cursor-pointer">

                                <input type="checkbox" name="active" value="1"
                                    {{ old('active', true) ? 'checked' : '' }} class="w-5 h-5">

                                <span class="text-brown font-bold">
                                    Dit tarief actief maken
                                </span>

                            </label>

                        </div>


                        {{-- Knoppen --}}
                        <div class="flex flex-col sm:flex-row gap-4 pt-4">

                            <a href="{{ route('admin.tarifs.index') }}" class="btn flex-1">
                                Annuleren
                            </a>

                            <button type="submit" class="btn flex-1">
                                Tarief toevoegen
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </section>

    </main>

@endsection
