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
        Schema::create('trash_bills', function (Blueprint $table) {
            $table->string('trash_bills_id', length: 20)->primary();
            $table->string('trash_fee_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->string('apartment_id', length: 20);
            $table->unsignedBigInteger('price_total');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('resident_id')->references('resident_id')->on('residents');
            $table->foreign('trash_fee_id')->references('trash_fee_id')->on('trash_fees');
            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trash_bills');
    }
};
