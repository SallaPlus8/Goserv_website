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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // صورة المقال
            $table->string('title_en'); // عنوان المقال
            $table->string('title_ar'); // عنوان المقال
            $table->string('slug')->unique();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // العلاقة مع جدول المستخدمين
            $table->text('content_en'); // محتوى المقال باللغة الإنجليزية
            $table->text('content_ar'); // محتوى المقال باللغة العربية
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // العلاقة مع جدول التصنيفات
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
