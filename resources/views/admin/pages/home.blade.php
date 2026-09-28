@extends('layouts.app')

@section('title', 'Home bewerken | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        <section class="max-w-3xl mx-auto px-6 pt-16 pb-16">

            <div class="mb-8">

                <a href="{{ route('admin.pages.index') }}" class="text-brown font-bold hover:text-yellow transition-colors">
                    ← Terug naar pagina's
                </a>

            </div>


            <div class="card">

                <div class="card-content">

                    <h1 class="text-4xl font-bold italic text-green mb-3">
                        Home bewerken
                    </h1>

                    <p class="text-brown leading-relaxed mb-8">
                        Pas hieronder de teksten van de homepagina aan.
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


                    <form method="POST" action="{{ route('admin.pages.home.update') }}" class="space-y-10">

                        @csrf
                        @method('PUT')


                        {{-- Hero --}}
                        <div>

                            <h2 class="text-2xl font-bold text-brown mb-4">
                                Hero
                            </h2>

                            <div class="space-y-4">

                                <div>
                                    <label for="hero_title" class="block text-brown font-bold mb-2">
                                        Titel
                                    </label>

                                    <input type="text" id="hero_title" name="hero_title"
                                        value="{{ old('hero_title', $contents->get('hero_title')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>


                                <div>
                                    <label for="hero_text" class="block text-brown font-bold mb-2">
                                        Tekst
                                    </label>

                                    <textarea id="hero_text" name="hero_text" rows="5" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('hero_text', $contents->get('hero_text')?->content) }}</textarea>
                                </div>


                                <div>
                                    <label for="hero_button" class="block text-brown font-bold mb-2">
                                        Knoptekst
                                    </label>

                                    <input type="text" id="hero_button" name="hero_button"
                                        value="{{ old('hero_button', $contents->get('hero_button')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                            </div>

                        </div>


                        {{-- Diensten --}}
                        <div>

                            <h2 class="text-2xl font-bold text-brown mb-4">
                                Diensten
                            </h2>

                            <div class="space-y-4">

                                <div>
                                    <label for="services_title" class="block text-brown font-bold mb-2">
                                        Titel
                                    </label>

                                    <input type="text" id="services_title" name="services_title"
                                        value="{{ old('services_title', $contents->get('services_title')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>


                                <div>
                                    <label for="services_text" class="block text-brown font-bold mb-2">
                                        Tekst
                                    </label>

                                    <textarea id="services_text" name="services_text" rows="6" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('services_text', $contents->get('services_text')?->content) }}</textarea>
                                </div>

                            </div>

                        </div>


                        {{-- Wandelingen --}}
                        <div>

                            <h2 class="text-2xl font-bold text-brown mb-4">
                                Wandelingen
                            </h2>

                            <div class="space-y-4">

                                <div>
                                    <label for="walk_title" class="block text-brown font-bold mb-2">
                                        Titel
                                    </label>

                                    <input type="text" id="walk_title" name="walk_title"
                                        value="{{ old('walk_title', $contents->get('walk_title')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>


                                <div>
                                    <label for="walk_text" class="block text-brown font-bold mb-2">
                                        Tekst
                                    </label>

                                    <textarea id="walk_text" name="walk_text" rows="6" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('walk_text', $contents->get('walk_text')?->content) }}</textarea>
                                </div>


                                <div>
                                    <label for="walk_button" class="block text-brown font-bold mb-2">
                                        Knoptekst
                                    </label>

                                    <input type="text" id="walk_button" name="walk_button"
                                        value="{{ old('walk_button', $contents->get('walk_button')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                            </div>

                        </div>


                        {{-- Speurlessen --}}
                        <div>

                            <h2 class="text-2xl font-bold text-brown mb-4">
                                Speurlessen
                            </h2>

                            <div class="space-y-4">

                                <div>
                                    <label for="lesson_title" class="block text-brown font-bold mb-2">
                                        Titel
                                    </label>

                                    <input type="text" id="lesson_title" name="lesson_title"
                                        value="{{ old('lesson_title', $contents->get('lesson_title')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>


                                <div>
                                    <label for="lesson_text" class="block text-brown font-bold mb-2">
                                        Tekst
                                    </label>

                                    <textarea id="lesson_text" name="lesson_text" rows="6" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('lesson_text', $contents->get('lesson_text')?->content) }}</textarea>
                                </div>


                                <div>
                                    <label for="lesson_button" class="block text-brown font-bold mb-2">
                                        Knoptekst
                                    </label>

                                    <input type="text" id="lesson_button" name="lesson_button"
                                        value="{{ old('lesson_button', $contents->get('lesson_button')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                            </div>

                        </div>


                        {{-- Speurhonden --}}
                        <div>

                            <h2 class="text-2xl font-bold text-brown mb-4">
                                Speurhonden
                            </h2>

                            <div class="space-y-4">

                                <div>
                                    <label for="tracking_title" class="block text-brown font-bold mb-2">
                                        Titel
                                    </label>

                                    <input type="text" id="tracking_title" name="tracking_title"
                                        value="{{ old('tracking_title', $contents->get('tracking_title')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>


                                <div>
                                    <label for="tracking_text" class="block text-brown font-bold mb-2">
                                        Tekst
                                    </label>

                                    <textarea id="tracking_text" name="tracking_text" rows="6" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('tracking_text', $contents->get('tracking_text')?->content) }}</textarea>
                                </div>


                                <div>
                                    <label for="tracking_button" class="block text-brown font-bold mb-2">
                                        Knoptekst
                                    </label>

                                    <input type="text" id="tracking_button" name="tracking_button"
                                        value="{{ old('tracking_button', $contents->get('tracking_button')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                            </div>

                        </div>


                        {{-- Opslaan --}}
                        <div class="pt-4">

                            <button type="submit" class="btn w-full">
                                Wijzigingen opslaan
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </section>

    </main>

@endsection
