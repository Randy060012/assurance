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
            $table->string('police')->unique();
            $table->date('date_ope');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_effet');
            $table->date('date_echeance');
            $table->string('periode');
            $table->string('immat');
            $table->string('marque');
            $table->string('tel_assure');
            $table->decimal('num_attest', 11, 0);
            $table->decimal('pnette', 11, 0);
            $table->integer('commission');
            $table->decimal('compayer', 10, 0);
            $table->boolean('com_statut');
            $table->date('date_compayer');
            $table->decimal('prix_total', 11, 0);
            $table->boolean('sup');
            $table->boolean('statut');
            $table->integer('created_by');
            $table->integer('update_by');
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
