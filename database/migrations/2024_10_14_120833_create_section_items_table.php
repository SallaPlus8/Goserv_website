<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionItemsTable extends Migration
{
    public function up()
    {
        Schema::create('section_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()->onDelete('cascade'); // ارتباط مع جدول sections
            $table->json('title');  // لدعم الترجمة
            $table->string('slug')->unique();
            $table->json('desc');   // لدعم الترجمة
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('section_items');
    }
}
