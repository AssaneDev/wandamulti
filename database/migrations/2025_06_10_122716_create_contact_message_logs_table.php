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
          Schema::create('contact_message_logs', function (Blueprint $table) {
        $table->id();
        $table->string('name')->nullable();
        $table->string('email');
        $table->string('phone');
        $table->string('projet')->nullable();
        $table->text('message');
        $table->string('source'); // classic ou page
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_message_logs');
    }
};
