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
        Schema::create('water_bill_details', function (Blueprint $table) {
            $table->string('water_bills_id', length: 20);
            $table->string('apartment_id', length: 20);
            $table->integer('usage_number');
            $table->unsignedBigInteger('price');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('water_bills_id')->references('water_bills_id')->on('water_bills');
            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');

            $table->primary(['water_bills_id', 'apartment_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_bill_details');
    }
};
