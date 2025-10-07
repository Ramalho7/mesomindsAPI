<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContentType;
use App\Models\ContentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentTypeController extends Controller
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
    public function store(StoreContentType $request)
    {
        try{
            $validated = $request->validated();

            $user = Auth::user();

            $validated['criador'] = $user->id;

            $validated['ultimo_editor'] = $user->id;

            $contentType = ContentType::create($validated);

            return response()->json([
                'success' => true,
                'message' => 'Tipo de conteúdo cadastrado com sucesso',
                'data' => $contentType,
            ], 201);
        }catch(\Exception $e){
            return response()->json([
                'sucess' => false,
                'message' => 'Erro ao criar tipo de conteúdo',
                'error' => $e->getMessage(),
            ], 500);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(ContentType $contentType)
    {
        return response()->json([
            'success' => true,
            'data' => $contentType->load(['creator', 'lastEditor']),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contentType $contentType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contentType $contentType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contentType $contentType)
    {
        //
    }
}
