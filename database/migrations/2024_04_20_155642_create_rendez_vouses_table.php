<?php

use App\Models\Ecole;

use App\Models\Etudiant;
use App\Models\Psychologue;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('heure_debut')->min(0)->max(23);
            $table->integer('minute_debut')->min(0)->max(59);
            $table->integer('heure_fin')->min(0)->max(23);
            $table->integer('minute_fin')->min(0)->max(59);
            $table->String('comentaire');
            $table->char('active', 1)->default('a');
            $table->timestamps();
                /*
                    t -> actif 
                    f -> refuser
                    a -> en attente 

                */

            // IMPORTATION DES TABLES PSY ET ETUDIANT
            $table->foreignIdFor(Psychologue::class)->constrained();
            $table->foreignIdFor(Etudiant::class)->constrained();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
