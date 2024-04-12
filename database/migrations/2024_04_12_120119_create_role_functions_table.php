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
        Schema::create('role_functions', function (Blueprint $table) {
            $table->string('function_id', length: 20);
            $table->string('role_id', length: 20);
            $table->timestamps();

            $table->foreign('function_id')->references('function_id')->on('function_tbs');
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->primary(['function_id', 'role_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_functions');
    }
};
