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
        Schema::create('news', function (Blueprint $table) {
            $table->string('news_id', length: 20)->primary();
            $table->string('resident_id', length: 20);
            $table->string('title');
            $table->text('description');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('resident_id')->references('resident_id')->on('residents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
