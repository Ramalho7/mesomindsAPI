<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentImage;
use App\Models\ContentImage;
use Illuminate\Http\Request;

class ContentImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContentImage $request)
    {
        $validated = $request->validated();

        $path = $request->file('image')->store('images', 'public');

        $image = ContentImage::create([
            'file_name' => $request->file('image')->getClientOriginalName(),
            'file_path' => $path,
            'alt_text' => $request->input('alt_text'),
        ]);

        return response()->json([
            'success' => true,
            'path' => $image,
            'url' => asset('storage/'.$path),
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(ContentImage $contentImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContentImage $contentImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContentImage $contentImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContentImage $contentImage)
    {
        //
    }
}
