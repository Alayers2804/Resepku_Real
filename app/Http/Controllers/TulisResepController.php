<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use App\Models\Resepku;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TulisResepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Resepku/TulisResep', [

        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TulisResep $tulisResep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TulisResep $tulisResep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TulisResep $tulisResep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TulisResep $tulisResep)
    {
        //
    }
}
