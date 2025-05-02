<?php

namespace App\Http\Controllers\Assurance;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $utilisateurs = Utilisateur::latest()->get();
        return view('utilisateur/index', compact('utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('utilisateur/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:500',
            'prenom' => 'required|string|max:255',
            'contact' => 'required|string|unique:utilisateurs,contact',
            'password' => 'required|string|min:6|max:8',
        ]);
        try {
            // $code = strtoupper(Str::random(8));

            $year = date('Y');
            $nomPart = strtoupper(substr($request->nom, 0, 3));
            $prenomPart = strtoupper(substr($request->prenom, 0, 3));
            $username = $nomPart . $prenomPart . $year;

            $utilisateur = Utilisateur::create([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'username' => $username,
                'contact' => $request->contact,
                'password' => bcrypt($request->password),

            ]);

            return back()->with('success', 'Utilisateur ajouté avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de l\'ajout d\'un utilisateur');
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
        $data = Utilisateur::find($id);
        return view('utilisateur/edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:500',
            'prenom' => 'required|string|max:255',
            'contact' => 'required|string|unique:utilisateurs,contact,' . $id,
        ]);

        try {
            $utilisateur = Utilisateur::findOrFail($id);

            $year = date('Y');
            $nomPart = strtoupper(substr($request->nom, 0, 3));
            $prenomPart = strtoupper(substr($request->prenom, 0, 3));
            $newUsername = $nomPart . $prenomPart . $year;

        
            $utilisateur->update([
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'username' => $newUsername,
                'contact' => $request->contact,
                'password' => $request->password ? bcrypt($request->password) : $utilisateur->password,
            ]);

            return redirect()->route('index.utilisateur')->with('success', 'Utilisateur mis à jour avec succès');
        } catch (\Exception $e) {
            return back()->with('error', 'Problème lors de la mise à jour de l\'utilisateur');
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
