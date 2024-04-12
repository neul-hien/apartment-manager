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
        Schema::create('debl_bills', function (Blueprint $table) {
            $table->string('debl_bills_id', length: 20)->primary();
            $table->string('apartment_id', length: 20);
            $table->string('debl_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->string('name');
            $table->unsignedBigInteger('price');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');
            $table->foreign('resident_id')->references('resident_id')->on('residents');
            $table->foreign('debl_id')->references('debl_id')->on('debl_percents');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debl_bills');
    }
};
