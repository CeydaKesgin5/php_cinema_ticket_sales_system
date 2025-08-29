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
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedInteger('capacity');
            $table->unsignedInteger('row_count')->nullable();
            $table->unsignedInteger('seats_per_row')->nullable();
            $table->enum('hall_type', ['standard', 'vip', 'imax'])->default('standard');
            $table->string('screen_type', 50)->nullable();
            $table->string('sound_system', 50)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halls');
    }
};
