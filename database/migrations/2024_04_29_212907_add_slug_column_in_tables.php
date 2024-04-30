<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    static array $tables = [
        'admins',
        'ecoles',
        'etudiants',
        'psychologues',
        'rendez_vouses',
        'users',
    ];

    public function up(): void
    {
        foreach (static::$tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->string('slug', 100);
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (static::$tables as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->dropColumn('slug');
            });
        }
    }
};
