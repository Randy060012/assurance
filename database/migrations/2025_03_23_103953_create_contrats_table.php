<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->integer('apporteur_id');
            $table->integer('categorie_id');
            $table->string('numero_police')->unique();
            $table->date('date_operation')->nullable();
            $table->string('nom_assurer')->nullable();
            $table->string('prenom_assurer')->nullable();
            $table->date('date_effetuer')->nullable(); 
            $table->date('date_echeance')->nullable();
            $table->string('periode')->nullable();
            $table->string('immatriculation')->nullable();
            $table->string('marque')->nullable();
            $table->string('tel_assurer')->nullable();
            $table->string('num_attestation')->nullable();
            $table->decimal('prime_nette', 11, 0)->nullable();
            $table->decimal('commission', 11, 0)->nullable();
            $table->decimal('commission_payer', 10, 0)->nullable();
            $table->date('date_commission_payer')->nullable();
            $table->decimal('montant_total', 11, 0)->nullable();
            $table->decimal('montant_total_payer', 11, 0)->nullable();
            $table->boolean('supprimer')->default(0);
            $table->boolean('annule')->default(0);
            $table->boolean('statut')->default(0);
            $table->integer('created_by')->nullable();
            $table->integer('update_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
