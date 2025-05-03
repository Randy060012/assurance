<?php

namespace App\Http\Controllers\Assurance;

use App\Http\Controllers\Controller;
use App\Models\Apporteur;
use App\Models\Categorie;
use App\Models\Contrat;
use App\Models\Taux;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apporteurs = Apporteur::latest()->get();
        $categories = Categorie::latest()->get();
        $contrats = Contrat::latest()->get();
        return view('contrat/index', compact('apporteurs', 'categories', 'contrats'));
    }

    public function getApporteur($categorie_id)
    {
        $taux = Taux::with('apporteur')->where('categorie_id', $categorie_id)->first();

        if (!$taux) {
            return response()->json(['error' => 'Aucun apporteur trouvé'], 404);
        }

        return response()->json([
            'apporteur_id' => $taux->apporteur->id,
            'apporteur_nom' => $taux->apporteur->nom,
            'pourcentage' => $taux->pourcentage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $apporteurs = Apporteur::latest()->get();
        $categories = Categorie::latest()->get();
        return view('contrat/create', compact('apporteurs', 'categories'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
