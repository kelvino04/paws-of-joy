<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paws of Joy</title>

    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body>

    <main class="min-h-screen bg-sand">

        <div id="Header"></div>

        <div class="flex flex-row items-center justify-center p-4">

            <div class="max-w-lg">
                <h1 class="text-cream font-bold text-2xl text-center p-4">
                    Samen op pad, met plezier.
                </h1>

                <p class="text-cream font-normal text-lg text-center p-4">
                    Bij Paws of Joy krijgt jouw hond de aandacht, beweging en vrijheid die hij verdient.
                    Van fijne wandelingen tot speuractiviteiten: plezier staat voorop.
                </p>

                <button class="bg-orange text-cream font-bold py-2 px-4 rounded hover:bg-brown mx-auto block">
                    Neem contact op
                </button>
            </div>

            <div class="p-4">
                <img src="{{ asset('images/roedel2.jpg') }}" alt="Paws of Joy" class="mx-auto rounded shadow-lg">
            </div>

        </div>

    </main>

</body>

</html>
