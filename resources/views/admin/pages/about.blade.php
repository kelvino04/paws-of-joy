@extends('layouts.app')

@section('title', 'Wie ben ik bewerken | Paws of joy')

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
                        Wie ben ik bewerken
                    </h1>
                    <p class="text-brown leading-relaxed mb-8">
                        Pas alle teksten van de over-mij pagina aan.
                    </p>

                    @if (session('success'))
                        <div class="bg-green/20 border border-green text-brown rounded-lg p-4 mb-6">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-300 text-red-700 rounded-lg p-4 mb-6">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.pages.about.update') }}" class="space-y-10">
                        @csrf
                        @method('PUT')

                        {{-- Intro --}}
                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Introductie</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-brown font-bold mb-2">Titel</label>
                                    <input type="text" name="about_title"
                                        value="{{ old('about_title', $contents->get('about_title')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tekst</label>
                                    <textarea name="about_intro" rows="5" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('about_intro', $contents->get('about_intro')?->content) }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Liefde --}}
                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Liefde voor dieren</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-brown font-bold mb-2">Titel</label>
                                    <input type="text" name="about_love_title"
                                        value="{{ old('about_love_title', $contents->get('about_love_title')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tekst</label>
                                    <textarea name="about_love_text" rows="6" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('about_love_text', $contents->get('about_love_text')?->content) }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Ervaring --}}
                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Ervaring met honden</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-brown font-bold mb-2">Titel</label>
                                    <input type="text" name="about_experience_title"
                                        value="{{ old('about_experience_title', $contents->get('about_experience_title')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tekst</label>
                                    <textarea name="about_experience_text" rows="5" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('about_experience_text', $contents->get('about_experience_text')?->content) }}</textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Opleiding + tags --}}
                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Opleiding & kennis</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-brown font-bold mb-2">Titel</label>
                                    <input type="text" name="about_education_title"
                                        value="{{ old('about_education_title', $contents->get('about_education_title')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tekst</label>
                                    <textarea name="about_education_text" rows="5" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('about_education_text', $contents->get('about_education_text')?->content) }}</textarea>
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tag 1</label>
                                    <input type="text" name="about_tag_1"
                                        value="{{ old('about_tag_1', $contents->get('about_tag_1')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green"
                                        placeholder="🐾 Hondengedrag">
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tag 2</label>
                                    <input type="text" name="about_tag_2"
                                        value="{{ old('about_tag_2', $contents->get('about_tag_2')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green"
                                        placeholder="🩺 Veterinaire ondersteuning">
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tag 3</label>
                                    <input type="text" name="about_tag_3"
                                        value="{{ old('about_tag_3', $contents->get('about_tag_3')?->content) }}" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green"
                                        placeholder="🏃 Behendigheid">
                                </div>
                            </div>
                        </div>

                        {{-- Waarom --}}
                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Waarom Paws of joy?</h2>
                            <div class="space-y-4">
                                <div>
                                    <label class="block text-brown font-bold mb-2">Titel</label>
                                    <input type="text" name="about_why_title"
                                        value="{{ old('about_why_title', $contents->get('about_why_title')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Tekst</label>
                                    <textarea name="about_why_text" rows="6" required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">{{ old('about_why_text', $contents->get('about_why_text')?->content) }}</textarea>
                                </div>
                                <div>
                                    <label class="block text-brown font-bold mb-2">Knoptekst</label>
                                    <input type="text" name="about_button"
                                        value="{{ old('about_button', $contents->get('about_button')?->content) }}"
                                        required
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="btn w-full">Wijzigingen opslaan</button>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </main>

@endsection
