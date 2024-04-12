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
        Schema::create('water_bills', function (Blueprint $table) {
            $table->string('water_bills_id', length: 20)->primary();
            $table->string('type_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->unsignedInteger('old_index');
            $table->unsignedInteger('new_index');
            $table->unsignedBigInteger('price_total');
            $table->date('date_start');
            $table->date('date_end');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('resident_id')->references('resident_id')->on('residents');
            $table->foreign('type_id')->references('type_id')->on('water_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('water_bills');
    }
};
