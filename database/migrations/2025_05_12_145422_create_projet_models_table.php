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
        Schema::create('projet_models', function (Blueprint $table) {
            $table->id();
            $table->string('nom_service')->nullable();
            $table->longText('petite_desc_service')->nullable();
            $table->longText('long_desc_service')->nullable();
            $table->string('photo')->nullable();
            $table->string('photo_banniere')->nullable();
            $table->string('video_youtube')->nullable();
            $table->string('audio')->nullable();
            $table->integer('categorie_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet_models');
    }
};
