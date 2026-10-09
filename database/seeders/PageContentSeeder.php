<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            /*
            |--------------------------------------------------------------------------
            | Hero
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'home',
                'key' => 'hero_title',
                'title' => 'Hero titel',
                'content' => 'Samen op pad, met plezier.',
            ],

            [
                'page' => 'home',
                'key' => 'hero_text',
                'title' => 'Hero tekst',
                'content' => 'Bij Paws of joy krijgt jouw hond de aandacht, beweging en vrijheid die hij verdient. Van fijne wandelingen tot speuractiviteiten: plezier staat voorop.',
            ],

            [
                'page' => 'home',
                'key' => 'hero_button',
                'title' => 'Hero knop',
                'content' => 'Neem contact op',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services intro
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'home',
                'key' => 'services_title',
                'title' => 'Diensten titel',
                'content' => 'Elke hond verdient zijn eigen moment van plezier.',
            ],

            [
                'page' => 'home',
                'key' => 'services_text',
                'title' => 'Diensten tekst',
                'content' => 'Bij Paws of joy staat het welzijn en plezier van jouw hond voorop. Ik bied persoonlijke begeleiding en activiteiten die passen bij iedere hond. Van een heerlijke wandeling tot het ontdekken van natuurlijk speurtalent: samen kijken we naar wat jouw hond nodig heeft en waar hij blij van wordt.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Wandelingen
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'home',
                'key' => 'walk_title',
                'title' => 'Wandelingen titel',
                'content' => 'Wandelingen',
            ],

            [
                'page' => 'home',
                'key' => 'walk_text',
                'title' => 'Wandelingen tekst',
                'content' => 'Tijdens mijn wandelingen krijgt jouw hond volop beweging, aandacht en ruimte om lekker hond te zijn. Ik stem de wandeling af op wat jouw hond nodig heeft en zorg voor een fijne, veilige ervaring.',
            ],

            [
                'page' => 'home',
                'key' => 'walk_button',
                'title' => 'Wandelingen knop',
                'content' => 'Bekijk tarieven',
            ],


            /*
            |--------------------------------------------------------------------------
            | Speurlessen
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'home',
                'key' => 'lesson_title',
                'title' => 'Speurlessen titel',
                'content' => 'Speurlessen',
            ],

            [
                'page' => 'home',
                'key' => 'lesson_text',
                'title' => 'Speurlessen tekst',
                'content' => 'Tijdens mijn speurlessen leert jouw hond op een leuke manier zijn natuurlijke neus te gebruiken. Ik begeleid jullie stap voor stap en pas de oefeningen aan op het niveau van jouw hond.',
            ],

            [
                'page' => 'home',
                'key' => 'lesson_button',
                'title' => 'Speurlessen knop',
                'content' => 'Neem contact op voor een les',
            ],


            /*
            |--------------------------------------------------------------------------
            | Speurhonden
            |--------------------------------------------------------------------------
            */

            [
                'page' => 'home',
                'key' => 'tracking_title',
                'title' => 'Speurhonden titel',
                'content' => 'Speurhonden',
            ],

            [
                'page' => 'home',
                'key' => 'tracking_text',
                'title' => 'Speurhonden tekst',
                'content' => 'Met mijn speurhonden help ik bij het terugvinden van vermiste honden. Door hun goede neus en mijn ervaring kunnen zij gericht worden ingezet wanneer een hond vermist raakt.',
            ],

            [
                'page' => 'home',
                'key' => 'tracking_button',
                'title' => 'Speurhonden knop',
                'content' => 'Bekijk onze speurhonden',
            ],

            /*
|--------------------------------------------------------------------------
| Wie ben ik
|--------------------------------------------------------------------------
*/
            ['page' => 'about', 'key' => 'about_title', 'title' => 'Titel', 'content' => 'Wie ben ik?'],
            ['page' => 'about', 'key' => 'about_intro', 'title' => 'Introductie', 'content' => 'Mijn naam is Miriam Sophie, ik ben 48 jaar en geboren en getogen in Oosterhout. Dieren zijn altijd een belangrijk onderdeel van mijn leven geweest. Mijn liefde voor honden, mijn ervaring en mijn kennis van hondengedrag vormen samen de basis van Paws of joy.'],
            ['page' => 'about', 'key' => 'about_love_title', 'title' => 'Liefde titel', 'content' => 'Mijn liefde voor dieren'],
            ['page' => 'about', 'key' => 'about_love_text', 'title' => 'Liefde tekst', 'content' => "Al vanaf jonge leeftijd ben ik gek op dieren. Omdat mijn broer allergisch was, konden we thuis helaas geen honden houden. Wel waren er een konijn en parkieten.\n\nOp mijn vijftiende kwam ik terecht op een paardenhandelsstal, waar ik voor alle dieren op de boerderij zorgde. Van paarden, kippen en geiten tot katten, konijnen en honden.\n\nVooral de honden trokken mijn aandacht. De waakhonden waren niet gewend aan een halsband of lijn. Ik zag het als een uitdaging om met hen aan de slag te gaan en hun vertrouwen te winnen."],
            ['page' => 'about', 'key' => 'about_experience_title', 'title' => 'Ervaring titel', 'content' => 'Mijn ervaring met honden'],
            ['page' => 'about', 'key' => 'about_experience_text', 'title' => 'Ervaring tekst', 'content' => 'Door mijn kennis van hondengedrag heb ik geleerd om goed naar honden te kijken en hun gedrag te begrijpen. Hierdoor kan ik inspelen op wat een hond nodig heeft en hoe ik hem of haar het beste kan begeleiden.'],
            ['page' => 'about', 'key' => 'about_education_title', 'title' => 'Opleiding titel', 'content' => 'Opleiding & kennis'],
            ['page' => 'about', 'key' => 'about_education_text', 'title' => 'Opleiding tekst', 'content' => 'Ik heb de opleiding Dierverzorging en Veterinaire Ondersteuning gevolgd. Hierdoor heb ik veel kennis opgedaan over de verzorging en gezondheid van dieren. Medische problemen schrikken mij daarom niet snel af.'],
            ['page' => 'about', 'key' => 'about_tag_1', 'title' => 'Tag 1', 'content' => '🐾 Hondengedrag'],
            ['page' => 'about', 'key' => 'about_tag_2', 'title' => 'Tag 2', 'content' => '🩺 Veterinaire ondersteuning'],
            ['page' => 'about', 'key' => 'about_tag_3', 'title' => 'Tag 3', 'content' => '🏃 Behendigheid'],
            ['page' => 'about', 'key' => 'about_why_title', 'title' => 'Waarom titel', 'content' => 'Waarom Paws of joy?'],
            ['page' => 'about', 'key' => 'about_why_text', 'title' => 'Waarom tekst', 'content' => "Na een jaar bij een andere hondenuitlaatservice gewerkt te hebben, wist ik het:\n\n“Dit is wat ik wil!”\n\nIk vind het heerlijk om met honden te werken en ze de aandacht, beweging en begeleiding te geven die bij hen past.\n\nEn toen was het zover: Hondenuitlaatservice Paws of joy was geboren!"],
            ['page' => 'about', 'key' => 'about_button', 'title' => 'Knoptekst', 'content' => 'Neem contact op'],

            /*
|--------------------------------------------------------------------------
| Speurhonden
|--------------------------------------------------------------------------
*/
            // Hero
            ['page' => 'tracking', 'key' => 'tracking_hero_title', 'title' => 'Hero titel', 'content' => 'Speurhonden'],
            ['page' => 'tracking', 'key' => 'tracking_hero_subtitle', 'title' => 'Hero ondertitel', 'content' => 'Paws of Borders — speuren met een serieus doel'],
            // Intro
            ['page' => 'tracking', 'key' => 'tracking_intro_title', 'title' => 'Intro titel', 'content' => 'Wat is speuren?'],
            ['page' => 'tracking', 'key' => 'tracking_intro_text', 'title' => 'Intro tekst', 'content' => "Speuren is het volgen van een uniek geurspoor dat een hond of persoon heeft achtergelaten. De speurhond leert één specifieke geur te herkennen en die consequent te volgen, ondanks afleidingen zoals andere geuren, wind of wisselende ondergrond.\n\nBij Paws of Joy doen onze eigen honden dit met veel plezier onder de naam Paws of Borders. We combineren beweging met echte mentale uitdaging — en soms is het doel nog serieuzer: het helpen terugvinden van vermiste honden."],
            // Paws of Borders
            ['page' => 'tracking', 'key' => 'tracking_pob_title', 'title' => 'POB titel', 'content' => 'Paws of Borders'],
            ['page' => 'tracking', 'key' => 'tracking_pob_facebook', 'title' => 'Facebook linktekst', 'content' => 'Volg Paws of Borders op Facebook'],
            ['page' => 'tracking', 'key' => 'tracking_pob_text', 'title' => 'POB tekst', 'content' => "Onder de naam Paws of Borders speuren we niet alleen voor de fun. Ik ben actief betrokken bij het oprechte zoeken naar vermiste honden. Wanneer een hond zoekraakt, kan een goed getrainde speurhond het verschil maken.\n\nOm daar klaar voor te zijn, trainen we regelmatig met een verstopper. Die persoon verbergt zich en geeft van tevoren een geurbron (bijvoorbeeld een stukje kleding of een geurdoekje). De speurhond krijgt die geur te ruiken en moet het spoor volgen tot hij de verstopper vindt.\n\nHeel belangrijk hierbij: we lopen bewust ook veel positieve sporen. De hond moet regelmatig iets vinden. Alleen maar zoeken zonder resultaat is demotiverend. Door succeservaringen blijft de hond scherp, gemotiveerd en vol vertrouwen in zijn werk."],
            // Wanneer
            ['page' => 'tracking', 'key' => 'tracking_when_title', 'title' => 'Wanneer titel', 'content' => 'Wanneer een speurhond inzetten?'],
            ['page' => 'tracking', 'key' => 'tracking_when_text', 'title' => 'Wanneer tekst', 'content' => 'Als er een hond vermist is, is het raadzaam om zo snel mogelijk een speurhond in te zetten. Op die manier win je tijd: het af te zoeken gebied wordt bepaald aan de hand van de richting waarin het spoor loopt of eindigt.'],
            ['page' => 'tracking', 'key' => 'tracking_when_1', 'title' => 'Wanneer punt 1', 'content' => 'Geen zichtmeldingen? Dan is een speurhond extra waardevol.'],
            ['page' => 'tracking', 'key' => 'tracking_when_2', 'title' => 'Wanneer punt 2', 'content' => 'Zijn er al betrouwbare zichtmeldingen? Dan is een speurhond niet altijd noodzakelijk.'],
            ['page' => 'tracking', 'key' => 'tracking_when_3', 'title' => 'Wanneer punt 3', 'content' => 'Bij een angstige hond wordt op dat moment meestal niet aangeraden om een speurhond in te zetten.'],
            // Speuren vs trailen
            ['page' => 'tracking', 'key' => 'tracking_vs_title', 'title' => 'Vs titel', 'content' => 'Speuren of trailen?'],
            ['page' => 'tracking', 'key' => 'tracking_speuren_title', 'title' => 'Speuren titel', 'content' => 'Speuren'],
            ['page' => 'tracking', 'key' => 'tracking_speuren_text', 'title' => 'Speuren tekst', 'content' => 'De hond volgt exact het spoor waar de vermiste hond gelopen heeft. Hij gebruikt lichaamsgeuren (zweet, huidschilfers) én bodemgeuren (grasbreuk, omgewoelde aarde).'],
            ['page' => 'tracking', 'key' => 'tracking_speuren_1', 'title' => 'Speuren punt 1', 'content' => 'Precies te zien hoe de vermiste gelopen heeft'],
            ['page' => 'tracking', 'key' => 'tracking_speuren_2', 'title' => 'Speuren punt 2', 'content' => 'Voorwerpen op het spoor worden sneller opgemerkt'],
            ['page' => 'tracking', 'key' => 'tracking_speuren_3', 'title' => 'Speuren punt 3', 'content' => 'Ook urine of ontlasting kan informatie geven'],
            ['page' => 'tracking', 'key' => 'tracking_trailen_title', 'title' => 'Trailen titel', 'content' => 'Trailen'],
            ['page' => 'tracking', 'key' => 'tracking_trailen_text', 'title' => 'Trailen tekst', 'content' => 'De hond volgt vooral de lichaamseigen geur van de vermiste hond. Die geur waait weg en komt elders terecht. De trailhond hoeft dus niet precies dezelfde route te lopen.'],
            ['page' => 'tracking', 'key' => 'tracking_trailen_1', 'title' => 'Trailen punt 1', 'content' => 'Vinden is belangrijker dan exact het spoor volgen'],
            ['page' => 'tracking', 'key' => 'tracking_trailen_2', 'title' => 'Trailen punt 2', 'content' => 'Kan soms na dagen nog werken'],
            ['page' => 'tracking', 'key' => 'tracking_trailen_3', 'title' => 'Trailen punt 3', 'content' => 'Afhankelijk van wind, neerslag en omgeving'],
            ['page' => 'tracking', 'key' => 'tracking_vs_conclusion', 'title' => 'Vs conclusie', 'content' => 'Bij Paws of Borders focussen we vooral op speuren. Dat geeft de meeste informatie over de route die de vermiste hond heeft afgelegd.'],
            // Geurbron
            ['page' => 'tracking', 'key' => 'tracking_scent_title', 'title' => 'Geurbron titel', 'content' => 'Geurbron meegeven'],
            ['page' => 'tracking', 'key' => 'tracking_scent_what_title', 'title' => 'Wat bruikbaar titel', 'content' => 'Wat is bruikbaar als geurbron?'],
            ['page' => 'tracking', 'key' => 'tracking_scent_what_text', 'title' => 'Wat bruikbaar tekst', 'content' => "In principe alles wat met de vermiste hond in aanraking is geweest, met uitzondering van metaal, plastic, urine, ontlasting of andere uitwerpselen.\n\nGoede voorbeelden: halsband, tuig, een kledingstuk, een doekje of borstelharen. Slechts 20 seconden contact is al genoeg voor een goed getrainde speurhond."],
            ['page' => 'tracking', 'key' => 'tracking_scent_pack_title', 'title' => 'Verpakken titel', 'content' => 'Hoe verpak je een geurbron?'],
            ['page' => 'tracking', 'key' => 'tracking_scent_pack_intro', 'title' => 'Verpakken intro', 'content' => 'Raak de geurbron nooit met blote handen aan. Jouw geur of die van de eigenaar kan anders de sterkste geur worden.'],
            ['page' => 'tracking', 'key' => 'tracking_scent_pack_1', 'title' => 'Verpak stap 1', 'content' => 'Keer een schone plastic zak binnenstebuiten.'],
            ['page' => 'tracking', 'key' => 'tracking_scent_pack_2', 'title' => 'Verpak stap 2', 'content' => 'Pak de geurbron op met de zak (handen raken de buitenkant niet aan).'],
            ['page' => 'tracking', 'key' => 'tracking_scent_pack_3', 'title' => 'Verpak stap 3', 'content' => 'Doe deze zak in een tweede zak met de opening naar beneden.'],
            ['page' => 'tracking', 'key' => 'tracking_scent_pack_4', 'title' => 'Verpak stap 4', 'content' => 'Sluit de tweede zak. De geleider pakt de zakken later zelf uit.'],
            ['page' => 'tracking', 'key' => 'tracking_scent_pack_tip', 'title' => 'Verpak tip', 'content' => 'Tip: split de geurbron over meerdere zakken, of zorg voor meerdere geurbronnen. Dan kunnen meerdere speurhonden tegelijk worden ingezet.'],
            ['page' => 'tracking', 'key' => 'tracking_scent_multi_title', 'title' => 'Meerdere honden titel', 'content' => 'Meerdere honden in huis?'],
            ['page' => 'tracking', 'key' => 'tracking_scent_multi_text', 'title' => 'Meerdere honden tekst', 'content' => "Een geurbron is bijna altijd een gedeelde geurbron. De sterkste geur op een halsband of tuig is meestal die van de vermiste hond. Een goed getrainde speurhond kan andere geuren elimineren.\n\nBij een mand, kleed of speeltje is de kans op gemengde geuren groter. Houd in dat geval de andere honden zoveel mogelijk uit het zoekgebied."],
            ['page' => 'tracking', 'key' => 'tracking_scent_tip', 'title' => 'Bewaartip', 'content' => 'Handige tip voor later: borstel je hond en stop de haren met een schoon doekje in een afsluitbare vershoudzak. Schrijf de naam erop en bewaar hem droog en donker. Zo heb je altijd een goede geurbron in huis. Deze is jaren te bewaren.'],
            // Hoe werkt inzet
            ['page' => 'tracking', 'key' => 'tracking_how_title', 'title' => 'Hoe werkt titel', 'content' => 'Hoe werkt een inzet?'],
            ['page' => 'tracking', 'key' => 'tracking_how_1_title', 'title' => 'Hoe 1 titel', 'content' => 'De geurbron'],
            ['page' => 'tracking', 'key' => 'tracking_how_1_text', 'title' => 'Hoe 1 tekst', 'content' => 'De speurhond krijgt de geurbron te ruiken. Daarna start hij op de plek waar de vermiste hond voor het laatst gezien is of is weggelopen.'],
            ['page' => 'tracking', 'key' => 'tracking_how_2_title', 'title' => 'Hoe 2 titel', 'content' => 'Het spoor volgen'],
            ['page' => 'tracking', 'key' => 'tracking_how_2_text', 'title' => 'Hoe 2 tekst', 'content' => 'De hond werkt aan een lange lijn en volgt het geurspoor. Hij gebruikt zowel geur op de grond als in de lucht. De geleider “leest” de hond en beslist of er verder gegaan wordt.'],
            ['page' => 'tracking', 'key' => 'tracking_how_3_title', 'title' => 'Hoe 3 titel', 'content' => 'Positieve training'],
            ['page' => 'tracking', 'key' => 'tracking_how_3_text', 'title' => 'Hoe 3 tekst', 'content' => 'Tijdens trainingen zorgen we bewust voor succes. De hond mag de verstopper of het voorwerp vinden. Zo blijft hij gemotiveerd en vol zelfvertrouwen.'],
            ['page' => 'tracking', 'key' => 'tracking_how_note', 'title' => 'Hoe noot', 'content' => 'Een speurhond vangt de vermiste hond niet. Hij verwijst naar het spoor of de richting. Bij een angstige hond is dat extra belangrijk: een “neus aan neus” contact willen we juist voorkomen.'],
            // Na het speuren
            ['page' => 'tracking', 'key' => 'tracking_after_title', 'title' => 'Na speuren titel', 'content' => 'Na het speuren'],
            ['page' => 'tracking', 'key' => 'tracking_after_text', 'title' => 'Na speuren tekst', 'content' => "Zodra de speurhond gestopt is, vertelt de geleider eerst mondeling wat het resultaat is. Daarna maken de meeste speurgeleiders een speurverslag met de gelopen route op een kaart.\n\nAan de hand van dat verslag kijken we naar mogelijke schuilplaatsen, plekken waar de hond voedsel of water kan vinden, en geven we praktische adviezen. Denk aan flyeren of het plaatsen van een vangkooi.\n\nHet doel is altijd hetzelfde: zoveel mogelijk bruikbare informatie leveren zodat de vermiste hond zo snel mogelijk veilig thuiskomt."],
            // Voordelen
            ['page' => 'tracking', 'key' => 'tracking_benefits_title', 'title' => 'Voordelen titel', 'content' => 'Waarom speuren ook goed is voor je eigen hond'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_1_title', 'title' => 'Voordeel 1 titel', 'content' => 'Mentale uitdaging'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_1_text', 'title' => 'Voordeel 1 tekst', 'content' => 'Speuren is zwaar hersenwerk. Een vermoeide hond is vaak een tevreden hond.'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_2_title', 'title' => 'Voordeel 2 titel', 'content' => 'Natuurlijke drift'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_2_text', 'title' => 'Voordeel 2 tekst', 'content' => 'Veel honden hebben een sterke zoekdrift. Speuren geeft daar een positieve uitlaatklep aan.'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_3_title', 'title' => 'Voordeel 3 titel', 'content' => 'Sterkere band'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_3_text', 'title' => 'Voordeel 3 tekst', 'content' => 'Jullie werken samen als team. Dat versterkt het vertrouwen en de samenwerking.'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_4_title', 'title' => 'Voordeel 4 titel', 'content' => 'Succeservaringen'],
            ['page' => 'tracking', 'key' => 'tracking_benefit_4_text', 'title' => 'Voordeel 4 tekst', 'content' => 'Door positieve sporen blijft de hond gemotiveerd en vol zelfvertrouwen.'],
            // CTA
            ['page' => 'tracking', 'key' => 'tracking_cta_title', 'title' => 'CTA titel', 'content' => 'Interesse in speuren?'],
            ['page' => 'tracking', 'key' => 'tracking_cta_text', 'title' => 'CTA tekst', 'content' => 'Of je nu wilt dat jouw hond leert speuren, of je bent benieuwd naar wat Paws of Borders doet bij vermiste honden — neem gerust contact met ons op.'],
            ['page' => 'tracking', 'key' => 'tracking_cta_button_1', 'title' => 'CTA knop 1', 'content' => 'Neem contact op'],
            ['page' => 'tracking', 'key' => 'tracking_cta_button_2', 'title' => 'CTA knop 2', 'content' => 'Speurlessen bekijken'],

            /*
|--------------------------------------------------------------------------
| Speurlessen
|--------------------------------------------------------------------------
*/
            // Hero
            ['page' => 'trackingLessons', 'key' => 'lessons_hero_title', 'title' => 'Hero titel', 'content' => 'Speurlessen'],
            ['page' => 'trackingLessons', 'key' => 'lessons_hero_subtitle', 'title' => 'Hero ondertitel', 'content' => 'Leer jouw hond speuren — met plezier, geduld en succes'],
            // Intro
            ['page' => 'trackingLessons', 'key' => 'lessons_intro_title', 'title' => 'Intro titel', 'content' => 'Speuren leren met jouw hond'],
            ['page' => 'trackingLessons', 'key' => 'lessons_intro_text', 'title' => 'Intro tekst', 'content' => "Speuren is één van de mooiste manieren om samen met je hond te werken. Het prikkelt de natuurlijke neusdrang, geeft mentale uitdaging en versterkt de band tussen jullie.\n\nBij Paws of Joy geef ik de speurlessen, soms samen met één van mijn zoons. Als ervaren speur- en hondengedragsbegeleidster werk ik met geduld, positieve ervaringen en veel aandacht voor zowel de hond als de handler."],
            // Wat leer je
            ['page' => 'trackingLessons', 'key' => 'lessons_learn_title', 'title' => 'Leer titel', 'content' => 'Wat leer je hond?'],
            ['page' => 'trackingLessons', 'key' => 'lessons_learn_1_title', 'title' => 'Leer 1 titel', 'content' => 'Geur herkennen'],
            ['page' => 'trackingLessons', 'key' => 'lessons_learn_1_text', 'title' => 'Leer 1 tekst', 'content' => 'Je hond leert een specifieke geurbron te herkennen en die te onderscheiden van alle andere geuren in de omgeving.'],
            ['page' => 'trackingLessons', 'key' => 'lessons_learn_2_title', 'title' => 'Leer 2 titel', 'content' => 'Spoor volgen'],
            ['page' => 'trackingLessons', 'key' => 'lessons_learn_2_text', 'title' => 'Leer 2 tekst', 'content' => 'Stap voor stap leert hij een geurspoor uit te werken. Van korte, eenvoudige sporen naar langere en uitdagendere routes.'],
            ['page' => 'trackingLessons', 'key' => 'lessons_learn_3_title', 'title' => 'Leer 3 titel', 'content' => 'Samenwerken'],
            ['page' => 'trackingLessons', 'key' => 'lessons_learn_3_text', 'title' => 'Leer 3 tekst', 'content' => 'Jij leert je hond “lezen”: wanneer heeft hij de geur, wanneer is hij hem kwijt? Speuren is teamwork.'],
            // Voor wie
            ['page' => 'trackingLessons', 'key' => 'lessons_for_who_title', 'title' => 'Voor wie titel', 'content' => 'Voor wie is speuren geschikt?'],
            ['page' => 'trackingLessons', 'key' => 'lessons_for_who_text', 'title' => 'Voor wie tekst', 'content' => "Bijna elke hond kan leren speuren. Het maakt niet uit of je een jonge, oudere, drukke of juist rustige hond hebt.\n\nWe werken in kleine groepjes of in privélessen, zodat er voldoende aandacht is voor iedere hond en handler."],
            // Hoe gaan lessen
            ['page' => 'trackingLessons', 'key' => 'lessons_how_title', 'title' => 'Hoe lessen titel', 'content' => 'Hoe gaan de lessen?'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_1_title', 'title' => 'Stap 1 titel', 'content' => 'Kennismaking'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_1_text', 'title' => 'Stap 1 tekst', 'content' => 'We kijken naar jouw hond, zijn motivatie en eventuele ervaring. Zo kunnen we de les goed laten aansluiten.'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_2_title', 'title' => 'Stap 2 titel', 'content' => 'Opbouw in kleine stappen'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_2_text', 'title' => 'Stap 2 tekst', 'content' => 'We beginnen met korte, eenvoudige sporen waarbij de hond veel succes ervaart. Daarna bouwen we langzaam op in lengte en moeilijkheidsgraad.'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_3_title', 'title' => 'Stap 3 titel', 'content' => 'Positieve ervaringen'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_3_text', 'title' => 'Stap 3 tekst', 'content' => 'Succes is essentieel. De hond mag regelmatig iets vinden. Dat houdt de motivatie hoog en zorgt voor een blije, zelfverzekerde speurder.'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_4_title', 'title' => 'Stap 4 titel', 'content' => 'Jij leert mee'],
            ['page' => 'trackingLessons', 'key' => 'lessons_how_4_text', 'title' => 'Stap 4 tekst', 'content' => 'Je leert hoe je je hond kunt “lezen”, hoe je een spoor uitzet en hoe je hem het beste begeleidt. Speuren is teamwork.'],
            // Praktisch
            ['page' => 'trackingLessons', 'key' => 'lessons_practical_title', 'title' => 'Praktisch titel', 'content' => 'Praktische informatie'],
            ['page' => 'trackingLessons', 'key' => 'lessons_bring_title', 'title' => 'Meebrengen titel', 'content' => 'Wat neem je mee?'],
            ['page' => 'trackingLessons', 'key' => 'lessons_bring_1', 'title' => 'Meebrengen 1', 'content' => 'Een goed passend speurtuig (geen anti-trektuig)'],
            ['page' => 'trackingLessons', 'key' => 'lessons_bring_2', 'title' => 'Meebrengen 2', 'content' => 'Een lange lijn (circa 10 meter, soepel)'],
            ['page' => 'trackingLessons', 'key' => 'lessons_bring_3', 'title' => 'Meebrengen 3', 'content' => 'Beloningssnoepjes (klein en geurig)'],
            ['page' => 'trackingLessons', 'key' => 'lessons_bring_4', 'title' => 'Meebrengen 4', 'content' => 'Water voor je hond'],
            ['page' => 'trackingLessons', 'key' => 'lessons_bring_5', 'title' => 'Meebrengen 5', 'content' => 'Eventueel een klein speeltje als motivator'],
            ['page' => 'trackingLessons', 'key' => 'lessons_forms_title', 'title' => 'Vormen titel', 'content' => 'Vormen'],
            ['page' => 'trackingLessons', 'key' => 'lessons_forms_1', 'title' => 'Vorm 1', 'content' => 'Privélessen'],
            ['page' => 'trackingLessons', 'key' => 'lessons_forms_2', 'title' => 'Vorm 2', 'content' => 'Kleine groepjes'],
            ['page' => 'trackingLessons', 'key' => 'lessons_forms_3', 'title' => 'Vorm 3', 'content' => 'Opbouw van beginner tot gevorderd'],
            ['page' => 'trackingLessons', 'key' => 'lessons_forms_4', 'title' => 'Vorm 4', 'content' => 'In overleg op locatie of vaste plek'],
            // CTA
            ['page' => 'trackingLessons', 'key' => 'lessons_cta_title', 'title' => 'CTA titel', 'content' => 'Interesse in speurlessen?'],
            ['page' => 'trackingLessons', 'key' => 'lessons_cta_text', 'title' => 'CTA tekst', 'content' => 'Wil je weten of speuren iets voor jouw hond is, of wil je direct een les plannen? Neem gerust contact met ons op. We denken graag met je mee.'],
            ['page' => 'trackingLessons', 'key' => 'lessons_cta_button_1', 'title' => 'CTA knop 1', 'content' => 'Neem contact op'],
            ['page' => 'trackingLessons', 'key' => 'lessons_cta_button_2', 'title' => 'CTA knop 2', 'content' => 'Meer over speurhonden'],
        ];

        foreach ($contents as $content) {
            PageContent::updateOrCreate(
                [
                    'page' => $content['page'],
                    'key' => $content['key'],
                ],
                [
                    'title' => $content['title'],
                    'content' => $content['content'],
                ]
            );
        }
    }
}
