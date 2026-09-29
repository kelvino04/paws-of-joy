@extends('layouts.app')

@section('title', 'Afbeeldingen beheren | Paws of joy')

@section('content')

    <main class="bg-cream min-h-screen">

        <section class="max-w-4xl mx-auto px-6 pt-16 pb-16">

            <div class="mb-8">
                <a href="/admin" class="text-brown font-bold hover:text-yellow transition-colors">
                    ← Terug naar admin
                </a>
            </div>

            <div class="card">
                <div class="card-content">

                    <h1 class="text-4xl font-bold italic text-green mb-3">
                        Afbeeldingen beheren
                    </h1>

                    <p class="text-brown leading-relaxed mb-10">
                        Upload hier nieuwe afbeeldingen. Laat een veld leeg als je de huidige wilt behouden.
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

                    <form method="POST" action="{{ route('admin.images.update') }}" enctype="multipart/form-data"
                        class="space-y-16">
                        @csrf
                        @method('PUT')

                        {{-- ==================== HOMEPAGE ==================== --}}
                        <div>
                            <h2 class="text-3xl font-bold text-green mb-8 border-b border-brown/20 pb-3">
                                Homepage
                            </h2>

                            <div class="space-y-10">

                                {{-- Hero --}}
                                <div>
                                    <h3 class="text-xl font-bold text-brown mb-3">Hero afbeelding</h3>
                                    @php $img = $contents->get('home.hero_image')?->content; @endphp
                                    <img src="{{ $img ? asset('storage/' . $img) : asset('images/roedel-2.jpg') }}"
                                        class="w-full max-h-56 object-cover rounded-lg mb-3 shadow" alt="Hero">
                                    @unless ($img)
                                        <p class="text-sm text-brown/70 mb-2">Standaard afbeelding</p>
                                    @endunless
                                    <input type="file" name="hero_image" accept="image/*"
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                                {{-- Wandelingen --}}
                                <div>
                                    <h3 class="text-xl font-bold text-brown mb-3">Wandelingen</h3>
                                    @php $img = $contents->get('home.walk_image')?->content; @endphp
                                    <img src="{{ $img ? asset('storage/' . $img) : asset('images/roedel-1.jpg') }}"
                                        class="w-full max-h-56 object-cover rounded-lg mb-3 shadow" alt="Wandelingen">
                                    @unless ($img)
                                        <p class="text-sm text-brown/70 mb-2">Standaard afbeelding</p>
                                    @endunless
                                    <input type="file" name="walk_image" accept="image/*"
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                                {{-- Speurlessen --}}
                                <div>
                                    <h3 class="text-xl font-bold text-brown mb-3">Speurlessen (op homepage)</h3>
                                    @php $img = $contents->get('home.lesson_image')?->content; @endphp
                                    <img src="{{ $img ? asset('storage/' . $img) : asset('images/trackingLesson.jpeg') }}"
                                        class="w-full max-h-56 object-cover rounded-lg mb-3 shadow" alt="Speurlessen">
                                    @unless ($img)
                                        <p class="text-sm text-brown/70 mb-2">Standaard afbeelding</p>
                                    @endunless
                                    <input type="file" name="lesson_image" accept="image/*"
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                                {{-- Speurhonden --}}
                                <div>
                                    <h3 class="text-xl font-bold text-brown mb-3">Speurhonden (op homepage)</h3>
                                    @php $img = $contents->get('home.tracking_image')?->content; @endphp
                                    <img src="{{ $img ? asset('storage/' . $img) : asset('images/ginEnMil.jpeg') }}"
                                        class="w-full max-h-56 object-cover rounded-lg mb-3 shadow" alt="Speurhonden">
                                    @unless ($img)
                                        <p class="text-sm text-brown/70 mb-2">Standaard afbeelding</p>
                                    @endunless
                                    <input type="file" name="tracking_image" accept="image/*"
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                            </div>
                        </div>

                        {{-- ==================== WIE BEN IK ==================== --}}
                        <div>
                            <h2 class="text-3xl font-bold text-green mb-8 border-b border-brown/20 pb-3">
                                Wie ben ik
                            </h2>

                            <div>
                                <h3 class="text-xl font-bold text-brown mb-3">Portret Miriam</h3>
                                @php $img = $contents->get('about.about_image')?->content; @endphp
                                <img src="{{ $img ? asset('storage/' . $img) : asset('images/miriam.jpeg') }}"
                                    class="w-full max-h-72 object-cover rounded-lg mb-3 shadow" alt="Miriam">
                                @unless ($img)
                                    <p class="text-sm text-brown/70 mb-2">Standaard afbeelding</p>
                                @endunless
                                <input type="file" name="about_image" accept="image/*"
                                    class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                            </div>
                        </div>

                        {{-- ==================== TOEKOMSTIGE PAGINA'S ==================== --}}
                        <div>
                            <h2 class="text-3xl font-bold text-green mb-8 border-b border-brown/20 pb-3">
                                Speurlessen & Speurhonden pagina’s
                                <span class="text-base font-normal text-brown/70">(komen later)</span>
                            </h2>

                            <div class="space-y-10">
                                <div>
                                    <h3 class="text-xl font-bold text-brown mb-3">Speurlessen – Hero afbeelding</h3>
                                    @php $img = $contents->get('trackingLessons.tracking_lessons_hero')?->content; @endphp
                                    @if ($img)
                                        <img src="{{ asset('storage/' . $img) }}"
                                            class="w-full max-h-56 object-cover rounded-lg mb-3 shadow"
                                            alt="Speurlessen hero">
                                    @else
                                        <div
                                            class="w-full h-40 bg-brown/10 rounded-lg mb-3 flex items-center justify-center text-brown/50">
                                            Nog geen afbeelding
                                        </div>
                                    @endif
                                    <input type="file" name="tracking_lessons_hero" accept="image/*"
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>

                                <div>
                                    <h3 class="text-xl font-bold text-brown mb-3">Speurhonden – Hero afbeelding</h3>
                                    @php $img = $contents->get('tracking.tracking_hero')?->content; @endphp
                                    @if ($img)
                                        <img src="{{ asset('storage/' . $img) }}"
                                            class="w-full max-h-56 object-cover rounded-lg mb-3 shadow"
                                            alt="Speurhonden hero">
                                    @else
                                        <div
                                            class="w-full h-40 bg-brown/10 rounded-lg mb-3 flex items-center justify-center text-brown/50">
                                            Nog geen afbeelding
                                        </div>
                                    @endif
                                    <input type="file" name="tracking_hero" accept="image/*"
                                        class="w-full border border-brown/30 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-green">
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <button type="submit" class="btn w-full text-lg">
                                Alle afbeeldingen opslaan
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </section>

    </main>

@endsection
