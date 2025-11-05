<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    use AuthorizesRequests;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', question::class);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', question::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(question $question)
    {
        $this->authorize('view', question::class);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, question $question)
    {
        $this->authorize('update', question::class);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(question $question)
    {
        $this->authorize('delete', question::class);
    }
}
