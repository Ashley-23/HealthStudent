<?php

use App\Models\Ecole;

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
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->int("heure_debut");
            $table->int("minute_debut");
            $table->int("heure_fin");
            $table->int("minute_fin");
            $table->String("comentaire");
            $table->timestamps();

            //IMPORTATION DES TABLES PSY ET ETUDIANT
            // $table->foreignIdFor(Pychlogue::class)->constrained();
            // $table->foreignIdFor(tudiant::class)->constrained();

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