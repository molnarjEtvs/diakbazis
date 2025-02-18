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
        Schema::create('diak_beszelt_nyelvek', function (Blueprint $table) {
            $table->id("dbny_id");
            $table->foreignId('d_id')->references('d_id')->on('diakok');
            $table->foreignId('ny_id')->references('ny_id')->on('nyelvek');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diak_beszelt_nyelvek');
    }
};
