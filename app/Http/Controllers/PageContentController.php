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

    // ========================================
    // HOME
    // ========================================

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
            'hero_title'     => 'required|string|max:255',
            'hero_text'      => 'required|string',
            'hero_button'    => 'required|string|max:255',
            'services_title' => 'required|string|max:255',
            'services_text'  => 'required|string',
            'walk_title'     => 'required|string|max:255',
            'walk_text'      => 'required|string',
            'walk_button'    => 'required|string|max:255',
            'lesson_title'   => 'required|string|max:255',
            'lesson_text'    => 'required|string',
            'lesson_button'  => 'required|string|max:255',
            'tracking_title' => 'required|string|max:255',
            'tracking_text'  => 'required|string',
            'tracking_button' => 'required|string|max:255',
        ]);

        $contents = [
            'hero_title'     => ['title' => 'Hero titel',        'content' => $validated['hero_title']],
            'hero_text'      => ['title' => 'Hero tekst',        'content' => $validated['hero_text']],
            'hero_button'    => ['title' => 'Hero knop',         'content' => $validated['hero_button']],
            'services_title' => ['title' => 'Diensten titel',    'content' => $validated['services_title']],
            'services_text'  => ['title' => 'Diensten tekst',    'content' => $validated['services_text']],
            'walk_title'     => ['title' => 'Wandelingen titel', 'content' => $validated['walk_title']],
            'walk_text'      => ['title' => 'Wandelingen tekst', 'content' => $validated['walk_text']],
            'walk_button'    => ['title' => 'Wandelingen knop',  'content' => $validated['walk_button']],
            'lesson_title'   => ['title' => 'Speurlessen titel', 'content' => $validated['lesson_title']],
            'lesson_text'    => ['title' => 'Speurlessen tekst', 'content' => $validated['lesson_text']],
            'lesson_button'  => ['title' => 'Speurlessen knop',  'content' => $validated['lesson_button']],
            'tracking_title' => ['title' => 'Speurhonden titel', 'content' => $validated['tracking_title']],
            'tracking_text'  => ['title' => 'Speurhonden tekst', 'content' => $validated['tracking_text']],
            'tracking_button' => ['title' => 'Speurhonden knop',  'content' => $validated['tracking_button']],
        ];

        foreach ($contents as $key => $data) {
            PageContent::updateOrCreate(
                ['page' => 'home', 'key' => $key],
                ['title' => $data['title'], 'content' => $data['content']]
            );
        }

        return redirect()->route('admin.pages.home.edit')
            ->with('success', 'De teksten van de homepagina zijn opgeslagen.');
    }

    // ========================================
    // WIE BEN IK
    // ========================================

    public function editAbout()
    {
        $contents = PageContent::where('page', 'about')
            ->get()
            ->keyBy('key');

        return view('admin.pages.about', compact('contents'));
    }

    public function updateAbout(Request $request)
    {
        $validated = $request->validate([
            'about_title'            => 'required|string|max:255',
            'about_intro'            => 'required|string',
            'about_love_title'       => 'required|string|max:255',
            'about_love_text'        => 'required|string',
            'about_experience_title' => 'required|string|max:255',
            'about_experience_text'  => 'required|string',
            'about_education_title'  => 'required|string|max:255',
            'about_education_text'   => 'required|string',
            'about_tag_1'            => 'required|string|max:255',
            'about_tag_2'            => 'required|string|max:255',
            'about_tag_3'            => 'required|string|max:255',
            'about_why_title'        => 'required|string|max:255',
            'about_why_text'         => 'required|string',
            'about_button'           => 'required|string|max:255',
        ]);

        $map = [
            'about_title'            => 'Titel',
            'about_intro'            => 'Introductie',
            'about_love_title'       => 'Liefde titel',
            'about_love_text'        => 'Liefde tekst',
            'about_experience_title' => 'Ervaring titel',
            'about_experience_text'  => 'Ervaring tekst',
            'about_education_title'  => 'Opleiding titel',
            'about_education_text'   => 'Opleiding tekst',
            'about_tag_1'            => 'Tag 1',
            'about_tag_2'            => 'Tag 2',
            'about_tag_3'            => 'Tag 3',
            'about_why_title'        => 'Waarom titel',
            'about_why_text'         => 'Waarom tekst',
            'about_button'           => 'Knoptekst',
        ];

        foreach ($map as $key => $title) {
            PageContent::updateOrCreate(
                ['page' => 'about', 'key' => $key],
                ['title' => $title, 'content' => $validated[$key]]
            );
        }

        return redirect()->route('admin.pages.about.edit')
            ->with('success', 'Wie ben ik is opgeslagen.');
    }

    // ========================================
    // SPEURHONDEN
    // ========================================

    public function editTracking()
    {
        $contents = PageContent::where('page', 'tracking')
            ->get()
            ->keyBy('key');

        return view('admin.pages.tracking', compact('contents'));
    }

    public function updateTracking(Request $request)
    {
        $validated = $request->validate([
            // Hero
            'tracking_hero_title'    => 'required|string|max:255',
            'tracking_hero_subtitle' => 'required|string|max:255',
            // Intro
            'tracking_intro_title'   => 'required|string|max:255',
            'tracking_intro_text'    => 'required|string',
            // POB
            'tracking_pob_title'     => 'required|string|max:255',
            'tracking_pob_facebook'  => 'required|string|max:255',
            'tracking_pob_text'      => 'required|string',
            // Wanneer
            'tracking_when_title'    => 'required|string|max:255',
            'tracking_when_text'     => 'required|string',
            'tracking_when_1'        => 'required|string|max:500',
            'tracking_when_2'        => 'required|string|max:500',
            'tracking_when_3'        => 'required|string|max:500',
            // Speuren vs trailen
            'tracking_vs_title'      => 'required|string|max:255',
            'tracking_speuren_title' => 'required|string|max:255',
            'tracking_speuren_text'  => 'required|string',
            'tracking_speuren_1'     => 'required|string|max:500',
            'tracking_speuren_2'     => 'required|string|max:500',
            'tracking_speuren_3'     => 'required|string|max:500',
            'tracking_trailen_title' => 'required|string|max:255',
            'tracking_trailen_text'  => 'required|string',
            'tracking_trailen_1'     => 'required|string|max:500',
            'tracking_trailen_2'     => 'required|string|max:500',
            'tracking_trailen_3'     => 'required|string|max:500',
            'tracking_vs_conclusion' => 'required|string',
            // Geurbron
            'tracking_scent_title'       => 'required|string|max:255',
            'tracking_scent_what_title'  => 'required|string|max:255',
            'tracking_scent_what_text'   => 'required|string',
            'tracking_scent_pack_title'  => 'required|string|max:255',
            'tracking_scent_pack_intro'  => 'required|string',
            'tracking_scent_pack_1'      => 'required|string|max:500',
            'tracking_scent_pack_2'      => 'required|string|max:500',
            'tracking_scent_pack_3'      => 'required|string|max:500',
            'tracking_scent_pack_4'      => 'required|string|max:500',
            'tracking_scent_pack_tip'    => 'required|string',
            'tracking_scent_multi_title' => 'required|string|max:255',
            'tracking_scent_multi_text'  => 'required|string',
            'tracking_scent_tip'         => 'required|string',
            // Hoe werkt
            'tracking_how_title'   => 'required|string|max:255',
            'tracking_how_1_title' => 'required|string|max:255',
            'tracking_how_1_text'  => 'required|string',
            'tracking_how_2_title' => 'required|string|max:255',
            'tracking_how_2_text'  => 'required|string',
            'tracking_how_3_title' => 'required|string|max:255',
            'tracking_how_3_text'  => 'required|string',
            'tracking_how_note'    => 'required|string',
            // Na speuren
            'tracking_after_title' => 'required|string|max:255',
            'tracking_after_text'  => 'required|string',
            // Voordelen
            'tracking_benefits_title'   => 'required|string|max:255',
            'tracking_benefit_1_title'  => 'required|string|max:255',
            'tracking_benefit_1_text'   => 'required|string',
            'tracking_benefit_2_title'  => 'required|string|max:255',
            'tracking_benefit_2_text'   => 'required|string',
            'tracking_benefit_3_title'  => 'required|string|max:255',
            'tracking_benefit_3_text'   => 'required|string',
            'tracking_benefit_4_title'  => 'required|string|max:255',
            'tracking_benefit_4_text'   => 'required|string',
            // CTA
            'tracking_cta_title'    => 'required|string|max:255',
            'tracking_cta_text'     => 'required|string',
            'tracking_cta_button_1' => 'required|string|max:255',
            'tracking_cta_button_2' => 'required|string|max:255',
        ]);

        $map = [
            'tracking_hero_title'    => 'Hero titel',
            'tracking_hero_subtitle' => 'Hero ondertitel',
            'tracking_intro_title'   => 'Intro titel',
            'tracking_intro_text'    => 'Intro tekst',
            'tracking_pob_title'     => 'POB titel',
            'tracking_pob_facebook'  => 'Facebook linktekst',
            'tracking_pob_text'      => 'POB tekst',
            'tracking_when_title'    => 'Wanneer titel',
            'tracking_when_text'     => 'Wanneer tekst',
            'tracking_when_1'        => 'Wanneer punt 1',
            'tracking_when_2'        => 'Wanneer punt 2',
            'tracking_when_3'        => 'Wanneer punt 3',
            'tracking_vs_title'      => 'Vs titel',
            'tracking_speuren_title' => 'Speuren titel',
            'tracking_speuren_text'  => 'Speuren tekst',
            'tracking_speuren_1'     => 'Speuren punt 1',
            'tracking_speuren_2'     => 'Speuren punt 2',
            'tracking_speuren_3'     => 'Speuren punt 3',
            'tracking_trailen_title' => 'Trailen titel',
            'tracking_trailen_text'  => 'Trailen tekst',
            'tracking_trailen_1'     => 'Trailen punt 1',
            'tracking_trailen_2'     => 'Trailen punt 2',
            'tracking_trailen_3'     => 'Trailen punt 3',
            'tracking_vs_conclusion' => 'Vs conclusie',
            'tracking_scent_title'       => 'Geurbron titel',
            'tracking_scent_what_title'  => 'Wat bruikbaar titel',
            'tracking_scent_what_text'   => 'Wat bruikbaar tekst',
            'tracking_scent_pack_title'  => 'Verpakken titel',
            'tracking_scent_pack_intro'  => 'Verpakken intro',
            'tracking_scent_pack_1'      => 'Verpak stap 1',
            'tracking_scent_pack_2'      => 'Verpak stap 2',
            'tracking_scent_pack_3'      => 'Verpak stap 3',
            'tracking_scent_pack_4'      => 'Verpak stap 4',
            'tracking_scent_pack_tip'    => 'Verpak tip',
            'tracking_scent_multi_title' => 'Meerdere honden titel',
            'tracking_scent_multi_text'  => 'Meerdere honden tekst',
            'tracking_scent_tip'         => 'Bewaartip',
            'tracking_how_title'   => 'Hoe werkt titel',
            'tracking_how_1_title' => 'Hoe 1 titel',
            'tracking_how_1_text'  => 'Hoe 1 tekst',
            'tracking_how_2_title' => 'Hoe 2 titel',
            'tracking_how_2_text'  => 'Hoe 2 tekst',
            'tracking_how_3_title' => 'Hoe 3 titel',
            'tracking_how_3_text'  => 'Hoe 3 tekst',
            'tracking_how_note'    => 'Hoe noot',
            'tracking_after_title' => 'Na speuren titel',
            'tracking_after_text'  => 'Na speuren tekst',
            'tracking_benefits_title'  => 'Voordelen titel',
            'tracking_benefit_1_title' => 'Voordeel 1 titel',
            'tracking_benefit_1_text'  => 'Voordeel 1 tekst',
            'tracking_benefit_2_title' => 'Voordeel 2 titel',
            'tracking_benefit_2_text'  => 'Voordeel 2 tekst',
            'tracking_benefit_3_title' => 'Voordeel 3 titel',
            'tracking_benefit_3_text'  => 'Voordeel 3 tekst',
            'tracking_benefit_4_title' => 'Voordeel 4 titel',
            'tracking_benefit_4_text'  => 'Voordeel 4 tekst',
            'tracking_cta_title'    => 'CTA titel',
            'tracking_cta_text'     => 'CTA tekst',
            'tracking_cta_button_1' => 'CTA knop 1',
            'tracking_cta_button_2' => 'CTA knop 2',
        ];

        foreach ($map as $key => $title) {
            PageContent::updateOrCreate(
                ['page' => 'tracking', 'key' => $key],
                ['title' => $title, 'content' => $validated[$key]]
            );
        }

        return redirect()->route('admin.pages.tracking.edit')
            ->with('success', 'Speurhonden-pagina is opgeslagen.');
    }

    // ========================================
    // SPEURLESSEN
    // ========================================

    public function editTrackingLessons()
    {
        $contents = PageContent::where('page', 'trackingLessons')
            ->get()
            ->keyBy('key');

        return view('admin.pages.trackingLessons', compact('contents'));
    }

    public function updateTrackingLessons(Request $request)
    {
        $validated = $request->validate([
            // Hero
            'lessons_hero_title'    => 'required|string|max:255',
            'lessons_hero_subtitle' => 'required|string|max:255',
            // Intro
            'lessons_intro_title'   => 'required|string|max:255',
            'lessons_intro_text'    => 'required|string',
            // Wat leer je
            'lessons_learn_title'   => 'required|string|max:255',
            'lessons_learn_1_title' => 'required|string|max:255',
            'lessons_learn_1_text'  => 'required|string',
            'lessons_learn_2_title' => 'required|string|max:255',
            'lessons_learn_2_text'  => 'required|string',
            'lessons_learn_3_title' => 'required|string|max:255',
            'lessons_learn_3_text'  => 'required|string',
            // Voor wie
            'lessons_for_who_title' => 'required|string|max:255',
            'lessons_for_who_text'  => 'required|string',
            // Hoe lessen
            'lessons_how_title'   => 'required|string|max:255',
            'lessons_how_1_title' => 'required|string|max:255',
            'lessons_how_1_text'  => 'required|string',
            'lessons_how_2_title' => 'required|string|max:255',
            'lessons_how_2_text'  => 'required|string',
            'lessons_how_3_title' => 'required|string|max:255',
            'lessons_how_3_text'  => 'required|string',
            'lessons_how_4_title' => 'required|string|max:255',
            'lessons_how_4_text'  => 'required|string',
            // Praktisch
            'lessons_practical_title' => 'required|string|max:255',
            'lessons_bring_title'     => 'required|string|max:255',
            'lessons_bring_1'         => 'required|string|max:500',
            'lessons_bring_2'         => 'required|string|max:500',
            'lessons_bring_3'         => 'required|string|max:500',
            'lessons_bring_4'         => 'required|string|max:500',
            'lessons_bring_5'         => 'required|string|max:500',
            'lessons_forms_title'     => 'required|string|max:255',
            'lessons_forms_1'         => 'required|string|max:500',
            'lessons_forms_2'         => 'required|string|max:500',
            'lessons_forms_3'         => 'required|string|max:500',
            'lessons_forms_4'         => 'required|string|max:500',
            // CTA
            'lessons_cta_title'    => 'required|string|max:255',
            'lessons_cta_text'     => 'required|string',
            'lessons_cta_button_1' => 'required|string|max:255',
            'lessons_cta_button_2' => 'required|string|max:255',
        ]);

        $map = [
            'lessons_hero_title'    => 'Hero titel',
            'lessons_hero_subtitle' => 'Hero ondertitel',
            'lessons_intro_title'   => 'Intro titel',
            'lessons_intro_text'    => 'Intro tekst',
            'lessons_learn_title'   => 'Leer titel',
            'lessons_learn_1_title' => 'Leer 1 titel',
            'lessons_learn_1_text'  => 'Leer 1 tekst',
            'lessons_learn_2_title' => 'Leer 2 titel',
            'lessons_learn_2_text'  => 'Leer 2 tekst',
            'lessons_learn_3_title' => 'Leer 3 titel',
            'lessons_learn_3_text'  => 'Leer 3 tekst',
            'lessons_for_who_title' => 'Voor wie titel',
            'lessons_for_who_text'  => 'Voor wie tekst',
            'lessons_how_title'   => 'Hoe lessen titel',
            'lessons_how_1_title' => 'Stap 1 titel',
            'lessons_how_1_text'  => 'Stap 1 tekst',
            'lessons_how_2_title' => 'Stap 2 titel',
            'lessons_how_2_text'  => 'Stap 2 tekst',
            'lessons_how_3_title' => 'Stap 3 titel',
            'lessons_how_3_text'  => 'Stap 3 tekst',
            'lessons_how_4_title' => 'Stap 4 titel',
            'lessons_how_4_text'  => 'Stap 4 tekst',
            'lessons_practical_title' => 'Praktisch titel',
            'lessons_bring_title'     => 'Meebrengen titel',
            'lessons_bring_1'         => 'Meebrengen 1',
            'lessons_bring_2'         => 'Meebrengen 2',
            'lessons_bring_3'         => 'Meebrengen 3',
            'lessons_bring_4'         => 'Meebrengen 4',
            'lessons_bring_5'         => 'Meebrengen 5',
            'lessons_forms_title'     => 'Vormen titel',
            'lessons_forms_1'         => 'Vorm 1',
            'lessons_forms_2'         => 'Vorm 2',
            'lessons_forms_3'         => 'Vorm 3',
            'lessons_forms_4'         => 'Vorm 4',
            'lessons_cta_title'    => 'CTA titel',
            'lessons_cta_text'     => 'CTA tekst',
            'lessons_cta_button_1' => 'CTA knop 1',
            'lessons_cta_button_2' => 'CTA knop 2',
        ];

        foreach ($map as $key => $title) {
            PageContent::updateOrCreate(
                ['page' => 'trackingLessons', 'key' => $key],
                ['title' => $title, 'content' => $validated[$key]]
            );
        }

        return redirect()->route('admin.pages.tracking-lessons.edit')
            ->with('success', 'Speurlessen-pagina is opgeslagen.');
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
                    if ($old && $old->content && Storage::disk('public')->exists($old->content)) {
                        Storage::disk('public')->delete($old->content);
                    }

                    $path = $request->file($key)->store('images', 'public');

                    PageContent::updateOrCreate(
                        ['page' => $page, 'key' => $key],
                        ['title' => $title, 'content' => $path]
                    );
                }
            }
        }

        return redirect()->route('admin.images.edit')
            ->with('success', 'Afbeeldingen zijn bijgewerkt.');
    }
}
