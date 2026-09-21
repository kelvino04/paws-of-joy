@extends('layouts.app')

@section('title', 'Inloggen | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen flex items-center justify-center px-6 py-16">

        <section class="w-full max-w-md">

            <div class="card">

                <div class="card-content">

                    <div class="text-center mb-8">

                        <h1 class="text-4xl font-bold italic text-green mb-3">
                            Inloggen
                        </h1>

                        <p class="text-brown">
                            Log in om Paws of joy te beheren.
                        </p>

                    </div>


                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-300 text-red-700 rounded-lg p-4 mb-6">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="POST" action="/login" class="space-y-6">

                        @csrf

                        {{-- E-mail --}}
                        <div>
                            <label for="email" class="block text-brown font-bold mb-2">
                                E-mailadres
                            </label>

                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                autocomplete="email"
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                        </div>


                        {{-- Wachtwoord --}}
                        <div>
                            <label for="password" class="block text-brown font-bold mb-2">
                                Wachtwoord
                            </label>

                            <input type="password" id="password" name="password" required autocomplete="current-password"
                                class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                        </div>


                        <button type="submit" class="btn w-full">
                            Inloggen
                        </button>

                    </form>

                </div>

            </div>

        </section>

    </main>

@endsection
