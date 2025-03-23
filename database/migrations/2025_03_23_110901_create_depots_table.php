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
        Schema::create('depots', function (Blueprint $table) {
            $table->id();
            $table->string('police')->unique();
            $table->date('date');
            $table->decimal('montant', 10, 0);
            $table->string('libelle');
            $table->string('deposant');
            $table->string('telephone');
            $table->boolean('statut');
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->boolean('annule');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depots');
    }
};
