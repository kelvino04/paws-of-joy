@extends('layouts.app')

@section('title', 'Contactbericht | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        <section class="max-w-3xl mx-auto px-6 pt-16 pb-16">

            <div class="mb-8">

                <a href="{{ route('admin.contact-messages.index') }}"
                    class="text-brown font-bold hover:text-yellow transition-colors">
                    ← Terug naar contactberichten
                </a>

            </div>


            <article class="card">

                <div class="card-content">

                    <h1 class="text-3xl font-bold italic text-green mb-8">
                        {{ $contactMessage->subject }}
                    </h1>


                    <div class="space-y-5">

                        {{-- Naam --}}
                        <div>

                            <p class="text-sm font-bold text-brown mb-1">
                                Naam
                            </p>

                            <p class="text-lg text-brown">
                                {{ $contactMessage->name }}
                            </p>

                        </div>


                        {{-- E-mail --}}
                        <div>

                            <p class="text-sm font-bold text-brown mb-1">
                                E-mail
                            </p>

                            <p class="text-lg text-brown">
                                {{ $contactMessage->email }}
                            </p>

                        </div>


                        {{-- Telefoon --}}
                        <div>

                            <p class="text-sm font-bold text-brown mb-1">
                                Telefoon
                            </p>

                            <p class="text-lg text-brown">
                                {{ $contactMessage->phone ?: 'Niet opgegeven' }}
                            </p>

                        </div>


                        {{-- Onderwerp --}}
                        <div>

                            <p class="text-sm font-bold text-brown mb-1">
                                Onderwerp
                            </p>

                            <p class="text-lg text-brown">
                                {{ $contactMessage->subject }}
                            </p>

                        </div>


                        {{-- Bericht --}}
                        <div>

                            <p class="text-sm font-bold text-brown mb-2">
                                Bericht
                            </p>

                            <div class="bg-white rounded-lg p-5 text-brown leading-relaxed whitespace-pre-line">
                                {{ $contactMessage->message }}
                            </div>

                        </div>


                        {{-- Datum --}}
                        <div class="border-t border-brown/20 pt-5">

                            <p class="text-sm text-brown">
                                Ontvangen op
                                {{ $contactMessage->created_at->format('d-m-Y H:i') }}
                            </p>

                        </div>

                    </div>

                </div>

            </article>

        </section>

    </main>

@endsection
