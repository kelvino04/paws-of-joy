<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::orderBy('sort_order')->get();

        return view('admin.tarifs.index', compact('prices'));
    }

    public function create()
    {
        return view('admin.tarifs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'second_dog_price' => 'nullable|numeric|min:0',
            'unit' => 'nullable|string|max:255',
            'sort_order' => 'required|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $validated['active'] = $request->boolean('active');

        Price::create($validated);

        return redirect('/admin/tarifs')->with(
            'success',
            'Het tarief is toegevoegd.'
        );
    }

    public function edit(Price $price)
    {
        return view('admin.tarifs.edit', compact('price'));
    }

    public function update(Request $request, Price $price)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'second_dog_price' => 'nullable|numeric|min:0',
            'unit' => 'nullable|string|max:255',
            'sort_order' => 'required|integer|min:0',
            'active' => 'nullable|boolean',
        ]);

        $validated['active'] = $request->boolean('active');

        $price->update($validated);

        return redirect('/admin/tarifs')->with(
            'success',
            'Het tarief is aangepast.'
        );
    }

    public function destroy(Price $price)
    {
        $price->delete();

        return redirect('/admin/tarifs')->with(
            'success',
            'Het tarief is verwijderd.'
        );
    }
}