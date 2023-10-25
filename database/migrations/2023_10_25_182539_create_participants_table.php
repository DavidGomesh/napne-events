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
        Schema::create('participants', function (Blueprint $table) {
            $table->uuid('participant_id')->primary();
            
            $table->string('name');
            $table->string('email');

            $table->enum('role', ['monitor', 'listener', 'speaker']);

            $table->boolean('has_disability')->nullable();
            $table->string('assistance_needed')->nullable();
            
            $table->boolean('accredited')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
