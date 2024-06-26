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
        Schema::create('image_apartments', function (Blueprint $table) {
            $table->string('image_id', length: 20)->primary();
            $table->string('apartment_id', length: 20);
            $table->string('url');
            $table->boolean('status');
            $table->timestamps();
            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_apartments');
    }
};
