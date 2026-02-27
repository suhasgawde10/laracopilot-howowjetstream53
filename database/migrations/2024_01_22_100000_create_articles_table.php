<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->enum('category', ['News', 'Article'])->default('Article');
            $table->longText('description');
            $table->string('thumbnail')->nullable();
            $table->string('tags')->nullable();
            $table->date('publish_date');
            $table->enum('status', ['published', 'draft'])->default('draft');
            $table->string('author')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};