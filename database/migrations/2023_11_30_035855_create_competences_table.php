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
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('force');
            $table->integer('endurance');
            $table->integer('technique')->nullable();
            $table->integer('precision')->nullable();
            $table->integer('coordination')->nullable();
            $table->integer('concentration')->nullable();
            $table->integer('reactivite')->nullable();
            $table->integer('strategie_jeu')->nullable();
            $table->integer(' vitesse')->nullable();
            $table->integer('travail_equipe')->nullable();
            $table->integer('resilience')->nullable();
            $table ->integer('gestion_pression')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competences');
    }
};
