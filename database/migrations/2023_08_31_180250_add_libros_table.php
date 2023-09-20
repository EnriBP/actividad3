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
        Schema::table('libros', function(Blueprint $table){
            $table->string('titulo')->nullable();
            $table->string('autor')->nullable();
            $table->integer('año_publicacion')->nullable();
            $table->string('genero')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('libros', function(Blueprint $table){
            $table->dropColumn('titulo');
            $table->dropColumn('autor');
            $table->dropColumn('año_publicacion');
            $table->dropColumn('genero');
            $table->dropColumn('disponible');
        });
    }
};
