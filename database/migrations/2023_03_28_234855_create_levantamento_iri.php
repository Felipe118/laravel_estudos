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
        Schema::create('levantamento_iri', function (Blueprint $table) {
            $table->id();
            $table->string('Rodovia');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('geometrico')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levantamento_iri');
    }
};
