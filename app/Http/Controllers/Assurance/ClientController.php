<?php

namespace App\Http\Controllers\Assurance;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clients = Client::latest()->get();
        return view('client/index', compact('clients'));
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
            'nom' => 'required|string|max:500',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string',
        ]);

        try {
            // $code = strtoupper(Str::random(8));

            $year = date('Y');

            $firstLetter = chr(rand(ord('A'), ord('X')));

            $secondLetter = chr(ord($firstLetter) + 1);
            $thirdLetter = chr(ord($firstLetter) + 2);

            $code = $year . $firstLetter . $secondLetter . $thirdLetter;

            $client = Client::create([
                'code' => $code,
                'nom' => $request->nom,
                'prenom' => $request->prenom,
                'telephone' => $request->telephone,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Client ajoutée avec succès !',
                'data' => $client
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


    public function find(Request $request)
    {
        // Récupère la valeur de la recherche
        $search = $request->search;

        // Assure-toi que la recherche n'est pas vide
        if (empty($search)) {
            return response()->json([
                'success' => false,
                'message' => 'Aucun critère de recherche fourni.',
            ]);
        }

        // Recherche en fonction de l'entrée de l'utilisateur dans les champs 'nom', 'prenom', 'code' et 'telephone'
        $clients = Client::query()
            ->where('nom', 'LIKE', "%$search%")
            ->orWhere('prenom', 'LIKE', "%$search%")
            ->orWhere('code', 'LIKE', "%$search%")
            ->orWhere('telephone', 'LIKE', "%$search%")
            ->get();

        // Retourner les résultats
        return response()->json([
            'success' => true,
            'clients' => $clients,
        ]);
    }
}
