<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Model3d;
use App\Models\Subject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class Model3dController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $model3ds = Model3d::with('subject')->latest()->get();
        return view('admin.models.3d.index', compact('model3ds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $subjects = Subject::where('is_active', true)->orderBy('subject_name')->get();
        return view('admin.models.3d.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'subject_id' => ['required', 'exists:subjects,id'],
            'name' => ['required', 'string', 'max:255'],
            'file' => [
                'required',
                'file',
                'max:102400', // Max 100MB for GLB files
                function ($attribute, $value, $fail) {
                    if ($value && $value->isValid()) {
                        $extension = strtolower($value->getClientOriginalExtension());
                        
                        // Check extension - this is the most reliable check for GLB files
                        if ($extension !== 'glb') {
                            $fail('The file must be a GLB file.');
                        }
                    }
                },
            ],
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:5120'], // Max 5MB
            'description' => ['nullable', 'string'],
            'tags' => ['nullable', 'string', 'max:500'],
        ]);

        // Handle GLB file upload - preserve .glb extension
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
            // Ensure .glb extension
            if (!str_ends_with(strtolower($filename), '.glb')) {
                $filename .= '.glb';
            }
            $filePath = $file->storeAs('models/3d', $filename, 'public');
            $validated['file'] = $filePath;
        }

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('models/3d/thumbnails', 'public');
            $validated['thumbnail'] = $thumbnailPath;
        }

        Model3d::create($validated);

        return redirect()->route('admin.models.3d.index')
            ->with('success', '3D model created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Model3d $model3d): View
    {
        $model3d->load('subject');
        return view('admin.models.3d.show', compact('model3d'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Model3d $model3d): View
    {
        $subjects = Subject::where('is_active', true)->orderBy('subject_name')->get();
        return view('admin.models.3d.edit', compact('model3d', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Model3d $model3d): RedirectResponse
    {
        $validated = $request->validate([
            'subject_id' => ['required', 'exists:subjects,id'],
            'name' => ['required', 'string', 'max:255'],
            'file' => [
                'nullable',
                'file',
                'max:102400', // Max 100MB for GLB files
                function ($attribute, $value, $fail) {
                    if ($value && $value->isValid()) {
                        $extension = strtolower($value->getClientOriginalExtension());
                        
                        // Check extension
                        if ($extension !== 'glb') {
                            $fail('The file must be a GLB file.');
                            return;
                        }
                    }
                },
            ],
            'thumbnail' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:5120'], // Max 5MB
            'description' => ['nullable', 'string'],
            'tags' => ['nullable', 'string', 'max:500'],
        ]);

        // Handle GLB file upload - preserve .glb extension
        if ($request->hasFile('file')) {
            // Delete old file if exists
            if ($model3d->file && Storage::disk('public')->exists($model3d->file)) {
                Storage::disk('public')->delete($model3d->file);
            }
            $file = $request->file('file');
            $filename = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());
            // Ensure .glb extension
            if (!str_ends_with(strtolower($filename), '.glb')) {
                $filename .= '.glb';
            }
            $filePath = $file->storeAs('models/3d', $filename, 'public');
            $validated['file'] = $filePath;
        } else {
            // Keep existing file if not updating
            unset($validated['file']);
        }

        // Handle thumbnail upload
        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if exists
            if ($model3d->thumbnail && Storage::disk('public')->exists($model3d->thumbnail)) {
                Storage::disk('public')->delete($model3d->thumbnail);
            }
            $thumbnailPath = $request->file('thumbnail')->store('models/3d/thumbnails', 'public');
            $validated['thumbnail'] = $thumbnailPath;
        } else {
            // Keep existing thumbnail if not updating
            unset($validated['thumbnail']);
        }

        $model3d->update($validated);

        return redirect()->route('admin.models.3d.index')
            ->with('success', '3D model updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Model3d $model3d): RedirectResponse
    {
        // Delete GLB file if exists
        if ($model3d->file && Storage::disk('public')->exists($model3d->file)) {
            Storage::disk('public')->delete($model3d->file);
        }

        // Delete thumbnail if exists
        if ($model3d->thumbnail && Storage::disk('public')->exists($model3d->thumbnail)) {
            Storage::disk('public')->delete($model3d->thumbnail);
        }

        // Delete the model record
        $model3d->delete();

        return redirect()->route('admin.models.3d.index')
            ->with('success', '3D model and associated files deleted successfully.');
    }
}
