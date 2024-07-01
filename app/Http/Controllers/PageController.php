<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'role' => 'required',
            'image' => 'required|image'
        ]);

        $path = $request->file('image')->store('images', 'public');

        Page::create([
            'nama' => $request->nama,
            'role' => $request->role, 
            'image' => $path,
            'instagram' => $request->instagram,
            'content' => $request->content,
            'styles' => $request->styles
        ]);

        return redirect()->route('pages.index')->with('success', 'Developer created successfully.');
    }

    public function show(Page $page) 
    {
        return view('admin.pages.show', compact('page')); 
    }

    public function edit(Page $page) 
    {
        return view('admin.pages.edit', compact('page')); 
    }

    public function update(Request $request, Page $page) 
    {
        $request->validate([
            'nama' => 'required', 
            'role' => 'required',
            'image' => 'image'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $page->image = $path; 
        }

        $page->update([
            'nama' => $request->nama, 
            'role' => $request->role,
            'instagram' => $request->instagram,
            'content' => $request->content 
        ]);

        return redirect()->route('pages.index')->with('success', 'Developer updated successfully.'); 
    }

    public function destroy(Page $page)
    {
        $page->delete(); 
        return redirect()->route('pages.index')->with('success', 'Developer deleted successfully.'); 
    }
}
