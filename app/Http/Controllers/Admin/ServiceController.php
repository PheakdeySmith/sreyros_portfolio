<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the services.
     */
    public function index()
    {
        $services = Service::orderBy('order')->paginate(10);
        return view('backend.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new service.
     */
    public function create()
    {
        // Get the next order value
        $nextOrder = Service::max('order') + 1;
        return view('backend.services.create', compact('nextOrder'));
    }

    /**
     * Store a newly created service in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'required|integer|min:1',
        ]);

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = 'service_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('services', $filename, 'public');
            $validated['icon'] = $path;
        }

        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully.');
    }

    /**
     * Show the form for editing the specified service.
     */
    public function edit(Service $service)
    {
        return view('backend.services.edit', compact('service'));
    }

    /**
     * Update the specified service in storage.
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'order' => 'required|integer|min:1',
        ]);

        if ($request->hasFile('icon')) {
            // Delete old icon
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }

            $file = $request->file('icon');
            $filename = 'service_' . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('services', $filename, 'public');
            $validated['icon'] = $path;
        }

        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified service from storage.
     */
    public function destroy(Service $service)
    {
        // Delete icon
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
