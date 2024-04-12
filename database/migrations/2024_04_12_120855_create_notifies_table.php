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
        Schema::create('notifies', function (Blueprint $table) {
            $table->string('notify_id', length: 20)->primary();
            $table->string('resident_id', length: 20);
            $table->string('list_id', length: 20);
            $table->string('type_id', length: 20);
            $table->string('title');
            $table->text('description');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('resident_id')->references('resident_id')->on('residents');
            $table->foreign('list_id')->references('list_id')->on('notify_lists');
            $table->foreign('type_id')->references('type_id')->on('notify_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifies');
    }
};
