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
        Schema::create('resources', function (Blueprint $table) {
            $table->string('resource_id', length: 20)->primary();
            $table->string('type_id', length: 20);
            $table->string('name');
            $table->string('unit');
            $table->integer('amount');
            $table->text('other_info');
            $table->timestamps();

            $table->foreign('type_id')->references('type_id')->on('resource_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resources');
    }
};
