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
