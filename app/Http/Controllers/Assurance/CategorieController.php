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
            $year = date('Y');
            $firstLetter = chr(rand(ord('A'), ord('X')));
            $secondLetter = chr(ord($firstLetter) + 1);
            $thirdLetter = chr(ord($firstLetter) + 2);
            $code = $year . $firstLetter . $secondLetter . $thirdLetter;

            $categorie = Categorie::create([
                'code' => $code,
                'libelle' => $request->libelle,
            ]);

            return back()->with('success', 'Categorie ajouté avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de l\'ajout d\'un categorie');
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
    public function update(Request $request)
    {
        //

        $request->validate([
            'libelle' => 'required|string|max:255',
        ]);

        try {
            $catg_id = $request->input('catg_id');
            $categorie = Categorie::findOrFail($catg_id);


            if (empty($categorie->code)) {
                $year = date('Y');
                $firstLetter = chr(rand(ord('A'), ord('X')));
                $secondLetter = chr(ord($firstLetter) + 1);
                $thirdLetter = chr(ord($firstLetter) + 2);
                $categorie->code = $year . $firstLetter . $secondLetter . $thirdLetter;
            }

            $categorie->update([
                'code' => $categorie->code,
                'libelle' => $request->libelle,
            ]);

            return back()->with('success', 'Categorie mis à jour avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de la mise à jour d\'une categorie');
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
