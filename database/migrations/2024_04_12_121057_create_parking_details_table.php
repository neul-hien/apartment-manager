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
        Schema::create('parking_details', function (Blueprint $table) {
            $table->string('parking_bills_id', length: 20);
            $table->string('apartment_id', length: 20);
            $table->integer('amount');
            $table->unsignedBigInteger('price');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('parking_bills_id')->references('parking_bills_id')->on('parking_bills');
            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');

            $table->primary(['parking_bills_id', 'apartment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_details');
    }
};
