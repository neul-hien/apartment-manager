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
        Schema::create('residents', function (Blueprint $table) {
            $table->string('resident_id', length: 20)->primary();
            $table->string('apartment_id', length: 20);
            $table->string('username', length: 20);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id_card', length: 25);
            $table->string('phone_number', length: 20);
            $table->date('birthday');
            $table->string('image');
            $table->string('email');
            $table->string('last_login');
            $table->string('other_info')->nullable();
            $table->timestamps();

            $table->foreign('apartment_id')->references('apartment_id')->on('apartments');
            $table->foreign('username')->references('username')->on('accounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residents');
    }
};
