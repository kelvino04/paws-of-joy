<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageContentController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function editHome()
    {
        $contents = PageContent::where('page', 'home')
            ->get()
            ->keyBy('key');

        return view('admin.pages.home', compact('contents'));
    }

    public function updateHome(Request $request)
    {
        $validated = $request->validate([
            // Hero
            'hero_title'  => 'required|string|max:255',
            'hero_text'   => 'required|string',
            'hero_button' => 'required|string|max:255',

            // Diensten
            'services_title' => 'required|string|max:255',
            'services_text'  => 'required|string',

            // Wandelingen
            'walk_title'  => 'required|string|max:255',
            'walk_text'   => 'required|string',
            'walk_button' => 'required|string|max:255',

            // Speurlessen
            'lesson_title'  => 'required|string|max:255',
            'lesson_text'   => 'required|string',
            'lesson_button' => 'required|string|max:255',

            // Speurhonden
            'tracking_title'  => 'required|string|max:255',
            'tracking_text'   => 'required|string',
            'tracking_button' => 'required|string|max:255',
        ]);

        $contents = [
            // Hero
            'hero_title'  => ['title' => 'Hero titel',  'content' => $validated['hero_title']],
            'hero_text'   => ['title' => 'Hero tekst',  'content' => $validated['hero_text']],
            'hero_button' => ['title' => 'Hero knop',   'content' => $validated['hero_button']],

            // Diensten
            'services_title' => ['title' => 'Diensten titel', 'content' => $validated['services_title']],
            'services_text'  => ['title' => 'Diensten tekst',  'content' => $validated['services_text']],

            // Wandelingen
            'walk_title'  => ['title' => 'Wandelingen titel', 'content' => $validated['walk_title']],
            'walk_text'   => ['title' => 'Wandelingen tekst',  'content' => $validated['walk_text']],
            'walk_button' => ['title' => 'Wandelingen knop',   'content' => $validated['walk_button']],

            // Speurlessen
            'lesson_title'  => ['title' => 'Speurlessen titel', 'content' => $validated['lesson_title']],
            'lesson_text'   => ['title' => 'Speurlessen tekst',  'content' => $validated['lesson_text']],
            'lesson_button' => ['title' => 'Speurlessen knop',   'content' => $validated['lesson_button']],

            // Speurhonden
            'tracking_title'  => ['title' => 'Speurhonden titel', 'content' => $validated['tracking_title']],
            'tracking_text'   => ['title' => 'Speurhonden tekst',  'content' => $validated['tracking_text']],
            'tracking_button' => ['title' => 'Speurhonden knop',   'content' => $validated['tracking_button']],
        ];

        foreach ($contents as $key => $data) {
            PageContent::updateOrCreate(
                [
                    'page' => 'home',
                    'key'  => $key,
                ],
                [
                    'title'   => $data['title'],
                    'content' => $data['content'],
                ]
            );
        }

        return redirect('/admin/pages/home/edit')->with(
            'success',
            'De teksten van de homepagina zijn opgeslagen.'
        );
    }

    // ========================================
    // AFBEELDINGEN
    // ========================================

    public function editImages()
    {
        $contents = PageContent::whereIn('page', ['home', 'about', 'trackingLessons', 'tracking'])
            ->whereIn('key', [
                'hero_image',
                'walk_image',
                'lesson_image',
                'tracking_image',
                'about_image',
                'tracking_lessons_hero',
                'tracking_hero',
                'hero_image_position',
                'tracking_hero_position',
                'tracking_lessons_hero_position',
            ])
            ->get()
            ->keyBy(fn($item) => $item->page . '.' . $item->key);

        return view('admin.images.edit', compact('contents'));
    }

    public function updateImages(Request $request)
    {
        $request->validate([
            'hero_image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'walk_image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'lesson_image'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'tracking_image'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'about_image'           => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'tracking_lessons_hero' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'tracking_hero'         => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

            'hero_image_position'            => 'nullable|in:top,center,bottom',
            'tracking_hero_position'         => 'nullable|in:top,center,bottom',
            'tracking_lessons_hero_position' => 'nullable|in:top,center,bottom',
        ]);

        $images = [
            'home' => [
                'hero_image'     => 'Hero afbeelding',
                'walk_image'     => 'Wandelingen afbeelding',
                'lesson_image'   => 'Speurlessen afbeelding',
                'tracking_image' => 'Speurhonden afbeelding',
            ],
            'about' => [
                'about_image' => 'Portret Miriam',
            ],
            'trackingLessons' => [
                'tracking_lessons_hero' => 'Speurlessen hero',
            ],
            'tracking' => [
                'tracking_hero' => 'Speurhonden hero',
            ],
        ];

        foreach ($images as $page => $keys) {
            foreach ($keys as $key => $title) {
                if ($request->hasFile($key)) {
                    $old = PageContent::where('page', $page)->where('key', $key)->first();
                    if ($old && $old->content && \Storage::disk('public')->exists($old->content)) {
                        \Storage::disk('public')->delete($old->content);
                    }

                    $path = $request->file($key)->store('images', 'public');

                    PageContent::updateOrCreate(
                        ['page' => $page, 'key' => $key],
                        ['title' => $title, 'content' => $path]
                    );
                }
            }
        }

        // Posities opslaan
        $positions = [
            'home' => [
                'hero_image_position' => 'Homepage hero positie',
            ],
            'tracking' => [
                'tracking_hero_position' => 'Speurhonden hero positie',
            ],
            'trackingLessons' => [
                'tracking_lessons_hero_position' => 'Speurlessen hero positie',
            ],
        ];

        foreach ($positions as $page => $keys) {
            foreach ($keys as $key => $title) {
                if ($request->filled($key)) {
                    PageContent::updateOrCreate(
                        ['page' => $page, 'key' => $key],
                        ['title' => $title, 'content' => $request->input($key)]
                    );
                }
            }
        }

        return redirect()->route('admin.images.edit')
            ->with('success', 'Afbeeldingen en posities zijn bijgewerkt.');
    }
}
