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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->text('description')->nullable();
            $table->unsignedInteger('duration');
            $table->string('genre', 100)->nullable();
            $table->string('rating', 10)->nullable();
            $table->string('director', 100)->nullable();
            $table->text('cast')->nullable();
            $table->string('poster_image', 255)->nullable();
            $table->string('trailer_url', 255)->nullable();
            $table->date('release_date')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
