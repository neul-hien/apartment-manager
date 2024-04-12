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
        Schema::create('requests', function (Blueprint $table) {
            $table->string('requests_id', length: 20)->primary();
            $table->string('type_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->string('apartment_id', length: 20);
            $table->text('description');
            $table->date('date_request');
            $table->date('date_apcept');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
