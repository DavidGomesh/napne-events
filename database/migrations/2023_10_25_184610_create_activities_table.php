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
        Schema::create('activities', function (Blueprint $table) {
            $table->uuid('activity_id')->primary();

            $table->string('description');
            $table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->float('hours');

            $table->integer('vacancies')->nullable();
            $table->integer('amount_subscriptions')->nullable();

            $table->enum('type', ['lecture', 'workshop']);

            $table->foreignUuid('event_fk')->references('event_id')->on('events');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
