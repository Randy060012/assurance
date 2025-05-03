<?php

namespace App\Http\Controllers\Assurance;

use App\Http\Controllers\Controller;
use App\Models\Depense;
use App\Models\Typedepense;
use Illuminate\Http\Request;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $depenses = Depense::latest()->get();
        return view('operation.caisse.index', compact('depenses'));
    }

    public function index_tdd()
    {
        //
        $type_depenses = Typedepense::latest()->get();
        return view('operation.type-depense', compact('type_depenses'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $depenses = Depense::latest()->get();
        $type_depenses = Typedepense::latest()->get();
        return view('operation.caisse.create', compact('depenses','type_depenses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'type_depense_id' => 'required|integer|exists:typedepenses,id',
            'libelle' => 'required|string',
            'montant' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
        ], [
            'type_depense_id.required' => 'Le champ apporteur est obligatoire.',
            'type_depense_id.integer' => 'Le type sélectionné est invalide.',
            'type_depense_id.exists' => 'Le type sélectionné n’existe pas.',

            'libelle.required' => 'Le champ apporteur est obligatoire.',
            'montant.required' => 'Le champ apporteur est obligatoire.',
            'description.required' => 'Le champ apporteur est obligatoire.',
            'date.required' => 'Le champ apporteur est obligatoire.',
        ]);

        try {

            $depense  = Depense::create([
                'type_depense_id' => $request->type_depense_id,
                'libelle' => $request->libelle,
                'montant' => $request->montant,
                'description' => $request->description,
                'date' => $request->date,
            ]);

            return back()->with('success', 'Dépenses a été ajoutée avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de l\'ajout d\'une dépense');
        }
    }

    public function store_tdd(Request $request)
    {
        //
        $request->validate([
            'libelle' => 'required|string',
        ], [
            'libelle.required' => 'Le champ apporteur est obligatoire.',
        ]);

        try {

            $type  = Typedepense::create([
                'libelle' => $request->libelle,
            ]);

            return back()->with('success', 'Type de dépenses ajouté avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de l\'ajout d\'un type de dépenses');
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
