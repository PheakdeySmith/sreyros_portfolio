<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    /**
     * Display a listing of the social links.
     */
    public function index()
    {
        $socialLinks = SocialLink::orderBy('order')->paginate(10);
        return view('backend.social_links.index', compact('socialLinks'));
    }

    /**
     * Show the form for creating a new social link.
     */
    public function create()
    {
        // Get the next order value
        $nextOrder = SocialLink::max('order') + 1;
        return view('backend.social_links.create', compact('nextOrder'));
    }

    /**
     * Store a newly created social link in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'required|string|max:255',
            'order' => 'required|integer|min:1',
        ]);

        SocialLink::create($validated);

        return redirect()->route('admin.social_links.index')
            ->with('success', 'Social link created successfully.');
    }

    /**
     * Show the form for editing the specified social link.
     */
    public function edit(SocialLink $socialLink)
    {
        return view('backend.social_links.edit', compact('socialLink'));
    }

    /**
     * Update the specified social link in storage.
     */
    public function update(Request $request, SocialLink $socialLink)
    {
        $validated = $request->validate([
            'platform' => 'required|string|max:255',
            'url' => 'required|url',
            'icon' => 'required|string|max:255',
            'order' => 'required|integer|min:1',
        ]);

        $socialLink->update($validated);

        return redirect()->route('admin.social_links.index')
            ->with('success', 'Social link updated successfully.');
    }

    /**
     * Remove the specified social link from storage.
     */
    public function destroy(SocialLink $socialLink)
    {
        $socialLink->delete();

        return redirect()->route('admin.social_links.index')
            ->with('success', 'Social link deleted successfully.');
    }
}
