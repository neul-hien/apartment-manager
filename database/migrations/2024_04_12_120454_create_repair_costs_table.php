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
        Schema::create('repair_costs', function (Blueprint $table) {
            $table->string('repair_costs_id', length: 20)->primary();
            $table->string('resource_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->date('date_repair');
            $table->unsignedBigInteger('cost');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repair_costs');
    }
};
