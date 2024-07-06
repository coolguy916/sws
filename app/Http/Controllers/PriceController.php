<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();
        return view('admin.landingpage.pricing', compact('prices'));
    }

    public function create()
    {
        return view('pricing.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'list' => 'nullable|array',
            'harga' => 'required|string|max:255'
        ]);

        $price = new Price();
        $price->judul = $request->judul;
        $price->icon = $request->icon;
        $price->list = json_encode($request->list);
        $price->harga = $request->harga;
        $price->save();

        return redirect()->route('prices.index')->with('success', 'Price created successfully.');
    }

    public function edit(Price $price)
    {
        return view('pricing.edit', compact('price'));
    }

    public function update(Request $request, Price $price)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'list' => 'nullable|array',
            'harga' => 'required|string|max:255'
        ]);

        $price->judul = $request->judul;
        $price->icon = $request->icon;
        $price->list = json_encode($request->list);
        $price->harga = $request->harga;
        $price->save();

        return redirect()->route('prices.index')->with('success', 'Price updated successfully.');
    }

    public function destroy(Price $price)
    {
        $price->delete();
        return redirect()->route('prices.index')->with('success', 'Price deleted successfully.');
    }
}



