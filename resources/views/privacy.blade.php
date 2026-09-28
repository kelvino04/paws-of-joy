@extends('layouts.app')

@section('title', 'Privacyverklaring | Paws of joy')

@section('content')

    <main class="min-h-screen bg-sand">

        <article class="max-w-4xl mx-auto px-6 py-12">

            <h1 class="text-brown text-3xl md:text-4xl font-bold text-center mb-4">
                Privacyverklaring
            </h1>

            <p class="text-brown text-center text-lg mb-12">
                Paws of joy
            </p>


            {{-- Verantwoordelijke --}}
            <section class="mb-10">
                <p class="text-brown leading-relaxed">
                    Paws of joy is verantwoordelijk voor de verwerking van persoonsgegevens
                    zoals weergegeven in deze privacyverklaring.
                </p>
            </section>


            {{-- Persoonsgegevens --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Persoonsgegevens die wij verwerken
                </h2>

                <p class="text-brown leading-relaxed">
                    Paws of joy verwerkt geen persoonsgegevens, omdat op onze site geen
                    persoonsgegevens achter gelaten kunnen worden.
                </p>
            </section>


            {{-- Bijzondere persoonsgegevens --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Bijzondere en/of gevoelige persoonsgegevens die wij verwerken
                </h2>

                <p class="text-brown leading-relaxed mb-4">
                    Onze website en/of dienst heeft niet de intentie gegevens te verzamelen
                    over websitebezoekers die jonger zijn dan 16 jaar. Tenzij ze toestemming
                    hebben van ouders of voogd.
                </p>

                <p class="text-brown leading-relaxed mb-4">
                    We kunnen echter niet controleren of een bezoeker ouder dan 16 is.
                    Wij raden ouders dan ook aan betrokken te zijn bij de online activiteiten
                    van hun kinderen, om zo te voorkomen dat er gegevens over kinderen
                    verzameld worden zonder ouderlijke toestemming.
                </p>

                <p class="text-brown leading-relaxed">
                    Als u er van overtuigd bent dat wij zonder die toestemming persoonlijke
                    gegevens hebben verzameld over een minderjarige, neem dan contact met
                    ons op via
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@pawsofjoy.nl" target="_blank"
                        rel="noopener noreferrer" class="font-bold underline hover:text-yellow transition-colors">
                        info@pawsofjoy.nl
                    </a>,
                    dan verwijderen wij deze informatie.
                </p>
            </section>


            {{-- Doel en grondslag --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Met welk doel en op basis van welke grondslag wij persoonsgegevens verwerken
                </h2>

                <p class="text-brown leading-relaxed mb-4">
                    Paws of joy verwerkt uw persoonsgegevens voor de volgende doelen:
                </p>

                <ul class="list-disc list-inside text-brown leading-relaxed space-y-2">
                    <li>
                        U te kunnen bellen of e-mailen indien dit nodig is om onze
                        dienstverlening uit te kunnen voeren.
                    </li>
                </ul>
            </section>


            {{-- Bewaartermijn --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Hoe lang we persoonsgegevens bewaren
                </h2>

                <p class="text-brown leading-relaxed mb-4">
                    Paws of joy bewaart uw persoonsgegevens niet langer dan strikt nodig
                    is om de doelen te realiseren waarvoor uw gegevens worden verzameld.
                </p>

                <p class="text-brown leading-relaxed mb-4">
                    Wij hanteren de volgende bewaartermijnen voor de volgende categorieën
                    van persoonsgegevens:
                </p>

                <div class="overflow-x-auto">
                    <table class="w-full border-collapse text-left text-brown">
                        <thead>
                            <tr class="bg-green text-black">
                                <th class="border border-black/20 px-4 py-3">
                                    Gegevens
                                </th>
                                <th class="border border-black/20 px-4 py-3">
                                    Bewaartermijn
                                </th>
                                <th class="border border-black/20 px-4 py-3">
                                    Doel
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="border border-black/20 px-4 py-3">
                                    Persoonsgegevens
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    Voor zolang het wettelijk nodig is
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    Tenaamstelling
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-black/20 px-4 py-3">
                                    Adres
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    Voor zolang het wettelijk nodig is
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    Contact
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-black/20 px-4 py-3">
                                    Telefoonnummer
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    Voor zolang het wettelijk nodig is
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    Contact
                                </td>
                            </tr>

                            <tr>
                                <td class="border border-black/20 px-4 py-3">
                                    Facturen
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    7 jaar
                                </td>
                                <td class="border border-black/20 px-4 py-3">
                                    Belastingdienst
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>


            {{-- Delen persoonsgegevens --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Delen van persoonsgegevens met derden
                </h2>

                <p class="text-brown leading-relaxed">
                    Paws of joy verstrekt geen gegevens aan derden en is alleen nodig voor
                    de uitvoering van onze overeenkomst met u of om te voldoen aan een
                    wettelijke verplichting.
                </p>
            </section>


            {{-- Cookies --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Cookies, of vergelijkbare technieken, die wij gebruiken
                </h2>

                <p class="text-brown leading-relaxed">
                    Paws of joy gebruikt geen cookies of vergelijkbare technieken.
                </p>
            </section>


            {{-- Rechten --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Gegevens inzien, aanpassen of verwijderen
                </h2>

                <p class="text-brown leading-relaxed mb-4">
                    U heeft het recht om uw persoonsgegevens in te zien, te corrigeren of
                    te verwijderen. Daarnaast heeft u het recht om uw eventuele toestemming
                    voor de gegevensverwerking in te trekken of bezwaar te maken tegen de
                    verwerking van uw persoonsgegevens door Paws of joy en heeft u het recht
                    op gegevensoverdraagbaarheid.
                </p>

                <p class="text-brown leading-relaxed mb-4">
                    Dat betekent dat u bij ons een verzoek kunt indienen om de persoonsgegevens
                    die wij van u beschikken in een computerbestand naar u of een ander,
                    door u genoemde organisatie, te sturen.
                </p>

                <p class="text-brown leading-relaxed mb-4">
                    U kunt een verzoek tot inzage, correctie, verwijdering,
                    gegevensoverdraging van uw persoonsgegevens of verzoek tot intrekking
                    van uw toestemming of bezwaar op de verwerking van uw persoonsgegevens
                    sturen naar
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@pawsofjoy.nl" target="_blank"
                        rel="noopener noreferrer" class="font-bold underline hover:text-yellow transition-colors">
                        info@pawsofjoy.nl
                    </a>.
                </p>

                <p class="text-brown leading-relaxed mb-4">
                    Om er zeker van te zijn dat het verzoek tot inzage door u is gedaan,
                    vragen wij u een kopie van uw identiteitsbewijs met het verzoek mee
                    te sturen. Maak in deze kopie uw pasfoto, MRZ (machine readable zone,
                    de strook met nummers onderaan het paspoort), paspoortnummer en
                    Burgerservicenummer (BSN) zwart. Dit ter bescherming van uw privacy.
                </p>

                <p class="text-brown leading-relaxed">
                    We reageren zo snel mogelijk, maar binnen vier weken, op uw verzoek.
                </p>
            </section>


            {{-- Autoriteit Persoonsgegevens --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Klacht indienen
                </h2>

                <p class="text-brown leading-relaxed">
                    Paws of joy wil u er tevens op wijzen, dat u de mogelijkheid heeft om
                    een klacht in te dienen bij de nationale toezichthouder, de Autoriteit
                    Persoonsgegevens.
                </p>

                <p class="text-brown leading-relaxed mt-4">
                    <a href="https://autoriteitpersoonsgegevens.nl/nl/contact-met-de-autoriteit-persoonsgegevens/tip-ons"
                        target="_blank" rel="noopener noreferrer"
                        class="font-bold underline hover:text-yellow transition-colors">
                        Contact met de Autoriteit Persoonsgegevens
                    </a>
                </p>
            </section>


            {{-- Beveiliging --}}
            <section class="mb-10">
                <h2 class="text-brown text-2xl md:text-3xl font-bold mb-4">
                    Hoe wij persoonsgegevens beveiligen
                </h2>

                <p class="text-brown leading-relaxed">
                    Paws of joy neemt de bescherming van uw gegevens serieus en neemt
                    passende maatregelen om misbruik, verlies, onbevoegde toegang,
                    ongewenste openbaarmaking en ongeoorloofde wijziging tegen te gaan.
                </p>

                <p class="text-brown leading-relaxed mt-4">
                    Als u de indruk heeft dat uw gegevens niet goed beveiligd zijn of er
                    aanwijzingen van misbruik zijn, neem dan contact op met onze
                    klantenservice of via
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=info@pawsofjoy.nl" target="_blank"
                        rel="noopener noreferrer" class="font-bold underline hover:text-yellow transition-colors">
                        info@pawsofjoy.nl</a>.
                </p>
            </section>

        </article>

    </main>
@endsection
