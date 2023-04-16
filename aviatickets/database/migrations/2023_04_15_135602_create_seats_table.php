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
        Schema::create('seats', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignId('airplane_model_id')
                ->references('id')
                ->on('airplane_models')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('seat_class_id')
                ->references('id')
                ->on('seat_classes')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->timestamps(0);
            // TODO posx, posy, price;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
