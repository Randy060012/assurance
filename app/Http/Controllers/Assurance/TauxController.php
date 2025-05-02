<?php

namespace App\Http\Controllers\Assurance;

use App\Http\Controllers\Controller;
use App\Models\Apporteur;
use App\Models\Categorie;
use App\Models\Taux;
use Illuminate\Http\Request;

class TauxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apporteurs = Apporteur::latest()->get();
        $categories = Categorie::latest()->get();
        $tauxs = Taux::latest()->get();
        return view('taux/index', compact('apporteurs', 'categories', 'tauxs'));
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
        $request->validate([
            'apporteur_id' => 'required|integer|exists:apporteurs,id',
            'categorie_id' => 'required|integer|exists:categories,id',
            'pourcentage' => 'required|numeric|min:0|max:100',
        ], [
            'apporteur_id.required' => 'Le champ apporteur est obligatoire.',
            'apporteur_id.integer' => 'L’apporteur sélectionné est invalide.',
            'apporteur_id.exists' => 'L’apporteur sélectionné n’existe pas.',

            'categorie_id.required' => 'Le champ catégorie est obligatoire.',
            'categorie_id.integer' => 'La catégorie sélectionnée est invalide.',
            'categorie_id.exists' => 'La catégorie sélectionnée n’existe pas.',

            'pourcentage.required' => 'Le champ pourcentage est obligatoire.',
            'pourcentage.numeric' => 'Le pourcentage doit être un nombre.',
            'pourcentage.min' => 'Le pourcentage doit être au moins de 0.',
            'pourcentage.max' => 'Le pourcentage ne doit pas dépasser 100.',
        ]);

        try {

            $taux  = Taux::create([
                'apporteur_id' => $request->apporteur_id,
                'categorie_id' => $request->categorie_id,
                'pourcentage' => $request->pourcentage,
            ]);

            return back()->with('success', 'Taux ajouté avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de l\'ajout d\'un taux');
        }
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
