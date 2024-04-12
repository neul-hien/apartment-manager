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
        Schema::create('parking_bills', function (Blueprint $table) {
            $table->string('parking_bills_id', length: 20)->primary();
            $table->string('parking_types_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->unsignedBigInteger('price_total');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('resident_id')->references('resident_id')->on('residents');
            $table->foreign('parking_types_id')->references('parking_types_id')->on('parking_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_bills');
    }
};
