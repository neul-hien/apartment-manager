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
        Schema::create('parking_requests', function (Blueprint $table) {
            $table->string('parking_requests_id', length: 20)->primary();
            $table->string('apartment_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->string('parking_types_id', length: 20);
            $table->string('license_plates');
            $table->unsignedBigInteger('price');
            $table->date('request_date');
            $table->date('approval_date');
            $table->boolean('request_status');
            $table->boolean('approval_status');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');
            $table->foreign('resident_id')->references('resident_id')->on('residents');
            $table->foreign('parking_types_id')->references('parking_types_id')->on('parking_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parking_requests');
    }
};
