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
        Schema::create('maintenance_fees', function (Blueprint $table) {
            $table->string('maintenance_id', length: 20)->primary();
            $table->string('maintenance_name');
            $table->string('maintenance_unit');
            $table->string('maintenance_price');
            $table->string('maintenance_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_fees');
    }
};
