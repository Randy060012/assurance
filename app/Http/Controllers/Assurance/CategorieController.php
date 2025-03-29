<?php

namespace App\Http\Controllers\Assurance;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Categorie::latest()->get();
        return view('categorie/index', compact('categories'));
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
        $request->validate([
            'libelle' => 'required|string|max:255',
        ]);

        try {
            // $code = strtoupper(Str::random(8));

            // Année actuelle
            $year = date('Y');

            // Générer une lettre aléatoire entre 'A' et 'X'
            $firstLetter = chr(rand(ord('A'), ord('X')));

            // Générer les deux lettres suivantes
            $secondLetter = chr(ord($firstLetter) + 1);
            $thirdLetter = chr(ord($firstLetter) + 2);

            // Construire le code final
            $code = $year . $firstLetter . $secondLetter . $thirdLetter;

            $categorie = Categorie::create([
                'code' => $code,
                'libelle' => $request->libelle,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Catégorie ajoutée avec succès !',
                'data' => $categorie
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur interne : ' . $e->getMessage()
            ], 500);
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
