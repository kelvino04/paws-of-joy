@extends('layouts.app')

@section('title', 'Contactberichten | Paws of joy')

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
                    Contactberichten
                </h1>

                <p class="text-lg text-brown">
                    Bekijk hier de berichten die via het contactformulier zijn verzonden.
                </p>

            </div>


            @if ($messages->isEmpty())

                <div class="card max-w-3xl mx-auto">

                    <div class="card-content text-center">

                        <p class="text-brown text-lg">
                            Er zijn nog geen contactberichten ontvangen.
                        </p>

                    </div>

                </div>
            @else
                <div class="space-y-4">

                    @foreach ($messages as $message)
                        <article class="card">

                            <div class="card-content">

                                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                                    <div>

                                        <h2 class="text-xl font-bold text-brown">
                                            {{ $message->subject }}
                                        </h2>

                                        <p class="text-brown mt-1">
                                            {{ $message->name }}
                                        </p>

                                        <p class="text-brown text-sm mt-1">
                                            {{ $message->email }}
                                        </p>

                                    </div>


                                    <div class="flex flex-col sm:flex-row gap-3">

                                        <a href="{{ route('admin.contact-messages.show', $message) }}" class="btn">
                                            Bekijk bericht
                                        </a>

                                        <form method="POST"
                                            action="{{ route('admin.contact-messages.destroy', $message) }}">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                onclick="return confirm('Weet je zeker dat je dit bericht wilt verwijderen?')"
                                                class="bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700 transition-all duration-200 hover:scale-105 shadow-md w-full">
                                                Verwijderen
                                            </button>

                                        </form>

                                    </div>

                                </div>


                                <div class="border-t border-brown/20 mt-5 pt-4">

                                    <p class="text-brown text-sm">
                                        Ontvangen op
                                        {{ $message->created_at->format('d-m-Y H:i') }}
                                    </p>

                                </div>

                            </div>

                        </article>
                    @endforeach

                </div>

            @endif

        </section>

    </main>

@endsection
