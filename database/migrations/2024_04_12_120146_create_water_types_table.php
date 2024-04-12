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
        Schema::create('water_types', function (Blueprint $table) {
            $table->string('type_id', length: 20)->primary();
            $table->string('name');
            $table->unsignedBigInteger('price');
            $table->integer('range_from');
            $table->integer('range_to');
            $table->string('unit');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_types');
    }
};
