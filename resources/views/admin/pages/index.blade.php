@extends('layouts.app')

@section('title', 'Pagina\'s beheren | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        <section class="max-w-6xl mx-auto px-6 pt-16 pb-16">

            <div class="mb-8">

                <a href="/admin" class="text-brown font-bold hover:text-yellow transition-colors">
                    ← Terug naar admin
                </a>

            </div>


            <div class="text-center mb-10">

                <h1 class="text-4xl md:text-5xl font-bold italic text-green mb-4">
                    Pagina's beheren
                </h1>

                <p class="text-lg text-brown leading-relaxed">
                    Pas hier de teksten van de website aan.
                </p>

            </div>

            <article class="card">
                <div class="card-content">
                    <h2 class="text-2xl font-bold text-brown mb-3">Home</h2>
                    <p class="text-brown leading-relaxed mb-6">
                        Pas de teksten van de homepagina aan.
                    </p>
                    <a href="{{ route('admin.pages.home.edit') }}" class="btn">
                        Home bewerken
                    </a>
                </div>
            </article>

            <article class="card">
                <div class="card-content">
                    <h2 class="text-2xl font-bold text-brown mb-3">Wie ben ik</h2>
                    <p class="text-brown leading-relaxed mb-6">
                        Pas de teksten van de over-mij pagina aan.
                    </p>
                    <a href="{{ route('admin.pages.about.edit') }}" class="btn">
                        Wie ben ik bewerken
                    </a>
                </div>
            </article>

            <article class="card">
                <div class="card-content">
                    <h2 class="text-2xl font-bold text-brown mb-3">Speurlessen</h2>
                    <p class="text-brown leading-relaxed mb-6">
                        Pas de teksten van de speurlessen-pagina aan.
                    </p>
                    <a href="{{ route('admin.pages.tracking-lessons.edit') }}" class="btn">
                        Speurlessen bewerken
                    </a>
                </div>
            </article>

            <article class="card">
                <div class="card-content">
                    <h2 class="text-2xl font-bold text-brown mb-3">Speurhonden</h2>
                    <p class="text-brown leading-relaxed mb-6">
                        Pas de teksten van de speurhonden-pagina aan.
                    </p>
                    <a href="{{ route('admin.pages.tracking.edit') }}" class="btn">
                        Speurhonden bewerken
                    </a>
                </div>
            </article>

            </div>

        </section>

    </main>

@endsection
