<?php

namespace App\Http\Controllers;

use App\Models\alternative;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize("viewAny",alternative::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize("create",alternative::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(alternative $alternative)
    {
        $this->authorize("view",alternative::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, alternative $alternative)
    {
        $this->authorize("update",alternative::class);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(alternative $alternative)
    {
        $this->authorize("delete",alternative::class);
    }
}
