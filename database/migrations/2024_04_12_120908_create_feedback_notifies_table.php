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
        Schema::create('feedback_notifies', function (Blueprint $table) {
            $table->string('feedback_id', length: 20)->primary();
            $table->string('resident_id', length: 20);
            $table->string('notify_id', length: 20);
            $table->text('content');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('resident_id')->references('resident_id')->on('residents');
            $table->foreign('notify_id')->references('notify_id')->on('notifies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback_notifies');
    }
};
