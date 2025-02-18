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
        Schema::create('diakok', function (Blueprint $table) {
            $table->id("d_id");
            $table->timestamps();
            $table->string("nev",200);
            $table->date('szuletesi_datum');
            $table->string("email",50);
            $table->string("telefonszam",30);
            $table->foreignId("t_id")->references("t_id")->on("telepulesek");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diakok');
    }
};
