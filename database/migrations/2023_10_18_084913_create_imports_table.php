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
        Schema::create('imports', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('level1');
            $table->string('level2');
            $table->string('level3');
            $table->string('price');
            $table->string('price_sp');
            $table->string('quantity');
            $table->string('properties');
            $table->string('purchases');
            $table->string('image');
            $table->string('show');
            $table->string('description');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imports');
    }
};
