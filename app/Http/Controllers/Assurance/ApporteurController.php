<?php

namespace App\Http\Controllers\Assurance;

use App\Http\Controllers\Controller;
use App\Models\Apporteur;
use Illuminate\Http\Request;

class ApporteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $apporteurs = Apporteur::latest()->get();
        return view('apporteur/index', compact('apporteurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('apporteur/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:500',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|unique:apporteurs,telephone,',
            'taux_taxe' => 'required|string',
        ]);
        try {
            // $code = strtoupper(Str::random(8));
            $year = date('Y');
            $firstLetter = chr(rand(ord('A'), ord('X')));
            $secondLetter = chr(ord($firstLetter) + 1);
            $thirdLetter = chr(ord($firstLetter) + 2);
            $code = $year . $firstLetter . $secondLetter . $thirdLetter;
            $apporteur = Apporteur::create([
                'code' => $code,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'telephone' => $request->telephone,
                'taux_taxe' => $request->taux_taxe,
            ]);

            return back()->with('success', 'Apporteur ajouté avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de l\'ajout d\'un apporteur');
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
        $data = Apporteur::find($id);
        return view('apporteur/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:500',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|unique:apporteurs,telephone,' . $id,
            'taux_taxe' => 'required|string',
        ]);

        try {
            $apporteur = Apporteur::findOrFail($id);

            if (empty($apporteur->code)) {
                $year = date('Y');
                $firstLetter = chr(rand(ord('A'), ord('X')));
                $secondLetter = chr(ord($firstLetter) + 1);
                $thirdLetter = chr(ord($firstLetter) + 2);
                $apporteur->code = $year . $firstLetter . $secondLetter . $thirdLetter;
            }

            $apporteur->update([
                'code' => $apporteur->code,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'telephone' => $request->telephone,
                'taux_taxe' => $request->taux_taxe,
            ]);

            return redirect()->route('index.apporteur')->with('success', 'Apporteur mis à jour avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de la mise à jour de l\'apporteur');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
