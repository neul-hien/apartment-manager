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
        Schema::create('list_residents', function (Blueprint $table) {
            $table->string('list_id', length: 20);
            $table->string('resident_id', length: 20);
            $table->boolean('seen');
            $table->timestamps();

            $table->foreign('list_id')->references('list_id')->on('notify_lists');
            $table->foreign('resident_id')->references('resident_id')->on('residents');

            $table->primary(['list_id', 'resident_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_residents');
    }
};
