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
        Schema::create('section_model2s', function (Blueprint $table) {
            $table->id();
            $table->string('titre_section')->nullable();
            $table->string('desc_section')->nullable();
            $table->string('nom_service')->nullable();
            $table->longText('petite_desc_service')->nullable();
            $table->longText('long_desc_service')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_model2s');
    }
};
