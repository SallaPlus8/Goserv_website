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
        Schema::create('Statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('completed_projects');
            $table->integer('current_client');
            $table->integer('current_projects');
            $table->integer('satisfied_client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statics');
    }
};
