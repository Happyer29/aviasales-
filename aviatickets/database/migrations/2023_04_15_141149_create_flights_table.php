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
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('air_carrier_id')
                ->references('id')
                ->on('air_carriers')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('air_carrier_id')
                ->references('id')
                ->on('air_carriers')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('from_airport_id')
                ->references('id')
                ->on('airports')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('to_airport_id')
                ->references('id')
                ->on('airports')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('airplane_id')
                ->references('id')
                ->on('airplane')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->timestampTz('from_timestamp', 0);
            $table->timestampTz('to_timestamp', 0);
            $table->timestamps(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
