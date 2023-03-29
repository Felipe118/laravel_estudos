<?php

namespace App\Http\Controllers;

use App\Models\LevantamentoIri;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LevantamentoIriController extends Controller
{
    public function index()
    {
        return Inertia::render('Levantamento/LevantamentoIri');
    }

    public function store(Request $request)
    {
        LevantamentoIri::create([
            'rodovia' => $request->rodovia,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return response()->json(['IRI cadastrada com sucesso']);
    }
}
