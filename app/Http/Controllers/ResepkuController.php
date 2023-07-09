<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Resepku;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ResepkuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {   
        
                return Inertia::render('Resepku/Index', [

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
    public function store(Request $request):RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Resepku $resepku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resepku $resepku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resepku $resepku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resepku $resepku)
    {
        //
    }
}
