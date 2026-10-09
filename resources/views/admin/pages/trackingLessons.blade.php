@extends('layouts.app')

@section('title', 'Speurlessen bewerken | Paws of joy')

@section('content')

    @php
        if (!function_exists('adminField')) {
            function adminField($contents, $name, $label, $type = 'text', $rows = 4)
            {
                $value = old($name, $contents->get($name)?->content);
                $class =
                    'w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green';
                $html = '<div><label class="block text-brown font-bold mb-2">' . e($label) . '</label>';
                if ($type === 'textarea') {
                    $html .=
                        '<textarea name="' .
                        e($name) .
                        '" rows="' .
                        $rows .
                        '" required class="' .
                        $class .
                        '">' .
                        e($value) .
                        '</textarea>';
                } else {
                    $html .=
                        '<input type="text" name="' .
                        e($name) .
                        '" value="' .
                        e($value) .
                        '" required class="' .
                        $class .
                        '">';
                }
                return $html . '</div>';
            }
        }
    @endphp

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
                        Speurlessen bewerken
                    </h1>
                    <p class="text-brown leading-relaxed mb-8">
                        Pas alle teksten van de speurlessen-pagina aan.
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

                    <form method="POST" action="{{ route('admin.pages.tracking-lessons.update') }}" class="space-y-12">
                        @csrf
                        @method('PUT')

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Hero</h2>
                            <div class="space-y-4">
                                {!! adminField($contents, 'lessons_hero_title', 'Titel') !!}
                                {!! adminField($contents, 'lessons_hero_subtitle', 'Ondertitel') !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Introductie</h2>
                            <div class="space-y-4">
                                {!! adminField($contents, 'lessons_intro_title', 'Titel') !!}
                                {!! adminField($contents, 'lessons_intro_text', 'Tekst', 'textarea', 6) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Wat leer je hond?</h2>
                            <div class="space-y-4">
                                {!! adminField($contents, 'lessons_learn_title', 'Sectietitel') !!}
                                {!! adminField($contents, 'lessons_learn_1_title', 'Kaart 1 – titel') !!}
                                {!! adminField($contents, 'lessons_learn_1_text', 'Kaart 1 – tekst', 'textarea', 3) !!}
                                {!! adminField($contents, 'lessons_learn_2_title', 'Kaart 2 – titel') !!}
                                {!! adminField($contents, 'lessons_learn_2_text', 'Kaart 2 – tekst', 'textarea', 3) !!}
                                {!! adminField($contents, 'lessons_learn_3_title', 'Kaart 3 – titel') !!}
                                {!! adminField($contents, 'lessons_learn_3_text', 'Kaart 3 – tekst', 'textarea', 3) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Voor wie</h2>
                            <div class="space-y-4">
                                {!! adminField($contents, 'lessons_for_who_title', 'Titel') !!}
                                {!! adminField($contents, 'lessons_for_who_text', 'Tekst', 'textarea', 4) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Hoe gaan de lessen?</h2>
                            <div class="space-y-4">
                                {!! adminField($contents, 'lessons_how_title', 'Sectietitel') !!}
                                {!! adminField($contents, 'lessons_how_1_title', 'Stap 1 – titel') !!}
                                {!! adminField($contents, 'lessons_how_1_text', 'Stap 1 – tekst', 'textarea', 2) !!}
                                {!! adminField($contents, 'lessons_how_2_title', 'Stap 2 – titel') !!}
                                {!! adminField($contents, 'lessons_how_2_text', 'Stap 2 – tekst', 'textarea', 2) !!}
                                {!! adminField($contents, 'lessons_how_3_title', 'Stap 3 – titel') !!}
                                {!! adminField($contents, 'lessons_how_3_text', 'Stap 3 – tekst', 'textarea', 2) !!}
                                {!! adminField($contents, 'lessons_how_4_title', 'Stap 4 – titel') !!}
                                {!! adminField($contents, 'lessons_how_4_text', 'Stap 4 – tekst', 'textarea', 2) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Praktische informatie</h2>
                            <div class="space-y-4">
                                {!! adminField($contents, 'lessons_practical_title', 'Sectietitel') !!}
                                {!! adminField($contents, 'lessons_bring_title', 'Meebrengen – titel') !!}
                                {!! adminField($contents, 'lessons_bring_1', 'Meebrengen 1') !!}
                                {!! adminField($contents, 'lessons_bring_2', 'Meebrengen 2') !!}
                                {!! adminField($contents, 'lessons_bring_3', 'Meebrengen 3') !!}
                                {!! adminField($contents, 'lessons_bring_4', 'Meebrengen 4') !!}
                                {!! adminField($contents, 'lessons_bring_5', 'Meebrengen 5') !!}
                                {!! adminField($contents, 'lessons_forms_title', 'Vormen – titel') !!}
                                {!! adminField($contents, 'lessons_forms_1', 'Vorm 1') !!}
                                {!! adminField($contents, 'lessons_forms_2', 'Vorm 2') !!}
                                {!! adminField($contents, 'lessons_forms_3', 'Vorm 3') !!}
                                {!! adminField($contents, 'lessons_forms_4', 'Vorm 4') !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Call to action</h2>
                            <div class="space-y-4">
                                {!! adminField($contents, 'lessons_cta_title', 'Titel') !!}
                                {!! adminField($contents, 'lessons_cta_text', 'Tekst', 'textarea', 3) !!}
                                {!! adminField($contents, 'lessons_cta_button_1', 'Knop 1') !!}
                                {!! adminField($contents, 'lessons_cta_button_2', 'Knop 2') !!}
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
