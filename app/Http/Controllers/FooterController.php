<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class FooterController extends Controller
{
    public function index() {
        $footers = Footer::paginate(5);
        return view('Admin.LandingPage.footer', compact('footers'));
    }

    public function create()
    {
        return view('footer.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon_tulisan' => 'nullable|array|max:6',
            'keterangan' => 'nullable|array|max:6',
            'icon_link' => 'nullable|array|max:6',
            'link' => 'nullable|array|max:6',
            'nama_link_website' => 'nullable|array|max:6',
            'link_website' => 'nullable|array|max:6',
        ]);

        $footer = new Footer();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('footer_images', 'public');
            $footer->image = $imagePath;
        }

        $footer->icon_tulisan = json_encode($request->icon_tulisan);
        $footer->keterangan = json_encode($request->keterangan);
        $footer->icon_link = json_encode($request->icon_link);
        $footer->link = json_encode($request->link);
        $footer->nama_link_website = json_encode($request->nama_link_website);
        $footer->link_website = json_encode($request->link_website);
        $footer->save();

        return redirect()->route('footer.index')->with('success', 'Footer created successfully.');
    }

    public function edit(Footer $footer)
    {
        return view('footer.edit', compact('footer'));
    }

    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon_tulisan' => 'nullable|array|max:6',
            'keterangan' => 'nullable|array|max:6',
            'icon_link' => 'nullable|array|max:6',
            'link' => 'nullable|array|max:6',
            'nama_link_website' => 'nullable|array|max:6',
            'link_website' => 'nullable|array|max:6',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($footer->image) {
                Storage::disk('public')->delete($footer->image);
            }

            $imagePath = $request->file('image')->store('footer_images', 'public');
            $footer->image = $imagePath;
        }

        $footer->icon_tulisan = json_encode($request->icon_tulisan);
        $footer->keterangan = json_encode($request->keterangan);
        $footer->icon_link = json_encode($request->icon_link);
        $footer->link = json_encode($request->link);
        $footer->nama_link_website = json_encode($request->nama_link_website);
        $footer->link_website = json_encode($request->link_website);
        $footer->save();

        return redirect()->route('footer.index')->with('success', 'Footer updated successfully.');
    }

    public function destroy(Footer $footer)
    {
        if ($footer->image) {
            Storage::disk('public')->delete($footer->image);
        }

        $footer->delete();
        return redirect()->route('footer.index')->with('success', 'Footer deleted successfully.');
    }
}
