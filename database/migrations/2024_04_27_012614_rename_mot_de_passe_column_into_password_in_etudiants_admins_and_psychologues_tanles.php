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
        Schema::table('etudiants', function (Blueprint $table) {
            $table->renameColumn('mot_de_passe', 'password');
        });
        Schema::table('admins', function (Blueprint $table) {
            $table->renameColumn('mot_de_passe', 'password');
        });
        Schema::table('psychologues', function (Blueprint $table) {
            $table->renameColumn('mot_de_passe', 'password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('etudiants', function (Blueprint $table) {
            $table->renameColumn('password', 'mot_de_passe');
        });
        Schema::table('admins', function (Blueprint $table) {
            $table->renameColumn('password', 'mot_de_passe');
        });
        Schema::table('psychologues', function (Blueprint $table) {
            $table->renameColumn('password', 'mot_de_passe');
        });
    }
};
