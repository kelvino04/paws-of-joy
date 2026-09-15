@extends('layouts.app')

@section('title', 'Paws of joy')

@section('content')

    <main class="relative overflow-hidden bg-cream">

        <!-- Decoratieve achtergrond -->
        <div class="absolute -top-32 -right-32 h-96 w-96 rounded-full bg-green/20"></div>
        <div class="absolute top-1/2 -left-40 h-96 w-96 rounded-full bg-yellow/10"></div>
        <div class="absolute -bottom-32 right-1/4 h-80 w-80 rounded-full bg-brown/10"></div>

        <!-- Intro -->
        <section class="relative max-w-5xl mx-auto px-6 pt-16 pb-10 text-center">

            <h1 class="text-4xl md:text-5xl font-bold italic text-green mb-6">
                Neem contact op
            </h1>

            <p class="max-w-2xl mx-auto text-lg leading-relaxed">
                Heb je een vraag over de wandelingen, speurlessen of speurhonden?
                Of wil je gewoon even kennismaken? Stuur mij gerust een berichtje.
                Ik denk graag met je mee over wat het beste bij jou en je hond past.
            </p>

        </section>

        <!-- Contact gedeelte -->
        <section class="relative max-w-6xl mx-auto px-6 pb-20">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">

                <!-- Contactformulier -->
                <div class="lg:col-span-2 bg-white rounded-3xl shadow-xl p-6 md:p-10">

                    <h2 class="text-2xl md:text-3xl font-bold italic text-green mb-2">
                        Stuur mij een bericht
                    </h2>

                    <p class="text-gray-700 mb-8">
                        Vul het formulier in en ik neem zo snel mogelijk contact met je op.
                    </p>

                    <div id="ContactForm"></div>

                </div>

                <!-- Contactinformatie -->
                <aside class="bg-green rounded-3xl shadow-xl p-6 md:p-8 text-black">

                    <img src="/images/pojLogo.png" alt="Paws of joy logo" class="h-28 w-auto mx-auto mb-6">

                    <h2 class="text-2xl font-bold italic mb-6 text-center">
                        Hondenuitlaatservice
                    </h2>

                    <div class="space-y-5">

                        <div>
                            <h3 class="font-bold text-lg">
                                Telefoon
                            </h3>

                            <a href="tel:0625282606" class="hover:text-yellow transition-colors">
                                06 25282606
                            </a>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg">
                                E-mail
                            </h3>

                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@pawsofjoy.nl" target="_blank"
                                rel="noopener noreferrer"
                                class="underline hover:text-yellow transition-colors break-words">
                                info@pawsofjoy.nl
                            </a>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg">
                                Adres
                            </h3>

                            <p>
                                Rijksweg 15<br>
                                5125NB Hulten
                            </p>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg">
                                KvK
                            </h3>

                            <p>
                                71318658
                            </p>
                        </div>

                    </div>

                    <div class="border-t border-black/20 mt-8 pt-6">

                        <p class="font-bold italic text-lg">
                            Samen op pad, met plezier.
                        </p>

                        <p class="mt-2 text-sm leading-relaxed">
                            Bij Paws of joy staat het welzijn en plezier van jouw hond
                            voorop.
                        </p>

                    </div>

                </aside>

            </div>

        </section>

    </main>
@endsection
