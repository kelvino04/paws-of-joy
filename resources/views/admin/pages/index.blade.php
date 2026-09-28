@extends('layouts.app')

@section('title', 'Pagina's beheren | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        <section class="max-w-6xl mx-auto px-6 pt-16 pb-16">

            <div class="mb-8">

                <a
                    href="/admin"
                    class="text-brown font-bold hover:text-yellow transition-colors"
                >
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


            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">

                <article class="card">

                    <div class="card-content">

                        <h2 class="text-2xl font-bold text-brown mb-3">
                            Home
                        </h2>

                        <p class="text-brown leading-relaxed mb-6">
                            Pas de teksten van de homepagina aan.
                        </p>

                        <a
                            href="{{ route('admin.pages.home.edit') }}"
                            class="btn"
                        >
                            Home bewerken
                        </a>

                    </div>

                </article>


                {{-- Later --}}
                <article class="card">

                    <div class="card-content">

                        <h2 class="text-2xl font-bold text-brown mb-3">
                            Wie ben ik
                        </h2>

                        <p class="text-brown leading-relaxed mb-6">
                            Deze pagina kan later ook vanuit het adminpaneel
                            worden aangepast.
                        </p>

                        <button
                            type="button"
                            disabled
                            class="bg-gray-300 text-gray-500 font-bold py-2 px-4 rounded-lg cursor-not-allowed"
                        >
                            Binnenkort beschikbaar
                        </button>

                    </div>

                </article>

            </div>

        </section>

    </main>

@endsection
