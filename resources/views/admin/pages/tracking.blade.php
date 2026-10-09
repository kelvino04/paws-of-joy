@extends('layouts.app')

@section('title', 'Speurhonden bewerken | Paws of joy')

@section('content')
    @php
        function field($contents, $name, $label, $type = 'text', $rows = 4)
        {
            $value = old($name, $contents->get($name)?->content);
            $class =
                'w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green';
            $html =
                '<div>
<label class="block text-brown font-bold mb-2">' .
                $label .
                '</label>';
            if ($type === 'textarea') {
                $html .=
                    '<textarea name="' .
                    $name .
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
                    $name .
                    '" value="' .
                    e($value) .
                    '" required class="' .
                    $class .
                    '">';
            }
            return $html . '</div>';
        }
    @endphp

    <main class="bg-cream min-h-screen">
        <section class="max-w-3xl mx-auto px-6 pt-16 pb-16">
            <div class="mb-8">
                <a href="{{ route('admin.pages.index') }}" class="text-brown font-bold hover:text-yellow transition-colors">←
                    Terug naar pagina's</a>
            </div>

            <div class="card">
                <div class="card-content">
                    <h1 class="text-4xl font-bold italic text-green mb-3">Speurhonden bewerken</h1>
                    <p class="text-brown leading-relaxed mb-8">Pas alle teksten van de speurhonden-pagina aan.</p>

                    @if (session('success'))
                        <div class="bg-green/20 border border-green text-brown rounded-lg p-4 mb-6">{{ session('success') }}
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

                    <form method="POST" action="{{ route('admin.pages.tracking.update') }}" class="space-y-12">
                        @csrf
                        @method('PUT')

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Hero</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_hero_title', 'Titel') !!}
                                {!! field($contents, 'tracking_hero_subtitle', 'Ondertitel') !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Wat is speuren?</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_intro_title', 'Titel') !!}
                                {!! field($contents, 'tracking_intro_text', 'Tekst', 'textarea', 6) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Paws of Borders</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_pob_title', 'Titel') !!}
                                {!! field($contents, 'tracking_pob_facebook', 'Facebook linktekst') !!}
                                {!! field($contents, 'tracking_pob_text', 'Tekst', 'textarea', 8) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Wanneer een speurhond inzetten?</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_when_title', 'Titel') !!}
                                {!! field($contents, 'tracking_when_text', 'Tekst', 'textarea', 4) !!}
                                {!! field($contents, 'tracking_when_1', 'Punt 1') !!}
                                {!! field($contents, 'tracking_when_2', 'Punt 2') !!}
                                {!! field($contents, 'tracking_when_3', 'Punt 3') !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Speuren of trailen?</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_vs_title', 'Sectietitel') !!}
                                {!! field($contents, 'tracking_speuren_title', 'Speuren – titel') !!}
                                {!! field($contents, 'tracking_speuren_text', 'Speuren – tekst', 'textarea', 3) !!}
                                {!! field($contents, 'tracking_speuren_1', 'Speuren – punt 1') !!}
                                {!! field($contents, 'tracking_speuren_2', 'Speuren – punt 2') !!}
                                {!! field($contents, 'tracking_speuren_3', 'Speuren – punt 3') !!}
                                {!! field($contents, 'tracking_trailen_title', 'Trailen – titel') !!}
                                {!! field($contents, 'tracking_trailen_text', 'Trailen – tekst', 'textarea', 3) !!}
                                {!! field($contents, 'tracking_trailen_1', 'Trailen – punt 1') !!}
                                {!! field($contents, 'tracking_trailen_2', 'Trailen – punt 2') !!}
                                {!! field($contents, 'tracking_trailen_3', 'Trailen – punt 3') !!}
                                {!! field($contents, 'tracking_vs_conclusion', 'Conclusie', 'textarea', 2) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Geurbron meegeven</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_scent_title', 'Sectietitel') !!}
                                {!! field($contents, 'tracking_scent_what_title', 'Wat bruikbaar – titel') !!}
                                {!! field($contents, 'tracking_scent_what_text', 'Wat bruikbaar – tekst', 'textarea', 4) !!}
                                {!! field($contents, 'tracking_scent_pack_title', 'Verpakken – titel') !!}
                                {!! field($contents, 'tracking_scent_pack_intro', 'Verpakken – intro', 'textarea', 2) !!}
                                {!! field($contents, 'tracking_scent_pack_1', 'Stap 1') !!}
                                {!! field($contents, 'tracking_scent_pack_2', 'Stap 2') !!}
                                {!! field($contents, 'tracking_scent_pack_3', 'Stap 3') !!}
                                {!! field($contents, 'tracking_scent_pack_4', 'Stap 4') !!}
                                {!! field($contents, 'tracking_scent_pack_tip', 'Tip', 'textarea', 2) !!}
                                {!! field($contents, 'tracking_scent_multi_title', 'Meerdere honden – titel') !!}
                                {!! field($contents, 'tracking_scent_multi_text', 'Meerdere honden – tekst', 'textarea', 4) !!}
                                {!! field($contents, 'tracking_scent_tip', 'Bewaartip', 'textarea', 3) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Hoe werkt een inzet?</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_how_title', 'Sectietitel') !!}
                                {!! field($contents, 'tracking_how_1_title', 'Kaart 1 – titel') !!}
                                {!! field($contents, 'tracking_how_1_text', 'Kaart 1 – tekst', 'textarea', 3) !!}
                                {!! field($contents, 'tracking_how_2_title', 'Kaart 2 – titel') !!}
                                {!! field($contents, 'tracking_how_2_text', 'Kaart 2 – tekst', 'textarea', 3) !!}
                                {!! field($contents, 'tracking_how_3_title', 'Kaart 3 – titel') !!}
                                {!! field($contents, 'tracking_how_3_text', 'Kaart 3 – tekst', 'textarea', 3) !!}
                                {!! field($contents, 'tracking_how_note', 'Noot onderaan', 'textarea', 2) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Na het speuren</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_after_title', 'Titel') !!}
                                {!! field($contents, 'tracking_after_text', 'Tekst', 'textarea', 6) !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Voordelen</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_benefits_title', 'Sectietitel') !!}
                                {!! field($contents, 'tracking_benefit_1_title', 'Voordeel 1 – titel') !!}
                                {!! field($contents, 'tracking_benefit_1_text', 'Voordeel 1 – tekst') !!}
                                {!! field($contents, 'tracking_benefit_2_title', 'Voordeel 2 – titel') !!}
                                {!! field($contents, 'tracking_benefit_2_text', 'Voordeel 2 – tekst') !!}
                                {!! field($contents, 'tracking_benefit_3_title', 'Voordeel 3 – titel') !!}
                                {!! field($contents, 'tracking_benefit_3_text', 'Voordeel 3 – tekst') !!}
                                {!! field($contents, 'tracking_benefit_4_title', 'Voordeel 4 – titel') !!}
                                {!! field($contents, 'tracking_benefit_4_text', 'Voordeel 4 – tekst') !!}
                            </div>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold text-brown mb-4">Call to action</h2>
                            <div class="space-y-4">
                                {!! field($contents, 'tracking_cta_title', 'Titel') !!}
                                {!! field($contents, 'tracking_cta_text', 'Tekst', 'textarea', 3) !!}
                                {!! field($contents, 'tracking_cta_button_1', 'Knop 1') !!}
                                {!! field($contents, 'tracking_cta_button_2', 'Knop 2') !!}
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
