<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.login');
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
    }

    // public function login(Request $request)
    // {
    //     $message = [
    //         "email.required" => "Votre email est requis",
    //         "email.exists" => "Votre email est invalide",
    //         "password.required" => "Le mot de passe est requis",
    //         "password.min" => "Le mot de passe est trop court",
    //     ];

    //     $validator = Validator::make($request->all(), [
    //         "email" => "bail|required|email|exists:users,email",
    //         "password" => "bail|required|min:8|max:50",
    //     ], $message);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Échec',
    //         ], 400);
    //     }
    //     $creds = $request->only('email', 'password');
    //     if (Auth::guard('web')->attempt($creds)) {
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Opération réussie',
    //         ], 200);
    //     }
    // }


    public function login(Request $request)
    {
        $message = [
            "email.required" => "Votre email est requis",
            "email.exists" => "Votre email est invalide",
            "password.required" => "Le mot de passe est requis",
            "password.min" => "Le mot de passe est trop court",
        ];

        $validator = Validator::make($request->all(), [
            "email" => "bail|required|email|exists:users,email",
            "password" => "bail|required|min:6|max:50",
        ], $message);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        $creds = $request->only('email', 'password');

        if (!Auth::guard('web')->attempt($creds)) {
            return response()->json([
                'success' => false,
                'message' => 'Email ou mot de passe incorrect.'
            ], 401);
        }
        return response()->json([
            'success' => true,
            'message' => 'Connexion réussie !',
            'redirect' => route('dashboard')
        ], 200);
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'success' => true,
            'message' => 'Déconnexion réussie !',
            'redirect' => route('auth.login')
        ], 200);
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
