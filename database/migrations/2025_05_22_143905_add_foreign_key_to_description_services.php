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
        Schema::table('description_services', function (Blueprint $table) {
            // Assure-toi que la colonne existe
            if (!Schema::hasColumn('description_services', 'id_service')) {
                $table->unsignedBigInteger('id_service')->after('id');
            }

            // Ajoute la clé étrangère avec cascade
            $table->foreign('id_service')
                  ->references('id')
                  ->on('section_model2s') // ou le nom exact de ta table des services
                  ->onDelete('cascade');
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('description_services', function (Blueprint $table) {
             $table->dropForeign(['id_service']);
        });
    }
};
